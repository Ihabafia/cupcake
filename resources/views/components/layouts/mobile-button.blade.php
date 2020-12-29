<!-- Mobile menu button -->
<button @click="open = !open"
        class="bg-amber-700 dark:bg-gray-900 p-2 rounded-md inline-flex items-center justify-center text-amber-200 hover:text-white dark:text-gray-300 hover:bg-amber-600 dark:hover:bg-gray-600 hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-amber-600 dark:focus:ring-offset-gray-600 focus:ring-white"
        x-bind:aria-expanded="open" aria-expanded="true">
    <span class="sr-only">Open main menu</span>
    <svg x-state:on="Menu open" x-state:off="Menu closed"
         :class="{ 'hidden': open, 'block': !open }" class="h-6 w-6 hidden"
         x-description="Heroicon name: menu" xmlns="http://www.w3.org/2000/svg"
         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
    <svg x-state:on="Menu open" x-state:off="Menu closed"
         :class="{ 'hidden': !open, 'block': open }" class="h-6 w-6 block"
         x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg"
         fill="none"
         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M6 18L18 6M6 6l12 12"></path>
    </svg>
</button>
