<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.products.list_product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.add_product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'public/products';

            $this->createDirectoryIfNotExists($path);

            $file->store($path);
            $validatedData['image'] = $file->hashName();
        }

        // dd($validatedData);

        Product::create($validatedData);
        return redirect()->route('product.index')->with('success', 'New Product Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.update_product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $validatedData = $request->validated();

        $oldImage = $product->image;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'public/products';

            $this->createDirectoryIfNotExists($path);

            $file->store($path);
            $validatedData['image'] = $file->hashName();

            $this->deleteOldFile($path, $oldImage);
        }

        $product->update($validatedData);
        return redirect()->route('product.index')->with('success', 'Product Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    protected function createDirectoryIfNotExists($path)
    {
        if (!Storage::exists($path)) {
            Storage::makeDirectory($path);
        }
    }

    protected function deleteOldFile($path, $oldFile)
    {
        if ($oldFile) {
            Storage::disk($path)->delete($oldFile);
        }
    }
}
