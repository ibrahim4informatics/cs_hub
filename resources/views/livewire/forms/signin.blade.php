<form class="w-full max-w-[400px] border bg-neutral-800 rounded-md p-4">
    <svg height="40px" width="40px" class="mx-auto text-gray-300" xmlns="http://www.w3.org/2000/svg" width="16"
        height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
        <path
            d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
    </svg>

    <h2 class="text-blue-400 font-bold text-2xl text-center">Sign To Account</h2>
    <p class="text-neutral-400 text-center my-2">if you have an account sign to it to get your saved data</p>

    <label class="text-gray-300 mt-2" for="email">Email <span class="text-red-400"> *</span></label>
    <input id="email"
        class="w-full bg-neutral-700 px-2 py-2 rounded-md mt-1 focus:border-blue-400 focus:border transition-all outline-none text-white "
        type="email" wire:model="email">


    @error('email')
        <p class="text-sm text-red-500">invalid email or password</p>
    @enderror





    <label class="text-gray-300 mt-3" for="password">Password <span class="text-red-400"> *</span></label>
    <input id="password"
        class="w-full bg-neutral-700 px-2 py-2 rounded-md mt-1 focus:border-blue-400 focus:border transition-all outline-none text-white "
        type="password" wire:model="password">

    @error('password')
        <p class="text-sm text-red-500">invalid email or password</p>
    @enderror




    <p class="my-2 text-gray-400">if you dont have an account, just<a class="text-blue-400 font-bold underline ml-2"
            href="{{ route('signup') }}">Create one here</a></p>
    <button type="button" wire:click="submit"
        class="w-full text-center cursor-pointer px-2 py-4 font-bold text-white bg-blue-600 hover:bg-blue-400 transition-all rounded-full">SignIn</button>




</form>
