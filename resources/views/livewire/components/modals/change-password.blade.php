<div class="h-screen w-full bg-[rgba(252,252,252,.1)] absolute top-0 left-0 z-50 flex items-center justify-center">
    <form class="p-4 rounded bg-neutral-900 text-white w-full max-w-[400px]">
        <h4 class="text-bold text-2xl my-3">Change Password</h4>
        <label for="old_password">Current Password <span class="text-red-400">*</span></label>
        <input id="old_password" wire:model="old_password" type="password"
            class="w-full my-2 bg-neutral-800 border focus:border-blue-500 p-3 rounded border-neutral-400 outline-none">
        

         @error("old_password")
            <p class="text-sm text-red-400 my-2">{{ $message }}</p>
        @enderror
        <label for="new_password">New Password <span class="text-red-400">*</span></label>
        <input id="new_password" wire:model="new_password" type="password"
            class="w-full my-2 bg-neutral-800 border focus:border-blue-500 p-3 rounded border-neutral-400 outline-none">
        
         @error("new_password")
            <p class="text-sm text-red-400 my-2">{{ $message }}</p>
        @enderror
        <div class="flex items-center gap-2 my-2">
            <button wire:click="close" type="button"
                class="p-3 bg-red-600 text-red-200 rounded hover:bg-red-500">Cancel</button>
            <button wire:click="save" type="button"
                class="p-3 bg-green-600 text-green-200 rounded hover:bg-green-500">Save</button>
        </div>
    </form>

</div>
