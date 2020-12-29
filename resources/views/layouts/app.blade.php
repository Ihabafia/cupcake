<x-layouts.base>
    <div class="" style="">
        <div x-data="{dark: false}" x-on:dark.window="dark = $event.detail" :class="{'dark':dark, '':!dark}">
        {{--<livewire:dark-switch />--}}
            <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
                <div class="bg-amber-700 dark:bg-gray-900 pb-64">
                    <nav x-data="{ open: false }"
                         class="bg-amber-700 dark:bg-gray-900 dark:bg-gray-700 border-b border-amber-400 dark:border-gray-500 border-opacity-25 lg:border-none">
                        <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
                            <div
                                class="relative h-16 flex items-center justify-between lg:border-b lg:border-indigo-400 lg:border-opacity-25">
                                <div class="px-2 flex items-center lg:px-0">
                                    <div class="flex-shrink-0 hidden md:block">
                                        <x-layouts.logo />
                                    </div>
                                    <div class="flex-shrink-0 md:hidden">
                                        <x-layouts.cc />
                                    </div>

                                    {{-- Navigation Screen --}}
                                    <div class="hidden xl:block xl:ml-1">
                                        <div class="flex space-x-1">
                                            <x-layouts.nav.item :route="route('home')" title="Dashboard" :active="true == false" />
                                            <x-layouts.nav.item :route="route('home')" title="Team" :active="true == false" />
                                            <x-layouts.nav.item :route="route('home')" title="Projects" :active="true == false" />
                                            <x-layouts.nav.item :route="route('home')" title="Calendar" :active="true == false" />
                                            <x-layouts.nav.dropdown title="Options" :active="true == true">
                                                <x-layouts.nav.dropdown-items>
                                                    <x-layouts.nav.dropdown-item :route="route('home')" title="Edit" icon="pencil-alt" />
                                                    <x-layouts.nav.dropdown-item :route="route('home')" title="Duplicate" icon="duplicate" />
                                                </x-layouts.nav.dropdown-items>
                                                <x-layouts.nav.dropdown-items>
                                                    <x-layouts.nav.dropdown-item :route="route('home')" title="Archive" icon="archive" />
                                                    <x-layouts.nav.dropdown-item :route="route('home')" title="Move" icon="arrow-circle-right" />
                                                </x-layouts.nav.dropdown-items>
                                                <x-layouts.nav.dropdown-items>
                                                    <x-layouts.nav.dropdown-item :route="route('home')" title="Share" icon="user-add" />
                                                    <x-layouts.nav.dropdown-item :route="route('home')" title="Add to favorites" icon="heart" />
                                                </x-layouts.nav.dropdown-items>
                                                <x-layouts.nav.dropdown-items>
                                                    <x-layouts.nav.dropdown-item :route="route('home')" title="Delete" icon="trash" />
                                                </x-layouts.nav.dropdown-items>
                                            </x-layouts.nav.dropdown>
                                            <x-layouts.nav.item :route="route('home')" title="Reports" :active="true == false" />
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 px-2 flex justify-end xl:ml-0 xl:justify-end">
                                    <x-layouts.search query="{{ $search ?? '' }}" />
                                </div>
                                <div>
                                    <livewire:dark-switch />
                                </div>
                                <div class="flex xl:hidden">
                                    <x-layouts.mobile-button />
                                </div>
                                <div class="hidden xl:block xl:ml-4">
                                    <div class="flex items-center">
                                        <x-layouts.notifications />

                                        <x-layouts.profile />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div x-description="Mobile menu, toggle classes based on menu state." x-state:on="Menu open"
                             x-state:off="Menu closed" :class="{ 'block': open, 'hidden': !open }"
                             class="xl:hidden block">
                            <div class="px-2 pt-2 pb-3 space-y-1">
                                <x-layouts.mobile-nav.item :route="route('home')" title="Dashboard" />
                                <x-layouts.mobile-nav.item :route="route('home')" title="Team" />
                                <x-layouts.mobile-nav.item :route="route('home')" title="Projects" />
                                <x-layouts.mobile-nav.item :route="route('home')" title="Calendar" />
                                <x-layouts.mobile-nav.item title="Options" :active="true == true" />
                                    <x-layouts.mobile-nav.sub-item :route="route('home')" title="Edit" icon="pencil-alt-s" />
                                    <x-layouts.mobile-nav.sub-item :route="route('home')" title="Duplicate" icon="duplicate-s" />
                                    <x-layouts.mobile-nav.sub-item :route="route('home')" title="Archive" icon="archive-s" />
                                    <x-layouts.mobile-nav.sub-item :route="route('home')" title="Move" icon="arrow-circle-right-s" />
                                    <x-layouts.mobile-nav.sub-item :route="route('home')" title="Share" icon="user-add-s" />
                                    <x-layouts.mobile-nav.sub-item :route="route('home')" title="Add to favorites" icon="heart-s" />
                                    <x-layouts.mobile-nav.sub-item :route="route('home')" title="Delete" icon="trash-s" />
                                <x-layouts.mobile-nav.item :route="route('home')" title="Reports" />
                            </div>

                            <x-layouts.mobile-profile />
                        </div>
                    </nav>
                    <header class="pt-10 pb-6">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <h1 class="text-3xl font-bold text-white dark:text-gray-300">
                                @stack('page-title')
                            </h1>
                        </div>
                    </header>
                </div>

                <main class="-mt-64">
                    <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
                        <!-- Replace with your content -->

                        <div class="bg-white dark:text-gray-300 dark:bg-gray-800 rounded-lg shadow px-5 py-6 sm:px-6">
                            <div class="h-96 {{--border-4 border-dashed border-gray-200 rounded-lg--}}">{{ $slot }}</div>
                        </div>
                        <!-- /End replace -->
                    </div>
                </main>
            </div>
        {{--</livewire:dark-switch>--}}
        </div>
    </div>
    <div style="clear: both; display: block; height: 0px;"></div>
</x-layouts.base>
