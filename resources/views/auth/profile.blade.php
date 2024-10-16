@extends('layout.app_template')

@section('page-title', 'Profile')

@section('content')
    <!--Header-->
    <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
        <div class="grow">
            <h5 class="text-16">Account Settings</h5>
        </div>
    </div>

    <!--Card Body-->
    <div class="card">
        <div class="card-body">
            <h6 class="mb-1 text-15">Personal Information</h6>
            <p class="mb-4 text-slate-500 dark:text-zink-200">Update your photo and personal details here
                easily.</p>
            @php
                $user = auth()->user();
            @endphp

            <!--Form-->
            <form action="#!">
                <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                    <!--Profile Img-->
                    <div class="xl:col-span-12">
                        <div
                            class="relative inline-block rounded-full shadow-md size-20 bg-slate-100 profile-user xl:size-28">
                            <img src="assets/images/avatar-1.png" alt=""
                                class="object-cover border-0 rounded-full img-thumbnail user-profile-image">
                            <div
                                class="absolute bottom-0 flex items-center justify-center rounded-full size-8 ltr:right-0 rtl:left-0 profile-photo-edit">
                                <input id="profile-img-file-input" type="file" class="hidden profile-img-file-input">
                                <label for="profile-img-file-input"
                                    class="flex items-center justify-center bg-white rounded-full shadow-lg cursor-pointer size-8 dark:bg-zink-600 profile-photo-edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="image-plus"
                                        class="lucide lucide-image-plus size-4 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500">
                                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h7"></path>
                                        <line x1="16" x2="22" y1="5" y2="5"></line>
                                        <line x1="19" x2="19" y1="2" y2="8"></line>
                                        <circle cx="9" cy="9" r="2"></circle>
                                        <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                                    </svg>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!--Name-->
                    <div class="xl:col-span-6">
                        <label for="inputValue" class="inline-block mb-2 text-base font-medium">First
                            Name</label>
                        <input type="text" id="inputValue"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Enter your value" value="{{ $user->name }}">
                    </div>

                    <!--Phone Number-->
                    <div class="xl:col-span-6">
                        <label for="inputValue" class="inline-block mb-2 text-base font-medium">Phone
                            Number</label>
                        <input type="text" id="inputValue"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="+855 8456 5555 23" value="{{ $user->phone }}">
                    </div>

                    <!--Email-->
                    <div class="xl:col-span-6">
                        <label for="inputValue" class="inline-block mb-2 text-base font-medium">Email
                            Address</label>
                        <input type="email" id="inputValue"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Enter your email address" value="{{ $user->email }}">
                    </div>

                    <!--Password-->
                    <div class="xl:col-span-6">
                        <label for="password" class="inline-block mb-2 text-base font-medium">Password</label>
                        <input type="password" id="password"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            value="{{ $user->unhashed_password }}">
                    </div>
                </div>

                <!--Buttons-->
                <div class="flex justify-end mt-6 gap-x-4">
                    <button type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Save</button>
                    <button type="button"
                        class="text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20">Reset</button>
                </div>
            </form>
        </div>
    </div>
@endsection
