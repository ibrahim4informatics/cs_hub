<div>
    <x-slot:title>CSHUB|Favourites</x-slot>
    @livewire('components.ui.navbar')



    <section class="px-4 py-6">
        <h3 class="text-3xl text-gray-300 font-bold text-center">Favourites</h3>

        {{-- results container --}}


        @if ($documents)
            @foreach ($documents as $doc)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 p-4 gap-4">
                    @livewire('components.ui.document', ['id' => $doc->id, 'title' => $doc->title, 'link' => $doc->link, 'type' => $doc->type, 'module' => $doc->module->name])
                </div>
            @endforeach
        @else
            <p class="text-center text-neutral-400 w-full mt-5">brows document and add them to favourite for quick
                access, you
                can add them by hitting the star icon in each document ⭐</p>
            <div class="my-3 flex items-center justify-center">
                <a href="{{ route("documents") }}" class="mt-3 px-4 py-2 rounded-full border border-neutral-500 cursor-pointer bg-neutral-800 mx-auto text-white">Documents</a>
            </div>
        @endif

    </section>
</div>
