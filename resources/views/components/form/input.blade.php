@props([
    'id' => null,
    'title' => 'Field Label',
    'name' => 'field_name',
    'type' => 'text',
    'required',
    'value' => '',
])
<div>
    <label for="{{ $id }}" class="block text-sm font-medium text-amber-50">
        {{ $title }} {!! $required ? '<span class="text-amber-800">*</span>':'' !!}
    </label>
    <div class="mt-1">
        <input id="{{ $id ?? 'id-'.random_int(1, 1000) }}"
               name="{{ $name }}"
               type="{{ $type }}"
               {{ $required ? 'required':'' }}
               {{ $attributes }}
               class="appearance-none block w-full px-3 py-2 border border-amber-400 rounded-md shadow-sm placeholder-amber-300 focus:placeholder-amber-500 bg-amber-500 focus:bg-amber-100 text-amber-700 focus:outline-none focus:ring-amber-800 focus:border-amber-700 sm:text-sm"
               value="{{ $value }}"
        >
        @error('email')
            <span class="text-sm text-red-500" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
