<nav
    class="bg-neutral-900 w-full z-10 sticky top-0 left-0 py-4 px-2 text-white border-b border-b-gray-700 flex items-center justify-between">
    @vite('resources/js/components/navbar.js')
    <h1 class="text-3xl font-bold">CS<span class="text-blue-400">HUB</span></h1>
    <div class="h-screen w-[80%] border-l border-gray-700 p-4 md:hidden z-50 absolute right-[-100%] transition-all top-0 bg-neutral-900"
        id="menu">
        <div class="flex items-center gap-2">
            <button id="closeBtn">
                <svg class="text-red-400" width="40px" height="40px" xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                </svg>
            </button>

            <h2 class="font-bold text-2xl text-gray-300">Menu</h2>
        </div>

        <ul class=" flex flex-col h-full justify-evenly items-center gap-4">
            <li><a class="text-gray-300 font-bold hover:text-blue-600 transition-colors text-shadow text-shadow-blue-400"
                    href="{{ route('welcome') }}">Home</a></li>
            <li><a class="text-gray-300 font-bold hover:text-blue-600 transition-colors text-shadow text-shadow-blue-400"
                    href="{{ route('documents') }}">Documents</a></li>
            @if ($is_auth)
                <li><a class="text-gray-300 font-bold hover:text-blue-600 transition-colors text-shadow text-shadow-blue-400"
                        href="{{ route('profile') }}">Profile</a></li>
                <li><button
                        class="text-gray-300 font-bold hover:text-blue-600 transition-colors text-shadow text-shadow-blue-400"
                        wire:click="logout">SignOut</button></li>
            @else
                <li><a class="text-gray-300 font-bold hover:text-blue-600 transition-colors text-shadow text-shadow-blue-400"
                        href="{{ route('login') }}">SignIn</a></li>
                <li><a class="text-gray-300 font-bold hover:text-blue-600 transition-colors text-shadow text-shadow-blue-400"
                        href="{{ route('signup') }}">SignUp</a></li>
            @endif

            @if ($role === 'admin')
                <li><a class="text-gray-300 font-bold hover:text-blue-600 transition-colors text-shadow text-shadow-blue-400"
                        href="{{ route('filament.admin.pages.dashboard') }}">Dashboard</a></li>
            @endif
        </ul>

    </div>

    <button id="openBtn" class="md:hidden">
        <svg width="40px" height="40px" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
        </svg>
    </button>
    <ul class="hidden md:flex items-center gap-4">
        <li><a class="text-gray-300 font-bold hover:text-blue-600 transition-colors text-shadow text-shadow-blue-400"
                href="{{ route('welcome') }}">Home</a></li>
        <li><a class="text-gray-300 font-bold hover:text-blue-600 transition-colors text-shadow text-shadow-blue-400"
                href="{{ route('documents') }}">Documents</a></li>

        @if ($is_auth)
            @if ($role === 'admin')
                <li><a class="text-gray-300 font-bold hover:text-blue-600 transition-colors text-shadow text-shadow-blue-400"
                        href="{{ route('filament.admin.pages.dashboard') }}">Dashboard</a></li>
            @endif
            <li><a class="text-gray-300 font-bold hover:text-blue-600 transition-colors text-shadow text-shadow-blue-400"
                    href="{{ route('profile') }}">Profile</a></li>

            <li><a class="text-gray-300 font-bold hover:text-blue-600 transition-colors text-shadow text-shadow-blue-400"
                    href="{{ route("favourite") }}">Favourites</a></li>
            <li><button class="text-gray-300 font-bold hover:text-blue-600 transition-colors text-shadow text-shadow-blue-400"
                    wire:click="signout">SignOut</button></li>
        @else
            <li><a class="text-gray-300 font-bold hover:text-blue-600 transition-colors text-shadow text-shadow-blue-400"
                    href="{{ route('login') }}">SignIn</a></li>
            <li><a class="text-gray-300 font-bold hover:text-blue-600 transition-colors text-shadow text-shadow-blue-400"
                    href="{{ route('signup') }}">SignUp</a></li>
        @endif



    </ul>
</nav>
