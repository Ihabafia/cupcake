@props([
    'icon' => null,
    'route' => '#',
    'active' => false,
    'title' => 'None'
])
{{--<a href="{{$route}}"
   class="{{$active ? 'bg-amber-800 dark:bg-gray-700 text-white':'text-amber-100 hover:text-white dark:text-gray-200 hover:font-normal hover:bg-amber-600 dark:hover:bg-gray-800'}} group flex items-center px-2 py-2 text-xl md:text-base leading-6 font-light rounded-md"
   aria-current="page">
    @include('components.icon.'.$icon)
    {{$title}}
</a>--}}
<!-- Current: "bg-amber-700 dark:bg-gray-900 text-white", Default: "text-white dark:text-gray-300 hover:bg-amber-600 dark:hover:bg-gray-600 hover:bg-opacity-75" -->
<a href="{{$route}}"
   class="{{ $active ? 'bg-amber-600 dark:bg-gray-700':'hover:bg-amber-600 dark:hover:bg-gray-600 hover:bg-opacity-75' }} text-white dark:text-gray-300 rounded-md py-2 px-3 text-sm font-medium">
    @if($icon)
        @include('components.icon.'.$icon)
    @endif
    {{$title}}
</a>
