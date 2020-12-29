@props([
    'classes' => 'mr-4 h-6 w-6 text-amber-200 dark:text-gray-400',
])

@if($classes)
    <svg class="{{$classes}}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
</svg>
@endif
