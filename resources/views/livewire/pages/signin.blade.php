<div class="px-2">
    <x-slot:title>CSHUB|SignIn</x-slot>
    @livewire('components.ui.navbar')

    {{-- hero section --}}

    <section class="w-full h-screen flex flex-col items-center justify-center gap-4">
        @livewire("forms.signin")
    </section>
</div>
