<!-- resources/views/vendor/pagination/custom.blade.php -->
@if ($paginator->hasPages())
    <div class="flex flex-col items-center mt-8 md:flex-row">
        <div class="mb-4 grow md:mb-0">
            <p class="text-slate-500 dark:text-zink-200">
                Showing <b>{{ $paginator->firstItem() }}</b> to <b>{{ $paginator->lastItem() }}</b> of
                <b>{{ $paginator->total() }}</b> Results
            </p>
        </div>
        <ul class="flex flex-wrap items-center gap-2">
            <!-- Previous Page Link -->
            @if ($paginator->onFirstPage())
                <li>
                    <span
                        class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-400 dark:text-zink-300 cursor-auto">
                        <i class="size-4 rtl:rotate-180" data-lucide="chevrons-left"></i>
                    </span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}"
                        class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500">
                        <i class="size-4 rtl:rotate-180" data-lucide="chevrons-left"></i>
                    </a>
                </li>
            @endif

            <!-- Pagination Elements -->
            @foreach ($elements as $element)
                <!-- "Three Dots" Separator -->
                @if (is_string($element))
                    <li>
                        <span
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-400 dark:text-zink-300 cursor-auto">{{ $element }}</span>
                    </li>
                @endif

                <!-- Array Of Links -->
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <span
                                    class="inline-flex items-center justify-center bg-custom-500 size-8 transition-all duration-150 ease-linear border border-custom-500 rounded text-custom-50 cursor-auto">{{ $page }}</span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}"
                                    class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            <!-- Next Page Link -->
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}"
                        class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500">
                        <i class="size-4 rtl:rotate-180" data-lucide="chevrons-right"></i>
                    </a>
                </li>
            @else
                <li>
                    <span
                        class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-400 dark:text-zink-300 cursor-auto">
                        <i class="size-4 rtl:rotate-180" data-lucide="chevrons-right"></i>
                    </span>
                </li>
            @endif
        </ul>
    </div>
@endif
