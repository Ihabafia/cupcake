@props([
    'type' => 'button',
    'title' => 'Button',
])
<button type="{{ $type }}"
        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-amber-100 bg-amber-800 hover:bg-amber-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-700">
    {{ $title }}
</button>
