<a 
    href="{{ $href ?? '#' }}" 
    class="text-white bg-blue-600 hover:bg-blue-700 rounded-lg px-4 py-2 {{ $class ?? '' }}" 
    {{ $attributes }}>
    {{ $slot }}
</a>
