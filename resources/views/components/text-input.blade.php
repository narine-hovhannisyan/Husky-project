@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25) focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm ']) !!}>
