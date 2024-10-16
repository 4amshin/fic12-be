<div
    class="items-center justify-center hidden px-5 text-center h-header group-data-[layout=horizontal]:md:flex group-data-[layout=horizontal]:ltr::pl-0 group-data-[layout=horizontal]:rtl:pr-0">
    <a href="{{ asset('home') }}">
        <span class="hidden">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" class="h-6 mx-auto">
        </span>
        <span class="group-data-[topbar=dark]:hidden group-data-[topbar=brand]:hidden">
            <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" class="h-6 mx-auto">
        </span>
    </a>
    <a href="{{ asset('home') }}" class="hidden group-data-[topbar=dark]:block group-data-[topbar=brand]:block">
        <span class="group-data-[topbar=dark]:hidden group-data-[topbar=brand]:hidden">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" class="h-6 mx-auto">

        </span>
        <span class="group-data-[topbar=dark]:block group-data-[topbar=brand]:block">
            <img src="{{ asset('assets/images/logo-light.png') }}" alt="" class="h-6 mx-auto">

        </span>
    </a>
</div>
