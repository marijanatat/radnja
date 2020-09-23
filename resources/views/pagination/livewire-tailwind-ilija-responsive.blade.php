@if ($paginator->hasPages())
    <div class="flex items-center my-2 text-sm">
        
        @if ( ! $paginator->onFirstPage())
            {{-- First Page Link --}}
            <a
            class="text-gray-700 mx-1 px-2 py-1 font-bold text-center cursor-pointer"
            wire:click="gotoPage(1)"
            >
            <<
            </a>
            @if($paginator->currentPage() > 2)
            {{-- Previous Page Link --}}
            <a
                class="mx-2 px-2 py-1 text-gray-700 font-bold text-center cursor-pointer"
                wire:click="previousPage"
            >
            <
            </a>
            @endif
        @endif

        <!-- Pagination Elements -->
        @foreach ($elements as $element)
            <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    {{-- <!--  Use three dots when current page is greater than 3.  -->
                    @if ($paginator->currentPage() > 2 && $page === 1)
                        <div class="text-blue-800 mx-1">
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                        </div>
                    @endif --}}

                    <!--  Show active page two pages before and after it.  -->
                    @if ($page == $paginator->currentPage())
                        <span class="mx-1 px-2 border border-boja bg-boja text-white font-semibold text-center rounded-md cursor-pointer">{{ $page }}</span>
                    @elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() - 1)
                        <a class="mx-1 px-2 border border-gray-700 text-gray-700 font-semibold text-center rounded-md cursor-pointer" wire:click="gotoPage({{$page}})">{{ $page }}</a>
                    @endif

                    {{-- <!--  Use three dots when current page is away from end.  -->
                    @if ($paginator->currentPage() < $paginator->lastPage() - 2  && $page === $paginator->lastPage() - 1)
                        <div class="text-blue-800 mx-1">
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                        </div>
                    @endif --}}
                @endforeach
            @endif
        @endforeach
        
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            @if($paginator->lastPage() - $paginator->currentPage() >= 2)
                <a class="text-gray-700 mx-2 px-2 py-1 font-bold text-center cursor-pointer"
                wire:click="nextPage"
                rel="next">
                >
                </a>
            @endif
            <a
                class="text-gray-700 mx-1 px-2 py-1 font-bold text-center cursor-pointer"
                wire:click="gotoPage({{ $paginator->lastPage() }})"
            >
            >>
            </a>
        @endif
    </div>
@endif
