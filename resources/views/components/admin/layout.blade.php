<x-dynamic-component :component="$component ?? 'admin.layouts.app'">
    {{ $slot }}
</x-dynamic-component>