@props([
    'classes' => 'mr-4 h-6 w-6 text-amber-200 dark:text-gray-400',
])

@if($classes)
    <svg class="{{$classes}}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
  <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"/>
  <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"/>
</svg>
@endif