<x-layout.master >
    <div class="h-screen flex overflow-hidden bg-gray-100 md:bg-gray-200 dark:bg-gray-800" x-data="{ sidebarOpen: false }"
         @keydown.window.escape="sidebarOpen = false">
        <div x-show="sidebarOpen" class="lg:hidden"
             x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state."
             style="display: none;">
            <div class="fixed inset-0 flex z-40">
                <div @click="sidebarOpen = false" x-show="sidebarOpen"
                     x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state."
                     x-transition:enter="transition-opacity ease-linear duration-300"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="transition-opacity ease-linear duration-300"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     class="fixed inset-0" style="display: none;"
                >
                    <div class="absolute inset-0 bg-gray-600 dark:bg-gray-900 opacity-60" aria-hidden="true"></div>
                </div>
                <div x-show="sidebarOpen"
                     x-description="Off-canvas menu, show/hide based on off-canvas menu state."
                     x-transition:enter="transition ease-in-out duration-300 transform"
                     x-transition:enter-start="-translate-x-full"
                     x-transition:enter-end="translate-x-0"
                     x-transition:leave="transition ease-in-out duration-300 transform"
                     x-transition:leave-start="translate-x-0"
                     x-transition:leave-end="-translate-x-full"
                     class="relative flex-1 flex flex-col max-w-xs w-full pt-2 pb-4 bg-amber-700  dark:bg-gray-800"
                     style="display: none;">
                    <div class="absolute top-0 right-0 -mr-12 pt-2">
                        <button x-show="sidebarOpen"
                                @click="sidebarOpen = false"
                                class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                                style="display: none;">
                            <span class="sr-only">Close sidebar</span>
                            <svg class="h-6 w-6 text-white"
                                 x-description="Heroicon name: x"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex-shrink-0 flex items-center px-4 mt-3 ml-3">
                        <a href="{{route('home')}}">
                            <x-layout.logo />
                        </a>
                    </div>
                    <x-layout.nav.sidebar />
                </div>
                <div class="flex-shrink-0 w-14" aria-hidden="true">
                    <!-- Dummy element to force sidebar to shrink to fit close icon -->
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden lg:flex lg:flex-shrink-0">
            <div class="flex flex-col w-64">
                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex flex-col flex-grow bg-amber-700 dark:bg-gray-900 pt-2 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-6 mt-3">
                        <a href="{{route('home')}}" class="z-20">
                            <x-layout.logo />
                        </a>
                    </div>
                    <x-layout.nav.navigation />
                </div>
            </div>
        </div>

        <div x-init="$el.focus()" class="flex-1 overflow-auto focus:outline-none" tabindex="0">
            <div class="relative z-10 flex-shrink-0 flex h-20 bg-white dark:bg-gray-900 border-b border-gray-200 lg:border-none">
                <button @click.stop="sidebarOpen = true"
                        class="px-4 border-r border-gray-200 text-gray-400 focus:outline-none focus:ring-0 focus:ring-inset focus:ring-amber-500 lg:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="h-6 w-6" x-description="Heroicon name: menu-alt-1"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h8m-8 6h16"></path>
                    </svg>
                </button>




                <!-- Search bar -->
                <div class="flex-1 px-4 flex justify-between sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                    <div class="flex-1 flex">
                        <form class="w-full flex md:ml-0" action="#" method="GET">
                            <label for="search_field" class="sr-only">Search</label>
                            <div class="relative w-full text-gray-400 focus-within:text-gray-600 dark:text-gray-500 dark:focus-within:text-gray-300">
                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none"
                                     aria-hidden="true">
                                    <svg class="h-5 w-5" x-description="Heroicon name: search"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                         fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input id="search_field" name="search_field"
                                       class="block dark:bg-gray-900 bg-white w-full h-full pl-8 pr-3 py-4 border-transparent font-light text-gray-700 dark:text-gray-200 placeholder-gray-500 dark:placeholder-gray-500 dark:focus:placeholder-gray-300 focus:outline-none focus:ring-0 focus:border-transparent text-xl"
                                       placeholder="Search transactions" type="search">
                            </div>
                        </form>
                    </div>
                    <div class="ml-4 flex items-center md:ml-6">
                        <button
                            class="bg-white dark:bg-gray-900 p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-amber-500">
                            <span class="sr-only">View notifications</span>
                            <svg class="h-7 w-7" x-description="Heroicon name: bell"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                        </button>
                        <!-- Profile dropdown -->
                        <div x-data="{ open: false }" class="ml-3 relative"
                             @keydown.window.escape="open = false"
                             @click.away="open = false"
                        >
                            <div>
                                <button @click="open = !open"
                                        class="max-w-xs bg-white dark:bg-gray-900 rounded-full flex items-center text-sm focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-amber-500 lg:p-2 lg:rounded"
                                        id="user-menu" aria-haspopup="true" x-bind:aria-expanded="open">
                                    <img class="h-10 w-10 rounded-full"
                                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                         alt="">
                                    <span class="hidden ml-3 text-gray-700 dark:text-gray-400 text-lg font-light lg:block"><span
                                            class="sr-only">Open user menu for </span>Emilia Birch</span>
                                    <svg class="hidden flex-shrink-0 ml-1 h-5 w-5 text-gray-400 lg:block"
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
                                 x-description="Profile dropdown panel, show/hide based on dropdown state."
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 class="origin-top-right absolute right-0 mt-0 w-56 rounded-md shadow-lg py-0 bg-white dark:bg-gray-900 ring-1 ring-black ring-opacity-10"
                                 role="menu" aria-orientation="vertical" aria-labelledby="user-menu"
                                 style="display: none;">
                                <a href="#" class="block rounded-t-md px-6 py-3 text-lg font-light text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800"
                                   role="menuitem">Your Profile</a>
                                <a href="#" class="block px-6 py-3 text-lg font-light text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800"
                                   role="menuitem">Settings</a>
                                <a href="#" class="block rounded-b-md px-6 py-3 text-lg font-light text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800"
                                   role="menuitem">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
                <div class="mt-8">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <!-- Card -->
                        <div>
                            <h2 class="mx-auto mt-8 text-2xl leading-6 font-light text-gray-900 dark:text-gray-300">
                                Overview
                            </h2>
                            <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                                <div class="bg-white dark:bg-gray-900 dark:bg-gray-900 overflow-hidden shadow rounded-lg">
                                    <div class="px-4 py-5 sm:p-6">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 bg-gradient-to-bl from-amber-600 dark:from-gray-800 to-yellow-500 dark:to-gray-700 rounded-md p-3">
                                                <!-- Heroicon name: users -->
                                                <svg class="h-6 w-6 text-white"
                                                     xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor"
                                                     aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                                </svg>
                                            </div>
                                            <div class="ml-5 w-0 flex-1">
                                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-500 truncate">
                                                    Total Subscribers
                                                </dt>
                                                <dd class="flex items-baseline">
                                                    <div class="text-3xl font-bold text-gray-900 dark:text-gray-300">
                                                        71,897
                                                    </div>

                                                    <div
                                                        class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                                        <svg
                                                            class="self-center flex-shrink-0 h-5 w-5 text-green-500"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                  d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                                                                  clip-rule="evenodd"/>
                                                        </svg>
                                                        <span class="sr-only">Increased by</span>
                                                        122
                                                    </div>
                                                </dd>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white dark:bg-gray-900 overflow-hidden shadow rounded-lg">
                                    <div class="px-4 py-5 sm:p-6">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 bg-gradient-to-bl from-amber-600 dark:from-gray-800 to-yellow-500 dark:to-gray-700 rounded-md p-3">
                                                <!-- Heroicon name: mail-open -->
                                                <svg class="h-6 w-6 text-white"
                                                     xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor"
                                                     aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76"/>
                                                </svg>
                                            </div>
                                            <div class="ml-5 w-0 flex-1">
                                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-500 truncate">
                                                    Avg. Open Rate
                                                </dt>
                                                <dd class="flex items-baseline">
                                                    <div class="text-3xl font-semibold text-gray-900 dark:text-gray-300">
                                                        58.16%
                                                    </div>

                                                    <div
                                                        class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                                        <svg
                                                            class="self-center flex-shrink-0 h-5 w-5 text-green-500"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                  d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                                                                  clip-rule="evenodd"/>
                                                        </svg>
                                                        <span class="sr-only">Increased by</span>
                                                        5.4%
                                                    </div>
                                                </dd>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white dark:bg-gray-900 overflow-hidden shadow rounded-lg">
                                    <div class="px-4 py-5 sm:p-6">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 bg-gradient-to-bl from-amber-600 dark:from-gray-800 to-yellow-500 dark:to-gray-700 rounded-md p-3">
                                                <!-- Heroicon name: cursor-click -->
                                                <svg class="h-6 w-6 text-white"
                                                     xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor"
                                                     aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/>
                                                </svg>
                                            </div>
                                            <div class="ml-5 w-0 flex-1">
                                                <dt class="text-sm font-medium text-gray-500 truncate">
                                                    Avg. Click Rate
                                                </dt>
                                                <dd class="flex items-baseline">
                                                    <div class="text-3xl font-semibold text-gray-900 dark:text-gray-300">
                                                        24.57%
                                                    </div>
                                                    <div
                                                        class="ml-2 flex items-baseline text-sm font-semibold text-red-600">
                                                        <svg
                                                            class="self-center flex-shrink-0 h-5 w-5 text-red-500"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                  d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z"
                                                                  clip-rule="evenodd"/>
                                                        </svg>
                                                        <span class="sr-only">Decreased by</span>
                                                        3.2%
                                                    </div>
                                                </dd>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </dl>
                        </div>
                    </div>

                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <h2 class="mx-auto mt-8 text-2xl leading-6 font-light text-gray-900 dark:text-gray-300">
                            Recent activity
                        </h2>

                        <!-- Activity list (smallest breakopoint only) -->
                        <div class="mt-5 shadow sm:hidden">
                            <ul class="divide-y rounded-t divide-gray-400 overflow-hidden shadow sm:hidden" x-max="1">
                                <li>
                                    <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50 dark:bg-gray-900">
                                        <span class="flex items-center space-x-4">
                                            <span class="flex-1 flex space-x-2 truncate">
                                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: cash"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                     aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="flex flex-col text-gray-500 dark:text-gray-400 text-sm truncate">
                                                    <span class="truncate">Payment to Molly Sanders</span>
                                                    <span><span class="text-gray-900 dark:text-gray-200 font-medium">$20,000</span> USD</span>
                                                    <span>July 11, 2020</span>
                                                </span>
                                            </span>
                                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: chevron-right"
                                               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                               aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <!-- More items... -->
                                <li>
                                    <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50 dark:bg-gray-900">
                                        <span class="flex items-center space-x-4">
                                            <span class="flex-1 flex space-x-2 truncate">
                                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: cash"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                     aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="flex flex-col text-gray-500 dark:text-gray-400 text-sm truncate">
                                                    <span class="truncate">Payment to Doug Mann</span>
                                                    <span><span class="text-gray-900 dark:text-gray-200 font-medium">$19,500</span> USD</span>
                                                    <span>July 5, 2020</span>
                                                </span>
                                            </span>
                                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: chevron-right"
                                               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                               aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <!-- More items... -->
                            </ul>

                            <nav
                                class="bg-white dark:bg-gray-900 px-4 py-3 flex items-center justify-between border-t border-gray-200"
                                aria-label="Pagination">
                                <div class="flex-1 flex justify-between">
                                    <a href="#"
                                       class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:text-gray-500">
                                        Previous
                                    </a>
                                    <a href="#"
                                       class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:text-gray-500">
                                        Next
                                    </a>
                                </div>
                            </nav>
                        </div>

                        <!-- Activity table (small breakopoint and up) -->
                        <div class="mt-5 hidden sm:block">
                            <div class="mx-auto">
                                <div class="flex flex-col">
                                    <div
                                        class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-400">
                                            <thead>
                                            <tr>
                                                <th class="px-6 py-3 bg-gray-50 text-left text-md font-normal text-gray-500 uppercase tracking-wider dark:text-gray-400 dark:bg-gray-900">
                                                    Transaction
                                                </th>
                                                <th class="px-6 py-3 bg-gray-50 text-right text-md font-normal text-gray-500 uppercase tracking-wider dark:text-gray-400 dark:bg-gray-900">
                                                    Amount
                                                </th>
                                                <th class="hidden px-6 py-3 bg-gray-50 text-left text-md font-normal text-gray-500 uppercase tracking-wider md:block dark:text-gray-400 dark:bg-gray-900">
                                                    Status
                                                </th>
                                                <th class="px-6 py-3 bg-gray-50 text-right text-md font-normal text-gray-500 uppercase tracking-wider dark:text-gray-400 dark:bg-gray-900">
                                                    Date
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-500" x-max="1">
                                                <tr class="bg-white dark:text-gray-400 dark:bg-gray-900">
                                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                                                        <div class="flex">
                                                            <a href="#"
                                                               class="group inline-flex space-x-2 truncate text-sm">
                                                                <svg
                                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                    x-description="Heroicon name: cash"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                                          clip-rule="evenodd"></path>
                                                                </svg>
                                                                <p class="text-gray-500 truncate group-hover:text-gray-900 dark:text-gray-300 dark:group-hover:text-gray-100">
                                                                    Payment to Molly Sanders
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        <span class="text-gray-900 font-medium dark:text-gray-200">$20,000 </span>
                                                        USD
                                                    </td>
                                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">
                                                          success
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        July 11, 2020
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:text-gray-400 dark:bg-gray-900">
                                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                                                        <div class="flex">
                                                            <a href="#"
                                                               class="group inline-flex space-x-2 truncate text-sm">
                                                                <svg
                                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                    x-description="Heroicon name: cash"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                                          clip-rule="evenodd"></path>
                                                                </svg>
                                                                <p class="text-gray-500 truncate group-hover:text-gray-900 dark:text-gray-300 dark:group-hover:text-gray-100">
                                                                    Payment to Molly Sanders
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        <span class="text-gray-900 font-medium dark:text-gray-200">$20,000 </span>
                                                        USD
                                                    </td>
                                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">
                                                          success
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        July 11, 2020
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:text-gray-400 dark:bg-gray-900">
                                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                                                        <div class="flex">
                                                            <a href="#"
                                                               class="group inline-flex space-x-2 truncate text-sm">
                                                                <svg
                                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                    x-description="Heroicon name: cash"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                                          clip-rule="evenodd"></path>
                                                                </svg>
                                                                <p class="text-gray-500 truncate group-hover:text-gray-900 dark:text-gray-300 dark:group-hover:text-gray-100">
                                                                    Payment to Molly Sanders
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        <span class="text-gray-900 font-medium dark:text-gray-200">$20,000 </span>
                                                        USD
                                                    </td>
                                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 capitalize">
                                                          processing
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        July 11, 2020
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:text-gray-400 dark:bg-gray-900">
                                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                                                        <div class="flex">
                                                            <a href="#"
                                                               class="group inline-flex space-x-2 truncate text-sm">
                                                                <svg
                                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                    x-description="Heroicon name: cash"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                                          clip-rule="evenodd"></path>
                                                                </svg>
                                                                <p class="text-gray-500 truncate group-hover:text-gray-900 dark:text-gray-300 dark:group-hover:text-gray-100">
                                                                    Payment to Molly Sanders
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        <span class="text-gray-900 font-medium dark:text-gray-200">$20,000 </span>
                                                        USD
                                                    </td>
                                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">
                                                          success
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        July 11, 2020
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:text-gray-400 dark:bg-gray-900">
                                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                                                        <div class="flex">
                                                            <a href="#"
                                                               class="group inline-flex space-x-2 truncate text-sm">
                                                                <svg
                                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                    x-description="Heroicon name: cash"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                                          clip-rule="evenodd"></path>
                                                                </svg>
                                                                <p class="text-gray-500 truncate group-hover:text-gray-900 dark:text-gray-300 dark:group-hover:text-gray-100">
                                                                    Payment to Molly Sanders
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        <span class="text-gray-900 font-medium dark:text-gray-200">$20,000 </span>
                                                        USD
                                                    </td>
                                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 capitalize">
                                                          processing
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        July 11, 2020
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:text-gray-400 dark:bg-gray-900">
                                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                                                        <div class="flex">
                                                            <a href="#"
                                                               class="group inline-flex space-x-2 truncate text-sm">
                                                                <svg
                                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                    x-description="Heroicon name: cash"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                                          clip-rule="evenodd"></path>
                                                                </svg>
                                                                <p class="text-gray-500 truncate group-hover:text-gray-900 dark:text-gray-300 dark:group-hover:text-gray-100">
                                                                    Payment to Molly Sanders
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        <span class="text-gray-900 font-medium dark:text-gray-200">$20,000 </span>
                                                        USD
                                                    </td>
                                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">
                                                          success
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        July 11, 2020
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:text-gray-400 dark:bg-gray-900">
                                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                                                        <div class="flex">
                                                            <a href="#"
                                                               class="group inline-flex space-x-2 truncate text-sm">
                                                                <svg
                                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                    x-description="Heroicon name: cash"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                                          clip-rule="evenodd"></path>
                                                                </svg>
                                                                <p class="text-gray-500 truncate group-hover:text-gray-900 dark:text-gray-300 dark:group-hover:text-gray-100">
                                                                    Payment to Molly Sanders
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        <span class="text-gray-900 font-medium dark:text-gray-200">$20,000 </span>
                                                        USD
                                                    </td>
                                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">
                                                          success
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        July 11, 2020
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:text-gray-400 dark:bg-gray-900">
                                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                                                        <div class="flex">
                                                            <a href="#"
                                                               class="group inline-flex space-x-2 truncate text-sm">
                                                                <svg
                                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                    x-description="Heroicon name: cash"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                                          clip-rule="evenodd"></path>
                                                                </svg>
                                                                <p class="text-gray-500 truncate group-hover:text-gray-900 dark:text-gray-300 dark:group-hover:text-gray-100">
                                                                    Payment to Molly Sanders
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        <span class="text-gray-900 font-medium dark:text-gray-200">$20,000 </span>
                                                        USD
                                                    </td>
                                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">
                                                          success
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        July 11, 2020
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:text-gray-400 dark:bg-gray-900">
                                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                                                        <div class="flex">
                                                            <a href="#"
                                                               class="group inline-flex space-x-2 truncate text-sm">
                                                                <svg
                                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                    x-description="Heroicon name: cash"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                                          clip-rule="evenodd"></path>
                                                                </svg>
                                                                <p class="text-gray-500 truncate group-hover:text-gray-900 dark:text-gray-300 dark:group-hover:text-gray-100">
                                                                    Payment to Molly Sanders
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        <span class="text-gray-900 font-medium dark:text-gray-200">$20,000 </span>
                                                        USD
                                                    </td>
                                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 capitalize">
                                                          failed
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                        July 11, 2020
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- Pagination -->
                                        <nav
                                            class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 dark:border-gray-400 sm:px-6 dark:bg-gray-900"
                                            aria-label="Pagination">
                                            <div class="hidden sm:block">
                                                <p class="text-sm text-gray-700 dark:text-gray-400">
                                                    Showing
                                                    <span class="font-medium">1</span>
                                                    to
                                                    <span class="font-medium">10</span>
                                                    of
                                                    <span class="font-medium">20</span>
                                                    results
                                                </p>
                                            </div>
                                            <div class="flex-1 flex justify-between sm:justify-end">
                                                <a href="#"
                                                   class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-900">
                                                    Previous
                                                </a>
                                                <a href="#"
                                                   class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-900">
                                                    Next
                                                </a>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-layout.master>
