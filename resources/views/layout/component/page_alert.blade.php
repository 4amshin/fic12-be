<!--Notifikasi Singkat-->
@if (session('success'))
    <div
        class="relative p-3 pr-12 text-sm text-green-500 border border-transparent rounded-md bg-green-50 dark:bg-green-400/20">
        <button
            class="absolute top-0 bottom-0 right-0 p-3 text-green-200 transition hover:text-green-500 dark:text-green-400/50 dark:hover:text-green-500"><svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x"
                class="lucide lucide-x h-5">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
            </svg></button>
        <span class="font-bold">Success |</span> {{ session('success') }}
    </div>
@elseif (session('info'))
    <div
        class="relative p-3 pr-12 text-sm border border-transparent rounded-md text-sky-500 bg-sky-50 dark:bg-sky-400/20">
        <button
            class="absolute top-0 bottom-0 right-0 p-3 transition text-sky-200 hover:text-sky-500 dark:text-sky-400/50 dark:hover:text-sky-500"><svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x"
                class="lucide lucide-x h-5">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
            </svg></button>
        <span class="font-bold">Info |</span> {{ session('info') }}
    </div>
@elseif (session('error'))
    <div
        class="relative p-3 pr-12 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-400/20">
        <button
            class="absolute top-0 bottom-0 right-0 p-3 text-red-200 transition hover:text-red-500 dark:text-red-400/50 dark:hover:text-red-500"><svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x"
                class="lucide lucide-x h-5">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
            </svg></button>
        <span class="font-bold">Error |</span> {{ session('error') }}
    </div>
@endif

