<div class="px-2">
    <x-slot:title>CSHUB|Home</x-slot>
    @livewire('components.ui.navbar')

    {{-- hero section --}}

    <section class="w-full h-screen flex flex-col items-center justify-center gap-4">
        <h3 class="text-gray-300 font-extrabold text-2xl md:text-3xl max-w-[650px] text-center">Welcome to CS <span
                class="text-blue-400 text-shadow-sm text-shadow-blue-600">HUB</span> Your Way To Success In Computer
            Science Major! </h3>
        <p class="text-gray-400 max-w-[650px] text-center">it is a volenteer plateform made by us student to share
            doucments and all what a cs student needs to secced exams and career we hope that our website will help you
            all folks!</p>

        {{-- search bar --}}
        <div
            class="relative w-full flex items-center px-4 max-w-[650px] bg-neutral-800 rounded-full h-[60px] focus-within:border focus-within:border-gray-300 transition-all">
            <input placeholder="Search."
                class="h-full placeholder:text-gray-400 text-white flex-1 border-none outline-none" type="text">
            <button
                class="absolute right-5 flex items-center justify-center rounded-full cursor-pointer text-gray-300 mt-auto mb-auto w-[70px] h-[75%] bg-blue-600 hover:bg-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg>
            </button>
        </div>
        <div class="flex items-center gap-2 justify-center">
            @if ($is_auth)

                 <a
                class="rounded-full px-8 py-4 font-bold text-white bg-blue-600 hover:shadow-md hover:bg-blue-400 transition-all hover:shadow-blue-400" href="{{ route("profile") }}"
                >See Profile</a>
            @else

                 <a
                class="rounded-full px-8 py-4 font-bold text-white bg-blue-600 hover:shadow-md hover:bg-blue-400 transition-all hover:shadow-blue-400" href="{{ route("signup") }}"
                >Create
                
                Account</a>
            @endif

            <a
                class="rounded-full border-[0.24px] border-neutral-600 px-8 py-4 font-bold text-white bg-neutral-800 hover:shadow-md hover:bg-blue-400 transition-all hover:shadow-blue-400">Brows
                Documents</a>

        </div>

    </section>
</div>
