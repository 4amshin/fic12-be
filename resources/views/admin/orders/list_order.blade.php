@extends('layout.app_template')

@section('page-title', 'Orders')

@section('content')
    <!--Header-->
    <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
        <div class="grow">
            <h5 class="text-16">Orders</h5>
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
                                    <a href="{{ route('order.create') }}"
                                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                        <i data-lucide="plus" class="inline-block size-4"></i>
                                        <span class="align-middle">New Order</span>
                                    </a>
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
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort"
                                        data-sort="transaction_time">Transaction Time
                                    </th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="kasir">
                                        Kasir</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="total_item">
                                        Total Item</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="toal_price">
                                        Total Price</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="payment_method">
                                        Payment Method</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold">Action</th>
                                </tr>
                            </thead>

                            <tbody class="list">
                                @forelse ($orders as $order)
                                    <tr
                                        class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600">

                                        <!--Transaction Time-->
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 transaction_time">
                                            {{ \Carbon\Carbon::parse($order->transaction_time)->format('d M Y - h:i A') }}
                                        </td>

                                        <!--Kasir-->
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 kasir">
                                            {{ $order->kasir->name }}
                                        </td>

                                        <!--Total Item-->
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 total_item">
                                            {{ $order->total_item }}
                                        </td>

                                        <!--Total Price-->
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 total_price">
                                            Rp {{ number_format($order->total_price, 0, ',', '.') }}
                                        </td>

                                        <!--Payment Method-->
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 payment_method">
                                            @if ($order->payment_method == 'QRIS')
                                                <span
                                                    class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-sky-100 border-sky-200 text-sky-500 dark:bg-sky-500/20 dark:border-sky-500/20">
                                                    QRIS
                                                </span>
                                            @else
                                                <span
                                                    class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-green-100 border-green-200 text-green-500 dark:bg-green-500/20 dark:border-green-500/20">
                                                    Tunai
                                                </span>
                                            @endif
                                        </td>

                                        <!--Action-->
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                            <div class="flex gap-2">

                                                <!--Detail-->
                                                <div class="detail">
                                                    <a href="{{ route('order.show', $order->id) }}"
                                                        class="py-1 text-xs text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 edit-item-btn">
                                                        Order Detail
                                                    </a>

                                                </div>

                                                <!--Tombol Edit-->
                                                {{-- <div class="edit">
                                                    <a href="{{ route('order.edit', $order->id) }}"
                                                        class="py-1 text-xs text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 edit-item-btn">
                                                        Edit
                                                    </a>
                                                </div> --}}

                                                <!--Tombol Hapus-->
                                                {{-- <div class="remove">
                                                    <button data-modal-target="deleteModal"
                                                        data-order-id="{{ $order->id }}" id="delete-record"
                                                        class="remove-item-btn py-1 text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Remove</button>
                                                </div> --}}
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
                    {{ $orders->withQueryString()->links('layout.component.pagination') }}
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
                    const orderId = this.getAttribute('data-order-id');

                    // Dapatkan form dan ubah action URL dengan mengganti :id
                    const form = document.getElementById('deleteForm');
                    const actionUrl = form.getAttribute('action').replace(':id', orderId);
                    form.setAttribute('action', actionUrl);

                    // Menampilkan modal (pastikan ini bekerja sesuai framework/modal yang digunakan)
                    const deleteModal = document.getElementById('deleteModal');
                    deleteModal.classList.remove('hidden');
                });
            });
        });
    </script>
@endpush
