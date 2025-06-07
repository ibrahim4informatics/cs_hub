<form class="w-full max-w-[400px] border bg-neutral-800 rounded-md p-4">
    <svg height="40px" width="40px" class="mx-auto text-gray-300" xmlns="http://www.w3.org/2000/svg" width="16"
        height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
        <path
            d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
    </svg>

    <h2 class="text-blue-400 font-bold text-2xl text-center">Create Account</h2>
    <p class="text-neutral-400 text-center my-2">creating an account will open for you more option in our website,let's
        go!</p>

    @error("root")
        
    <p class="text-red-400 text-sm my-2">{{ $message }}</p>
    @enderror

    <label class="text-gray-300 mt-2" for="email">Email <span class="text-red-400"> *</span></label>
    <input id="email"
        class="w-full bg-neutral-700 px-2 py-2 rounded-md mt-1 focus:border-blue-400 focus:border transition-all outline-none text-white "
        type="email" wire:model="email">

    @error('email')
        <p class="text-sm my-2 text-red-400 ">{{ $message }}</p>
    @enderror


    <div class="flex mt-2 mb-2 items-baseline justify-center gap-2">
        <div>
            <label class="text-gray-300 mt-2" for="fname">First Name <span class="text-red-400"> *</span></label>
            <input id="fname"
                class="w-full bg-neutral-700 px-2 py-2 rounded-md mt-1 focus:border-blue-400 focus:border transition-all outline-none text-white "
                type="text" wire:model="first_name">

            @error('first_name')
                <p class="text-sm my-2 text-red-400 ">{{ $message }}</p>
            @enderror

        </div>


        <div>
            <label class="text-gray-300 mt-2" for="lname">Last Name <span class="text-red-400"> *</span></label>
            <input id="lname"
                class="w-full bg-neutral-700 px-2 py-2 rounded-md mt-1 focus:border-blue-400 focus:border transition-all outline-none text-white "
                type="text" wire:model="last_name">


            @error('last_name')
                <p class="text-sm my-2 text-red-400 ">{{ $message }}</p>
            @enderror

        </div>
    </div>

    <label class="text-gray-300 mt-2" for="phone">Phone Number <span class="text-red-400"> *</span></label>
    <input id="phone"
        class="w-full bg-neutral-700 px-2 py-2 rounded-md mt-1 focus:border-blue-400 focus:border transition-all outline-none text-white "
        type="tel" wire:model="phone">

    @error('phone')
        <p class="text-sm my-2 text-red-400 ">{{ $message }}</p>
    @enderror

    <label class="text-gray-300 mt-3" for="password">Password <span class="text-red-400"> *</span></label>
    <input id="password"
        class="w-full bg-neutral-700 px-2 py-2 rounded-md mt-1 focus:border-blue-400 focus:border transition-all outline-none text-white "
        type="password" wire:model="password">

    @error('password')
        <p class="text-sm my-2 text-red-400 ">{{ $message }}</p>
    @enderror


    <label class="text-gray-300 mt-3" for="cpassword">Confirm <span class="text-red-400"> *</span></label>
    <input id="cpassword"
        class="w-full bg-neutral-700 px-2 py-2 rounded-md mt-1 focus:border-blue-400 focus:border transition-all outline-none text-white "
        type="password" wire:model="confirm">

    @error('confirm')
        <p class="text-sm my-2 text-red-400 ">{{ $message }}</p>
    @enderror


    <p class="my-2 text-gray-400">if you have an account, just<a class="text-blue-400 font-bold underline ml-2"
            href="{{ route('login') }}">Signin here</a></p>
    <button wire:click="submit" type="button"
        class="w-full text-center cursor-pointer px-2 py-4 font-bold text-white bg-blue-600 hover:bg-blue-400 transition-all rounded-full">Create</button>




</form>
