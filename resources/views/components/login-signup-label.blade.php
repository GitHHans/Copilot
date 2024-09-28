@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-lg text-black dark:text-black bg-white rounded']) }}>
    {{ $value ?? $slot }}
</label>
