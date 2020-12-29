<!-- Profile dropdown -->
<div @click.away="open = false"
     class="ml-3 relative flex-shrink-0"
     x-data="{ open: false }">
    <div>
        <button @click="open = !open"
                class="bg-amber-700 dark:bg-gray-900 rounded-full flex text-sm text-white focus:outline-none focus:ring-1 focus:ring-offset-1 focus:ring-offset-amber-600 dark:focus:ring-offset-gray-600 focus:ring-white"
                id="user-menu" aria-haspopup="true" x-bind:aria-expanded="open">
            <span class="sr-only">Open user menu</span>
            <img class="rounded-full h-8 w-8"
                 src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                 alt="">
        </button>
    </div>
    <div x-show="open"
         x-description="Profile dropdown panel, show/hide based on dropdown state."
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white dark:bg-gray-700 ring-1 ring-black ring-opacity-5"
         role="menu" aria-orientation="vertical" aria-labelledby="user-menu"
         style="display: none;">

        <a href="#"
           class="block py-2 px-4 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover-gray-600 "
           role="menuitem">
            Your Profile
        </a>

        <a href="#"
           class="block py-2 px-4 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover-gray-600 "
           role="menuitem">
            Settings
        </a>

        <a href="#"
           class="block py-2 px-4 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover-gray-600 "
           role="menuitem">
            Sign out
        </a>

    </div>
</div>
