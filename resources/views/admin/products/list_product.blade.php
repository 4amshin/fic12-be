@extends('layout.app_template')

@section('page-title', 'Products')

@section('content')
    <!--Header-->
    <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
        <div class="grow">
            <h5 class="text-16">List Product</h5>
        </div>
    </div>

    <!--Card Body-->
    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
        <div class="xl:col-span-12">
            <div class="card" id="usersTable">
                <!--Page Alert-->
                @include('layout.component.page_alert')

                <!--Search & Add Button-->
                <div class="!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500">
                    <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                        <!--Search Field-->
                        <div class="relative xl:col-span-2">
                            <input type="text"
                                class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                placeholder="Search..." autocomplete="off">
                            <i data-lucide="search"
                                class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                        </div>

                        <!--Add Product-->
                        <div class="xl:col-span-3 xl:col-start-10">
                            <div class="flex gap-2 xl:justify-end">
                                <div class="shrink-0">
                                    <a href="{{ route('product.create') }}"
                                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                        <i data-lucide="plus" class="inline-block size-4"></i>
                                        <span class="align-middle">Add Porduct</span>
                                    </a href="{{ route('product.create') }}">
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div>

                <!--Table-->
                <div class="card-body">
                    <div class="-mx-5 -mb-5 overflow-x-auto">
                        <table class="w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap">
                            <thead class="text-left">
                                <tr
                                    class="relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600">
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="name">Name
                                    </th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="price">
                                        Price</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="stock">
                                        Stock</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="category">
                                        Category</th>
                                    {{-- <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort"
                                        data-sort="description">Description</th> --}}
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold">Action</th>
                                </tr>
                            </thead>

                            <tbody class="list">
                                @forelse ($products as $product)
                                    <tr
                                        class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600">

                                        <!--Name-->
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                            <div class="flex items-center gap-2">
                                                <!--Product Image-->
                                                <div
                                                    class="flex items-center justify-center font-medium rounded-full size-10 shrink-0 bg-slate-200 text-slate-800 dark:text-zink-50 dark:bg-zink-600">
                                                    <img src="{{ $product->image ? '/storage/products/' . $product->image : asset('assets/images/delivery-1.png') }}"
                                                        alt="" class="h-10 rounded-full">
                                                </div>

                                                <!--Product Name-->
                                                <div class="grow">
                                                    <h6 class="mb-1">
                                                        <a href="#!" class="name">{{ $product->name }}</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>

                                        <!--Price-->
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 price">
                                            {{ $product->price }}
                                        </td>

                                        <!--Stock-->
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 stock">
                                            {{ $product->stock }}
                                        </td>

                                        <!--Category-->
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 category">
                                            {{ $product->category }}
                                        </td>

                                        <!--Description-->
                                        {{-- <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 description">
                                            {{ $product->description }}
                                        </td> --}}

                                        <!--Action-->
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                            <div class="flex gap-2">

                                                <!--Tombol Edit-->
                                                <div class="edit">
                                                    <a href="{{ route('product.edit', $product->id) }}"
                                                        class="py-1 text-xs text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 edit-item-btn">
                                                        Edit
                                                    </a>

                                                </div>

                                                <!--Tombol Hapus-->
                                                <div class="remove">
                                                    <button data-modal-target="deleteModal"
                                                        data-product-id="{{ $product->id }}" id="delete-record"
                                                        class="remove-item-btn py-1 text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Remove</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <!--No Content-->
                                    <div class="noresult" style="display: none">
                                        <div class="py-6 text-center">
                                            <i data-lucide="search"
                                                class="w-6 h-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20"></i>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="mb-0 text-slate-500 dark:text-zink-200">We've searched more
                                                than 199+
                                                users We did not find any users for you search.</p>
                                        </div>
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!--Pagination-->
                    {{ $products->withQueryString()->links('layout.component.pagination') }}
                </div>

            </div>
        </div>
    </div>

    <!--Delete User Modal-->
    @include('admin.products.delete_product_modal')

@endsection

@push('customJs')
    <!-- list js-->
    <script src="{{ asset('assets/libs/list.js/list.min.js') }}"></script>
    <script src="{{ asset('assets/libs/list.pagination.js/list.pagination.min.js') }}"></script>

    <!-- User list init js -->
    <script src="{{ asset('assets/js/pages/apps-user-list.init.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.remove-item-btn');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const productId = this.getAttribute('data-product-id');

                    // Dapatkan form dan ubah action URL dengan mengganti :id
                    const form = document.getElementById('deleteForm');
                    const actionUrl = form.getAttribute('action').replace(':id', productId);
                    form.setAttribute('action', actionUrl);

                    // Menampilkan modal (pastikan ini bekerja sesuai framework/modal yang digunakan)
                    const deleteModal = document.getElementById('deleteModal');
                    deleteModal.classList.remove('hidden');
                });
            });
        });
    </script>
@endpush
