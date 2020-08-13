<div class="relative" x-data="{ isVisible: true}" @click.away="isVisible = false">
    <input 
        wire:model.debounce.300ms="search"
        type="text"
        class="bg-gray-200 w-64 text-sm rounded-full px-3 py-1 pl-8 focus:outline-none focus:shadow-outline"
        placeholder="Pretraga proizvoda"
        x-ref="search"
        @keydown.window="
            if(event.keyCode === 191) {
                event.preventDefault();
                $refs.search.focus();
            }
        "
        @focus="isVisible = true"
        @keydown.escape.window = "isVisible = false"
        @keydown="isVisible = true"
        @keydown.shift.tab="isVisible = false"
        @keydown.enter="isVisible = false"        
        wire:keydown.enter="searchProducts"        
        >
    <div class="absolute top-0 flex items-center h-full ml-2">
        <svg class="fill-current text-gray-400 w-4" viewBox="0 0 24 24">
            <path class="heroicon-ui"
                d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z" />
            </svg>
    </div>

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3" style="position: absolute"></div>

    @if (strlen($search) >= 2)
        <div class="absolute z-50 bg-gray-200 text-xs rounded w-64 mt-2"
        x-show.transition.opacity.duration.200="isVisible">
            @if (count($searchResults) > 0)
                <ul>
                    @foreach ($searchResults as $product)
                        <li class="border-b border-gray-700">
                            <a 
                                href="{{ route('shop.show', $product->slug)}}"
                                class="hover:bg-gray-500 flex items-center transition ease-in-out duration-150 px-3 py-3"
                                @if ($loop->last) @keydown.tab="isVisible=false " @endif
                            >
                            <img src="{{productImage($product->image)}}" class="w-8 h-auto" alt="">
                                <span class="ml-4">{{ $product->name }}</span>
                                <span class="ml-auto">{{presentPrice($product->price)}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else 
                <div class="px-3 py-3">No results for "{{ $search }}"</div>
            @endif

        </div>
    @endif
</div>
