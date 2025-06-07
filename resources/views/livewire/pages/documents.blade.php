<div>
    <x-slot:title>CSHUB|Documents</x-slot>
    @livewire('components.ui.navbar')


    {{-- top filters and search --}}
    <div class="w-full px-2 py-4 flex gap-2 items-center flex-wrap sticky top-[69px] left-0 bg-neutral-900">

        <div
            class="relative w-full flex items-center px-4 max-w-[650px] bg-neutral-800 rounded-full h-[60px] focus-within:border focus-within:border-gray-300 transition-all">
            <input placeholder="Search." wire:model="search"
                class="h-full placeholder:text-gray-400 text-white flex-1 border-none outline-none" type="text">
            <button
            wire:click="filter"
                class="absolute right-5 flex items-center justify-center rounded-full cursor-pointer text-gray-300 mt-auto mb-auto w-[70px] h-[75%] bg-blue-600 hover:bg-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg>
            </button>
        </div>


        <select wire:model="type" class="px-6 py-4 bg-neutral-800 text-white mx-2 rounded" name="">
            <option selected value="">All</option>
            <option value="COURS">Cours</option>
            <option value="EXAM">Exam</option>
            <option value="RESUME">Resume</option>
            <option value="TD">Td</option>
            <option value="TEST">Test</option>
            <option value="TP">Tp</option>

        </select>


        <select wire:model="module_id" class="px-6  py-4 bg-neutral-800 text-white mx-2 rounded">
            <option  value="0">All</option>
            @foreach ($modules as $m)
                <option value="{{ $m->id }}">{{ $m->name }}</option>
            @endforeach
        </select>



        <button wire:click="filter"
            class="px-6 flex-1 py-4 font-bold text-white bg-blue-600 rounded-full cursor-pointer hover:bg-blue-400 transition-all">Filter</button>

            

            <button wire:click="clear"
            class="px-6 flex-1 py-4 font-bold text-white bg-red-600 rounded-full cursor-pointer hover:bg-red-400 transition-all">Clear</button>

            
    </div>

    <section class="px-4 py-6">
        <h3 class="text-3xl text-gray-300 font-bold">Documents</h3>

        {{-- results container --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 p-4 gap-4">

            @foreach ($documents as $doc)
                @livewire('components.ui.document', ["id"=>$doc->id,'title' => $doc->title, 'link' => $doc->link, 'type' => $doc->type, 'module' => $doc->module->name])
            @endforeach
        </div>

        {{ $documents->links() }}
    </section>
</div>
