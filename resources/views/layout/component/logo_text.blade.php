<div
    class="flex items-center justify-center px-5 text-center h-header group-data-[layout=horizontal]:hidden group-data-[sidebar-size=sm]:fixed group-data-[sidebar-size=sm]:top-0 group-data-[sidebar-size=sm]:bg-vertical-menu group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar-size=sm]:group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:bg-gradient-to-br group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:to-vertical-menu-to-modern group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:from-vertical-menu-form-modern group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:bg-vertical-menu-modern group-data-[sidebar-size=sm]:z-10 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.vertical-menu-sm')_-_1px)] group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:dark:bg-zink-700">
    <a href="{{ route('home') }}"
        class="group-data-[sidebar=dark]:hidden group-data-[sidebar=brand]:hidden group-data-[sidebar=modern]:hidden">
        <span class="hidden group-data-[sidebar-size=sm]:block">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" class="h-6 mx-auto">

        </span>
        <span class="group-data-[sidebar-size=sm]:hidden">
            <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" class="h-6 mx-auto">

        </span>
    </a>
    <a href="{{ route('home') }}"
        class="hidden group-data-[sidebar=dark]:block group-data-[sidebar=brand]:block group-data-[sidebar=modern]:block">
        <span class="hidden group-data-[sidebar-size=sm]:block">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" class="h-6 mx-auto">
        </span>
        <span class="group-data-[sidebar-size=sm]:hidden">
            <img src="{{ asset('assets/images/logo-light.png') }}" alt="" class="h-6 mx-auto">
        </span>
    </a>
    <button type="button" class="hidden p-0 float-end" id="vertical-hover">
        <i class="ri-record-circle-line"></i>
    </button>
</div>
