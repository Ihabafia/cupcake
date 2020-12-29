<div class="max-w-xl w-full xl:w-full">
    <label for="search" class="sr-only">Search</label>
    <div class="relative text-gray-400 focus-within:text-gray-600 dark:text-gray-400 dark:focus-within:text-gray-300">
        <div
            class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
            <svg class="h-5 w-5" x-description="Heroicon name: search"
                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                 fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"></path>
            </svg>
        </div>
        <input id="search"
               class="block  w-full bg-white dark:bg-gray-700 py-2 pl-10 pr-3 dark:border border-transparent rounded-md leading-5 text-gray-900 dark:text-gray-100 placeholder-gray-500 focus:outline-none focus:ring-1 focus:ring-offset-1 focus:ring-offset-amber-600 dark:focus:ring-offset-gray-800 focus:ring-amber-500 dark:focus:ring-gray-600 focus:border-white sm:text-sm"
               placeholder="Search" type="search" name="search" value="{{ $query }}">
    </div>
</div>
