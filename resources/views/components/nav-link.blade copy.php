@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block text-base font-medium text-white bg-[#0a961d] hover:text-white pl-1 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block text-base font-medium text-black hover:text-white pl-1 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
