@extends('layout.auth_template')

@section('page-title', 'Register')

@section('content')
    <!--Header-->
    <div class="mt-8 text-center">
        <h4 class="mb-1 text-custom-500 dark:text-custom-500">Create your free account</h4>
        <p class="text-slate-500 dark:text-zink-200">Get your free starcode account now</p>
    </div>

    <!--Form-->
    <form action="{{ route('register') }}" method="POST" class="mt-10">
        @csrf

        <!--Name-->
        <div class="mb-3">
            <label for="name" class="inline-block mb-2 text-base font-medium">Name</label>
            <input type="text" id="name" name="name"
                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                placeholder="Enter Name">
        </div>

        <!--Email-->
        <div class="mb-3">
            <label for="email-field" class="inline-block mb-2 text-base font-medium">Email</label>
            <input type="text" id="email-field" name="email"
                class="form-input  @error('email') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                placeholder="Enter email">
            @error('email')
                <div id="email-error" class="hidden mt-1 text-sm text-red-500">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!--Password-->
        <div class="mb-3">
            <label for="password" class="inline-block mb-2 text-base font-medium">Password</label>
            <input type="password" id="password" name="password"
                class="form-input @error('password') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                placeholder="Enter password">
            @error('password')
                <div id="password-error" class="hidden mt-1 text-sm text-red-500">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <!--Password Confirmation-->
        <div class="mb-3">
            <label for="password_confirmation" class="inline-block mb-2 text-base font-medium">Password Confirmation</label>
            <input type="password" id="password_confirmation" name="password_confirmation"
                class="form-input @error('password_confirmation') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                placeholder="Confirm Password">
            @error('password_confirmation')
                <div id="password-error" class="hidden mt-1 text-sm text-red-500">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!--Button-->
        <div class="mt-10">
            <button type="submit"
                class="w-full text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                Sign Up
            </button>
        </div>

        <!--Link Login-->
        <div class="mt-10 text-center">
            <p class="mb-0 text-slate-500 dark:text-zink-200">Already have an account ?
                <a href="{{ route('login') }}"
                    class="font-semibold underline transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500">
                    Login
                </a>
            </p>
        </div>
    </form>
@endsection


@push('customJs')
    <script src="assets/js/pages/auth-register.init.js"></script>
@endpush
