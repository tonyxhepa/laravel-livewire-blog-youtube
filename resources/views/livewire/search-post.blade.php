<div class="relative mt-3 md:mt-0">
    <input wire:model="query" type="text" class="bg-gray-800 text-sm rounded py-2 w-64 px-4 pl-8 focus:outline-none focus:shadow-outline" placeholder="Search" />
    <div class="absolute top-0">
        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z" /></svg>
    </div>
    @if(strlen($query) > 2)
    <div class="z-50 absolute bg-gray-800 text-sm rounded w-64 mt-4" x-show.transition.opacity="isOpen">
       @if($results->count() > 0)
        <ul>
            @foreach($results as $result)
            <li class="border-b border-gray-700">
                <a href="{{ route('posts.show', $result->slug) }}" class="block hover:bg-gray-700 text-gray-200 px-3 py-3 items-center transition ease-in-out duration-150">
                    <span class="ml-4">{{ $result->title }}</span>
                </a>
            </li>
            @endforeach
        </ul>
        @else
        <div class="m-2 p-2 text-gray-50">
            No results
        </div>
        @endif
    </div>
    @endif
</div>
