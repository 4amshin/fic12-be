@extends('layout.app_template')

@section('page-title', 'Add Product')

@section('content')
    <!--Header-->
    <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
        <div class="grow">
            <h5 class="text-16">Add New</h5>
        </div>
        <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
            <li
                class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                <a href="#!" class="text-slate-400 dark:text-zink-200">Products</a>
            </li>
            <li class="text-slate-700 dark:text-zink-100">
                Add New
            </li>
        </ul>
    </div>

    <!--Body-->
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
        <!--Input Field-->
        <div class="xl:col-span-8">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Create Product</h6>

                    <!--Form-->
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                            <!--Name-->
                            <div class="xl:col-span-6">
                                <label for="productName" class="inline-block mb-2 text-base font-medium">Product
                                    Name</label>
                                <input type="text" id="productName" name="name"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Product Name" required="">
                            </div>

                            <!--Stock-->
                            <div class="xl:col-span-6">
                                <label for="stock" class="inline-block mb-2 text-base font-medium">Stock</label>
                                <input type="number" id="stock" name="stock"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Stock" required="">
                            </div>

                            <!--Price-->
                            <div class="xl:col-span-6">
                                <label for="productPrice" class="inline-block mb-2 text-base font-medium">Price</label>
                                <input type="number" id="productPrice" name="price"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Rp..." required="">
                            </div>

                            <!--Category-->
                            <div class="xl:col-span-6">
                                <label for="category" class="inline-block mb-2 text-base font-medium">Category</label>
                                <select
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    data-choices="" data-choices-search-false="" name="category" id="category">
                                    <option value="">Select Category</option>
                                    <option value="food">Food</option>
                                    <option value="drink">Drink</option>
                                    <option value="snack">Snack</option>
                                </select>
                            </div>

                            <!--Image-->
                            <div class="lg:col-span-2 xl:col-span-12">
                                <label for="image" class="inline-block mb-2 text-base font-medium">Image</label>
                                <input type="file" id="upload" name="image" class="cursor-pointer form-file border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Enter your name">
                            </div>

                        </div>

                        <!--Buttons-->
                        <div class="flex justify-end gap-2 mt-4">
                            <button type="reset" id="reset-image"
                                class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Reset</button>
                            <button type="submit"
                                class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Save
                                Product</button>
                        </div>
                    </form>
                </div>
            </div><!--end card-->
        </div>

        <!--Product Image Preview-->
        <div class="xl:col-span-4">
            <div class="card sticky top-[calc(theme('spacing.header')_*_1.3)]">
                <div class="card-body">
                    <!--Title-->
                    <h6 class="mb-4 text-15">Product Image Preview</h6>

                    <!--Image-->
                    <div class="px-5 py-8 rounded-md bg-sky-50 dark:bg-zink-600">
                        <img src="{{ asset('assets/images/delivery-1.png') }}" alt="" class="block mx-auto h-48" id="uploadedProduct">
                    </div>
                </div>
            </div>
        </div>
    </div><!--end grid-->
@endsection

@push('customJs')
    <!-- dropzone -->
    <script src="{{ asset('assets/libs/dropzone/dropzone-min.js') }}"></script>
    <!--product create init js-->
    <script src="{{ asset('assets/js/pages/apps-ecommerce-product-create.init.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const uploadedProduct = document.getElementById('uploadedProduct');
            const uploadInput = document.getElementById('upload');
            const resetButton = document.querySelector('.reset-image');
            const defaultAvatarSrc =
                "{{ asset('assets/images/delivery-1.png')}}";

            // Handle image upload
            uploadInput.addEventListener('change', function(event) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    uploadedProduct.src = e.target.result;
                };
                if (event.target.files[0]) {
                    reader.readAsDataURL(event.target.files[0]);
                }
            });

            // Handle image reset
            resetButton.addEventListener('click', function() {
                uploadedProduct.src = defaultAvatarSrc;
                uploadInput.value = '';
            });
        });
    </script>
@endpush
