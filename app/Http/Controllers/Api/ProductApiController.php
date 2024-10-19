<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        // return response()->json($products);
        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validatedData = $request->validated();

        if($validatedData) {
            //Handle Image
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $path = 'public/products';

                //create directory if not exist
                $this->createDirectoryIfNotExists($path);

                $file->store($path);
                $validatedData['image'] = $file->hashName();
            }

            $product = Product::create($validatedData);
            return new ProductResource($product);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $productApi)
    {
        return new ProductResource($productApi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $productApi)
    {
        $validatedData = $request->validated();

        if($validatedData) {
            //Handle Image
            $oldImage = $productApi->image;
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $path = 'public/products';

                //create folder if not exist
                $this->createDirectoryIfNotExists($path);

                $file->store($path);
                $validatedData['image'] = $file->hashName();

                $this->deleteOldFile($path, $oldImage);
            }

            $productApi->update($validatedData);
            return new ProductResource($productApi);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $productApi)
    {
        try{
            $this->deleteOldFile('public/products', $productApi->image);
            $productApi->delete();

            return response()->json([
                'message' => 'Product Deleted Successfully'
            ], Response::HTTP_OK);
        }catch (Exception $e) {
            return response()->json([
                'message' => 'Deleting Failed',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
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
