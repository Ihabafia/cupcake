@props([
    'id' => null,
    'name' => 'check_box',
    'title' => 'Check box',
])
<div class="flex items-center">
    <input id="{{ $id ?? 'id-'.random_int(1, 1000) }}" name="{{ $name }}" type="checkbox"
           class="h-4 w-4 text-amber-700 bg-amber-100 focus:bg-amber-100 text-amber-700 focus:ring-amber-500 border-gray-300 rounded">
    <label for="{{ $name }}" class="ml-2 block text-sm text-amber-50">
        {{ $title }}
    </label>
</div>
