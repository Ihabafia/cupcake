    <div class="" style="">
        <div>
            <div class="min-h-screen bg-gray-100">
                <div class="bg-indigo-600 pb-32">
                    <nav x-data="{ open: false }"
                         class="bg-indigo-600 border-b border-indigo-300 border-opacity-25 lg:border-none">
                        <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
                            <div
                                class="relative h-16 flex items-center justify-between lg:border-b lg:border-indigo-400 lg:border-opacity-25">
                                <div class="px-2 flex items-center lg:px-0">
                                    <div class="flex-shrink-0">
                                        <img class="block h-8 w-8"
                                             src="https://tailwindui.com/img/logos/workflow-mark-indigo-300.svg"
                                             alt="Workflow">
                                    </div>
                                    <div class="hidden lg:block lg:ml-10">
                                        <div class="flex space-x-4">


                                            <!-- Current: "bg-indigo-700 text-white", Default: "text-white hover:bg-indigo-500 hover:bg-opacity-75" -->
                                            <a href="#"
                                               class="bg-indigo-700 text-white rounded-md py-2 px-3 text-sm font-medium">
                                                Dashboard
                                            </a>


                                            <a href="#"
                                               class="text-white hover:bg-indigo-500 hover:bg-opacity-75 rounded-md py-2 px-3 text-sm font-medium">
                                                Team
                                            </a>


                                            <a href="#"
                                               class="text-white hover:bg-indigo-500 hover:bg-opacity-75 rounded-md py-2 px-3 text-sm font-medium">
                                                Projects
                                            </a>


                                            <a href="#"
                                               class="text-white hover:bg-indigo-500 hover:bg-opacity-75 rounded-md py-2 px-3 text-sm font-medium">
                                                Calendar
                                            </a>


                                            <a href="#"
                                               class="text-white hover:bg-indigo-500 hover:bg-opacity-75 rounded-md py-2 px-3 text-sm font-medium">
                                                Reports
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 px-2 flex justify-center lg:ml-6 lg:justify-end">
                                    <div class="max-w-lg w-full lg:max-w-xs">
                                        <label for="search" class="sr-only">Search</label>
                                        <div class="relative text-gray-400 focus-within:text-gray-600">
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
                                                   class="block w-full bg-white py-2 pl-10 pr-3 border border-transparent rounded-md leading-5 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white focus:border-white sm:text-sm"
                                                   placeholder="Search" type="search" name="search">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex lg:hidden">
                                    <!-- Mobile menu button -->
                                    <button @click="open = !open"
                                            class="bg-indigo-600 p-2 rounded-md inline-flex items-center justify-center text-indigo-200 hover:text-white hover:bg-indigo-500 hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white"
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
                                             x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="hidden lg:block lg:ml-4">
                                    <div class="flex items-center">
                                        <button
                                            class="bg-indigo-600 flex-shrink-0 rounded-full p-1 text-indigo-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white">
                                            <span class="sr-only">View notifications</span>
                                            <svg class="h-6 w-6" x-description="Heroicon name: bell"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                            </svg>
                                        </button>

                                        <!-- Profile dropdown -->
                                        <div @click.away="open = false" class="ml-3 relative flex-shrink-0"
                                             x-data="{ open: false }">
                                            <div>
                                                <button @click="open = !open"
                                                        class="bg-indigo-600 rounded-full flex text-sm text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white"
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
                                                 class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5"
                                                 role="menu" aria-orientation="vertical" aria-labelledby="user-menu"
                                                 style="display: none;">

                                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100"
                                                   role="menuitem">
                                                    Your Profile
                                                </a>

                                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100"
                                                   role="menuitem">
                                                    Settings
                                                </a>

                                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100"
                                                   role="menuitem">
                                                    Sign out
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div x-description="Mobile menu, toggle classes based on menu state." x-state:on="Menu open"
                             x-state:off="Menu closed" :class="{ 'block': open, 'hidden': !open }" class="lg:hidden block">
                            <div class="px-2 pt-2 pb-3 space-y-1">


                                <!-- Current: "bg-indigo-700 text-white", Default: "text-white hover:bg-indigo-500 hover:bg-opacity-75" -->
                                <a href="#"
                                   class="bg-indigo-700 text-white block rounded-md py-2 px-3 text-base font-medium">
                                    Dashboard
                                </a>


                                <a href="#"
                                   class="text-white hover:bg-indigo-500 hover:bg-opacity-75 block rounded-md py-2 px-3 text-base font-medium">
                                    Team
                                </a>


                                <a href="#"
                                   class="text-white hover:bg-indigo-500 hover:bg-opacity-75 block rounded-md py-2 px-3 text-base font-medium">
                                    Projects
                                </a>


                                <a href="#"
                                   class="text-white hover:bg-indigo-500 hover:bg-opacity-75 block rounded-md py-2 px-3 text-base font-medium">
                                    Calendar
                                </a>


                                <a href="#"
                                   class="text-white hover:bg-indigo-500 hover:bg-opacity-75 block rounded-md py-2 px-3 text-base font-medium">
                                    Reports
                                </a>

                            </div>
                            <div class="pt-4 pb-3 border-t border-indigo-700">
                                <div class="px-5 flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full h-10 w-10"
                                             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                             alt="">
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-base font-medium text-white">Tom Cook</div>
                                        <div class="text-sm font-medium text-indigo-300">tom@example.com</div>
                                    </div>
                                    <button
                                        class="ml-auto bg-indigo-600 flex-shrink-0 rounded-full p-1 text-indigo-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white">
                                        <span class="sr-only">View notifications</span>
                                        <svg class="h-6 w-6" x-description="Heroicon name: bell"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mt-3 px-2 space-y-1">

                                    <a href="#"
                                       class="block rounded-md py-2 px-3 text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">
                                        Your Profile
                                    </a>

                                    <a href="#"
                                       class="block rounded-md py-2 px-3 text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">
                                        Settings
                                    </a>

                                    <a href="#"
                                       class="block rounded-md py-2 px-3 text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">
                                        Sign out
                                    </a>

                                </div>
                            </div>
                        </div>
                    </nav>
                    <header class="py-10">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <h1 class="text-3xl font-bold text-white">
                                Dashboard
                            </h1>
                        </div>
                    </header>
                </div>

                <main class="-mt-32">
                    <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
                        <!-- Replace with your content -->
                        <div class="bg-white rounded-lg shadow px-5 py-6 sm:px-6">
                            <div class="h-96 border-4 border-dashed border-gray-200 rounded-lg"></div>
                        </div>
                        <!-- /End replace -->
                    </div>
                </main>
            </div>

        </div>
    </div>
    <div style="clear: both; display: block; height: 0px;"></div>
</body>
