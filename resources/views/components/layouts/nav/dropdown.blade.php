@props([
    'title' => 'None',
    'active' => false,
])

<div x-data="{ open: false }" @keydown.escape="open = false"
     @click.away="open = false" class="relative inline-block text-left">
    <div>
        <button @click="open = !open" type="button"
                class="{{ $active ? 'bg-amber-600 dark:bg-gray-700':'hover:bg-amber-600 dark:hover:bg-gray-600 hover:bg-opacity-75' }} inline-flex justify-center w-full rounded-md px-3 py-2 text-sm font-medium text-white dark:text-gray-300 focus:outline-none {{--focus:ring-0 focus:ring-offset-0 focus:ring-offset-gray-100 focus:ring-indigo-500--}}"
                id="options-menu" aria-haspopup="true"
                x-bind:aria-expanded="open">
            {{ $title }}
            <svg class="-mr-1 ml-2 h-5 w-5"
                 x-description="Heroicon name: chevron-down"
                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                 fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    <div x-show="open"
         x-description="Dropdown panel, show/hide based on dropdown state."
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white dark:bg-gray-700 ring-1 ring-black ring-opacity-5 divide-y divide-gray-300 dark:divide-gray-600"
         role="menu" aria-orientation="vertical"
         aria-labelledby="options-menu" style="display: none;">
        {{ $slot }}
    </div>
</div>
