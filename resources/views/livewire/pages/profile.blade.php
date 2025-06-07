<div class="px-2">
    <x-slot:title>CSHUB|Profile</x-slot>
    @livewire('components.ui.navbar')


    <section class="w-full h-screen flex items-center justify-center">
        @if ($user)
            <div class="w-full px-4 py-1 max-w-[600px] bg-neutral-800 rounded">

                <div
                    class="mx-auto rounded-full w-[80px] h-[80px] object-cover bg-white shadow shadow-white text-neutral-900 font-bold text-3xl flex items-center justify-center my-4">
                    {{ $user->name[0] }}</div>
                <h3 class="text-xl font-bold text-gray-300 text-center">{{ $user->name . ' ' . $user->first_name }}</h3>

                <div class="w-full flex items-center justify-center my-8">
                    <button
                        class="bg-red-600 px-4 py-3 text-red-200 hover:bg-red-700 transition-all cursor-pointer  rounded mx-auto"
                        wire:click="signout">SignOut</button>

                    <button
                    wire:click="showChangeEmail"
                        class="bg-blue-600 px-4 py-3 text-blue-200 hover:bg-blue-700 transition-all cursor-pointer  rounded mx-auto">Change
                        Email</button>


                    <button
                    wire:click="showChangePassword"
                        class="bg-green-600 px-4 py-3 text-green-200 hover:bg-green-700 transition-all cursor-pointer  rounded mx-auto">Change
                        Password</button>
                </div>
            </div>
        @endif
    </section>


    @if ($showChangeEmailModal)
        @livewire("components.modals.change-email")
    @endif



    @if ($showChangePasswordModal)
        @livewire("components.modals.change-password")
    @endif

    
</div>
