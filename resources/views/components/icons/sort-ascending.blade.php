@props([
    'classes' => 'mr-4 h-6 w-6 text-amber-200 dark:text-gray-400',
])

@if($classes)
    <svg class="{{$classes}}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12"/>
</svg>
@endif
