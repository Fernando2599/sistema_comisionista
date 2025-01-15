<a 
    href="{{ $href ?? '#' }}" 
    class="text-white bg-green-600 hover:bg-green-700 rounded-lg px-4 py-2 {{ $class ?? '' }}" 
    {{ $attributes }}>
    {{ $slot }}
</a>
