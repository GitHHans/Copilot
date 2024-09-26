@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-lg text-black dark:text-black bg-white rounded']) }}>
    <i class="bi bi-geo-alt-fill"></i> {{ $value ?? $slot }}
</label>
