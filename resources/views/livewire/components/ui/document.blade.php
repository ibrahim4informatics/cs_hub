<div class="bg-neutral-800 text-gray-300 p-4 rounded">
    <div class="flex items-center gap-2">
        <svg width="80px" height="80px" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
            <path
                d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2z" />
        </svg>

        <div class="w-full flex flex-col gap-2">
            <h4 class="text-lg text-blue-400">{{ $title }}</h4>
            <div class="flex items-center gap-2 my-4">
                <div class="px-4 text-xs py-1 rounded-full bg-yellow-600">{{ $module }}</div>
                <div class="px-4 text-xs py-1 rounded-full bg-red-600">{{ $type }}</div>
                <button wire:click="add_fav" class="text-yellow-400 cursor-pointer">

                    @if ($is_favourite)
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-star" viewBox="0 0 16 16">
                            <path
                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                        </svg>
                    @endif


                </button>
            </div>

        </div>
    </div>
    <p class="text-center"> <a target="_blank" class="text-blue-600 underline text-center w-full mx-auto"
            href="{{ $link }}">Open File</a></p>
</div>
