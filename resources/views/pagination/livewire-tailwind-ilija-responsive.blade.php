@if ($paginator->hasPages())
    <div class="flex items-end my-2 text-sm">
        
        @if ( ! $paginator->onFirstPage())
            {{-- First Page Link --}}
            <a
            class="text-boja mx-1 px-2 py-2 font-bold text-center hover:text-teal-500 cursor-pointer"
            wire:click="gotoPage(1)"
            >
            <<
            </a>
            @if($paginator->currentPage() > 2)
            {{-- Previous Page Link --}}
            <a
                class="mx-1 px-2 py-2 text-boja font-bold text-center hover:text-teal-500 cursor-pointer"
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
                        <span class="mx-1 px-3 py-1 border border-boja bg-boja text-white font-semibold text-center hover:bg-teal-500 hover:border-teal-500 rounded-md cursor-pointer">{{ $page }}</span>
                    @elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() - 1)
                        <a class="mx-1 px-3 py-1 border border-boja text-boja font-semibold text-center hover:text-teal-500 rounded-md cursor-pointer" wire:click="gotoPage({{$page}})">{{ $page }}</a>
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
                <a class="text-boja mx-1 px-2 py-2 font-bold text-center hover:text-teal-500 cursor-pointer"
                wire:click="nextPage"
                rel="next">
                >
                </a>
            @endif
            <a
                class="text-boja mx-1 px-2 py-2 font-bold text-center hover:text-teal-500 cursor-pointer"
                wire:click="gotoPage({{ $paginator->lastPage() }})"
            >
            >>
            </a>
        @endif
    </div>
@endif
