@props([
    'option'=>null,
    'selected'=>null,
    'name'=>null
])

<select name={{$name}} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
    @foreach ($option as $key => $value)
        <option value="{{ $key }}" @selected($key == old($name, $selected))>
            {{ $value }}
        </option>
    @endforeach
</select>

