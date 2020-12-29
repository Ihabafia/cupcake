@props([
    'icon' => null,
    'classes' => 'mr-3 h-5 w-5 text-gray-200 group-hover:text-white',
    'route' => '#',
    'title' => 'None',
])

<div class="ml-4">
    <a href="{{$route}}"
       class="group flex items-center px-4 py-2 text-sm text-gray-100 hover:text-white"
       role="menuitem">
        @if($icon)
            @include('components.icons.'.$icon, ['classes' => $classes])
        @endif
        {{$title}}
    </a>
</div>
