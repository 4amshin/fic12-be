@extends('layout.app_template')

@section('page-title', 'Home')

@section('content')
    <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
        <div class="grow">
            <h5 class="text-16">Ecommerce</h5>
        </div>
        <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
            <li
                class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                <a href="#!" class="text-slate-400 dark:text-zink-200">Dashboards</a>
            </li>
            <li class="text-slate-700 dark:text-zink-100">
                Ecommerce
            </li>
        </ul>
    </div>

    <div class="grid grid-cols-12 2xl:grid-cols-12 gap-x-5">

        <div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
            <div class="text-center card-body">
                <div
                    class="flex items-center justify-center mx-auto rounded-full size-14 bg-custom-100 text-custom-500 dark:bg-custom-500/20">
                    <i data-lucide="wallet-2"></i>
                </div>
                <h5 class="mt-4 mb-2">$<span class="counter-value" data-target="236.18">0</span>k
                </h5>
                <p class="text-slate-500 dark:text-zink-200">Total Revenue</p>
            </div>
        </div><!--end col-->

        <div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
            <div class="text-center card-body">
                <div
                    class="flex items-center justify-center mx-auto text-purple-500 bg-purple-100 rounded-full size-14 dark:bg-purple-500/20">
                    <i data-lucide="package"></i>
                </div>
                <h5 class="mt-4 mb-2"><span class="counter-value" data-target="13461">0</span></h5>
                <p class="text-slate-500 dark:text-zink-200">Total Orders</p>
            </div>
        </div><!--end col-->

        <div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
            <div class="text-center card-body">
                <div
                    class="flex items-center justify-center mx-auto text-green-500 bg-green-100 rounded-full size-14 dark:bg-green-500/20">
                    <i data-lucide="truck"></i>
                </div>
                <h5 class="mt-4 mb-2"><span class="counter-value" data-target="17150">0</span></h5>
                <p class="text-slate-500 dark:text-zink-200">Delivered</p>
            </div>
        </div><!--end col-->

        <div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
            <div class="text-center card-body">
                <div
                    class="flex items-center justify-center mx-auto text-red-500 bg-red-100 rounded-full size-14 dark:bg-red-500/20">
                    <i data-lucide="package-x"></i>
                </div>
                <h5 class="mt-4 mb-2"><span class="counter-value" data-target="3519">0</span></h5>
                <p class="text-slate-500 dark:text-zink-200">Cancelled</p>
            </div>
        </div><!--end col-->


        <div class="col-span-12 card lg:col-span-6 2xl:col-span-3">
            <div class="card-body">
                <div class="flex items-center mb-3">
                    <h6 class="grow text-15">Sales This Month</h6>
                    <div class="relative dropdown shrink-0">
                        <button type="button"
                            class="flex items-center justify-center size-[30px] p-0 bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-700 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10 dropdown-toggle"
                            id="sellingProductDropdown" data-bs-toggle="dropdown">
                            <i data-lucide="more-vertical" class="inline-block size-4"></i>
                        </button>

                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="sellingProductDropdown">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">1 Weekly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">1 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">3 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">6 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">This Yearly</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex items-center gap-3 my-3">
                    <div
                        class="flex items-center justify-center text-green-500 rounded-md size-12 bg-green-50 shrink-0 dark:bg-green-500/10">
                        <i data-lucide="trending-up"></i>
                    </div>
                    <div class="grow">
                        <p class="mb-1 text-slate-500 dark:text-zink-200">Total Profit</p>
                        <h5 class="text-15">$<span class="counter-value" data-target="746.84">0</span>k</h5>
                    </div>
                </div>
                <div id="salesThisMonthChart" class="apex-charts"
                    data-chart-colors='["bg-sky-100", "bg-orange-100", "bg-sky-500", "bg-orange-500"]' dir="ltr"></div>
            </div>
        </div><!--end col-->

        <div class="col-span-12 card lg:col-span-6 2xl:col-span-3">
            <div class="card-body">
                <div class="flex items-center mb-3">
                    <h6 class="grow text-15">Top Selling Products</h6>
                    <div class="relative dropdown shrink-0">
                        <button type="button"
                            class="flex items-center justify-center size-[30px] p-0 bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-700 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10 dropdown-toggle"
                            id="sellingProductDropdown" data-bs-toggle="dropdown">
                            <i data-lucide="more-vertical" class="inline-block size-4"></i>
                        </button>

                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="sellingProductDropdown">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">1 Weekly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">1 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">3 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">6 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">This Yearly</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="flex flex-col gap-5">
                    <li class="flex items-center gap-3">
                        <div class="flex items-center justify-center w-10 h-10 rounded-md bg-slate-100 dark:bg-zink-600">
                            <img src="assets/images/img-02.png" alt="" class="h-6">
                        </div>
                        <div class="overflow-hidden grow">
                            <h6 class="truncate">Mesh Ergonomic Black Chair</h6>
                            <div class="text-yellow-500">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-half-fill"></i>
                            </div>
                        </div>
                        <h6 class="shrink-0"><i data-lucide="shopping-cart"
                                class="inline-block align-middle size-4 text-slate-500 dark:text-zink-200 ltr:mr-1 rtl:ml-1"></i>
                            798</h6>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="flex items-center justify-center w-10 h-10 rounded-md bg-slate-100 dark:bg-zink-600">
                            <img src="assets/images/img-03.png" alt="" class="h-6">
                        </div>
                        <div class="overflow-hidden grow">
                            <h6 class="truncate">Fastcolors Typography Men</h6>
                            <div class="text-yellow-500">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-half-fill"></i>
                            </div>
                        </div>
                        <h6 class="shrink-0"><i data-lucide="shopping-cart"
                                class="inline-block align-middle size-4 text-slate-500 dark:text-zink-200 ltr:mr-1 rtl:ml-1"></i>
                            695</h6>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="flex items-center justify-center w-10 h-10 rounded-md bg-slate-100 dark:bg-zink-600">
                            <img src="assets/images/img-04.png" alt="" class="h-6">
                        </div>
                        <div class="overflow-hidden grow">
                            <h6 class="truncate">Mesh Ergonomic Green Chair</h6>
                            <div class="text-yellow-500">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-half-fill"></i>
                            </div>
                        </div>
                        <h6 class="shrink-0"><i data-lucide="shopping-cart"
                                class="inline-block align-middle size-4 text-slate-500 dark:text-zink-200 ltr:mr-1 rtl:ml-1"></i>
                            985</h6>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="flex items-center justify-center w-10 h-10 rounded-md bg-slate-100 dark:bg-zink-600">
                            <img src="assets/images/img-05.png" alt="" class="h-6">
                        </div>
                        <div class="overflow-hidden grow">
                            <h6 class="truncate">Techel Black Bluetooth Soundbar</h6>
                            <div class="text-yellow-500">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-half-fill"></i>
                            </div>
                        </div>
                        <h6 class="shrink-0"><i data-lucide="shopping-cart"
                                class="inline-block align-middle size-4 text-slate-500 dark:text-zink-200 ltr:mr-1 rtl:ml-1"></i>
                            813</h6>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="flex items-center justify-center w-10 h-10 rounded-md bg-slate-100 dark:bg-zink-600">
                            <img src="assets/images/img-06.png" alt="" class="h-6">
                        </div>
                        <div class="overflow-hidden grow">
                            <h6 class="truncate">Bovet Fleurier AIFSQ029</h6>
                            <div class="text-yellow-500">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-half-fill"></i>
                            </div>
                        </div>
                        <h6 class="shrink-0"><i data-lucide="shopping-cart"
                                class="inline-block align-middle size-4 text-slate-500 dark:text-zink-200 ltr:mr-1 rtl:ml-1"></i>
                            915</h6>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="flex items-center justify-center w-10 h-10 rounded-md bg-slate-100 dark:bg-zink-600">
                            <img src="assets/images/img-03.png" alt="" class="h-6">
                        </div>
                        <div class="overflow-hidden grow">
                            <h6 class="truncate">Fastcolors Typography Men</h6>
                            <div class="text-yellow-500">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-half-fill"></i>
                            </div>
                        </div>
                        <h6 class="shrink-0"><i data-lucide="shopping-cart"
                                class="inline-block align-middle size-4 text-slate-500 dark:text-zink-200 ltr:mr-1 rtl:ml-1"></i>
                            785</h6>
                    </li>
                </ul>
            </div>
        </div><!--end col-->
    </div><!--end grid-->
@endsection

@push('customJs')
    <!--apexchart js-->
    <script src='{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}'></script>

    <!--dashboard ecommerce init js-->
    <script src='{{ asset('assets/js/pages/dashboards-ecommerce.init.js') }}'></script>
@endpush
