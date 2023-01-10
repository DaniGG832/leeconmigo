@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 border-b-2 border-white text-lg font-medium leading-5 text-white font-bold focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'font-bold inline-flex items-center px-1 border-b-2 border-transparent text-md font-medium leading-5 text-blue-900 hover:text-blue-100 hover:border-blue-100 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
