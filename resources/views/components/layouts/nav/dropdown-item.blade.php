@props([
    'icon' => null,
    'classes' => 'mr-3 h-5 w-5 text-gray-400 dark:text-gray-200 group-hover:text-gray-500 dark:group-hover:text-gray-400',
    'route' => '#',
    'title' => 'None',
])

<a href="{{$route}}"
   class="group flex items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900" role="menuitem">
    @if($icon)
        @include('components.icons.'.$icon, ['classes' => $classes])
    @endif
    {{$title}}
</a>
