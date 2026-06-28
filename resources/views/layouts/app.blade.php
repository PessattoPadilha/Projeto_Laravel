<x-layouts.app>
    <section class="container">
        <div class="space-y-6">
            {{ $slot ?? '' }}
            @yield('content')
        </div>
    </section>
</x-layouts.app>
