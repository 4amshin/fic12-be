@extends('layout.app_template')

@section('page-title', 'Categories')

@section('content')
    <!--Header-->
    <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
        <div class="grow">
            <h5 class="text-16">List Category</h5>
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

                        <!--Add Category-->
                        <div class="xl:col-span-3 xl:col-start-10">
                            <div class="flex gap-2 xl:justify-end">
                                <div class="shrink-0">
                                    <button data-modal-target="addCategoryModal" type="submit"
                                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                        <i data-lucide="plus" class="inline-block size-4"></i>
                                        <span class="align-middle">Add New Category</span>
                                    </button>
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
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort"
                                        data-sort="created_at">Created At</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold">Action</th>
                                </tr>
                            </thead>

                            <tbody class="list">
                                @forelse ($categories as $category)
                                    <tr
                                        class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600">

                                        <!--Name-->
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 name">
                                            {{ ucwords($category->name) }}
                                        </td>

                                        <!--Created At-->
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 created_at">
                                            {{ \Carbon\Carbon::parse($category->created_at)->format('d M Y - h:i A') }}
                                        </td>

                                        <!--Action-->
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                            <div class="flex gap-2">

                                                <!--Tombol Edit-->
                                                <div class="edit">
                                                    <button data-modal-target="updateCategoryModal"
                                                        data-category-id="{{ $category->id }}"
                                                        data-category-name="{{ $category->name }}"
                                                        class="py-1 text-xs text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 edit-item-btn">
                                                        Edit
                                                    </button>

                                                </div>

                                                <!--Tombol Hapus-->
                                                <div class="remove">
                                                    <button data-modal-target="deleteModal"
                                                        data-category-id="{{ $category->id }}" id="delete-record"
                                                        class="py-1 text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20 remove-item-btn">Remove</button>
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
                    {{ $categories->withQueryString()->links('layout.component.pagination') }}
                </div>

            </div>
        </div>
    </div>

    <!--Add Category Modal-->
    @include('admin.categories.add_category_modal')

    <!--Update Category Modal-->
    @include('admin.categories.update_category_modal')

    <!--Delete User Modal-->
    {{-- @include('admin.users.delete_user_modal') --}}

@endsection


@push('customJs')
    <!-- list js-->
    <script src="{{ asset('assets/libs/list.js/list.min.js') }}"></script>
    <script src="{{ asset('assets/libs/list.pagination.js/list.pagination.min.js') }}"></script>

    <!-- User list init js -->
    <script src="{{ asset('assets/js/pages/apps-user-list.init.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const editButtons = document.querySelectorAll('.edit-item-btn');
            const deleteButtons = document.querySelectorAll('.remove-item-btn');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const categoryId = this.getAttribute('data-category-id');

                    const form = document.getElementById('deleteForm');
                    const actionUrl = form.getAttribute('action').replace(':id', categoryId);
                    form.setAttribute('action', actionUrl);
                });
            });

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const categoryId = this.getAttribute('data-category-id');
                    const categoryName = this.getAttribute('data-category-name');

                    // Ambil form dan ganti ':id' di action dengan category id
                    const form = document.getElementById('updateCategoryForm');
                    const actionUrl = form.getAttribute('action').replace(':id', categoryId);
                    form.setAttribute('action', actionUrl);

                    // Set value to the form fields in the modal
                    document.querySelector('#updateCategoryModal input[name="id"]').value = categoryId;
                    document.querySelector('#updateCategoryModal input[name="name"]').value = categoryName;

                    // Open the modal
                    const modalElement = document.getElementById('updateCategoryModal');
                    modalElement.classList.remove('hidden');
                    modalElement.classList.add('show');
                });
            });
        });
    </script>
@endpush
