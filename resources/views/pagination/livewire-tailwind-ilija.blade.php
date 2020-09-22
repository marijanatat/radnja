@if ($paginator->hasPages())
    <div class="flex my-2 text-sm items-center">
        <div class="mr-16">
            <p class="text-sm leading-5 text-gray-900">
                Prikaz
                <span class="font-medium">{{ $paginator->firstItem() }}</span>
                {!! __('-') !!}
                <span class="font-medium">{{ $paginator->lastItem() }}</span>
                {!! __('od') !!}
                <span class="font-medium">{{ $paginator->total() }}</span>
                {{-- {!! __('proizvoda') !!} --}}
            </p>
        </div>        
        @if ( ! $paginator->onFirstPage())
            {{-- First Page Link --}}
            <a
            class="text-gray-800 mx-1 px-2 py-1 font-bold text-center hover:text-gray-600 cursor-pointer" title="Prva strana"
            wire:click="gotoPage(1)"
            >
            <<
            </a>
            @if($paginator->currentPage() > 1)
            {{-- Previous Page Link --}}
            <a
                class="mx-1 px-2 border border-gray-800 rounded-md text-gray-800 text-center hover:text-gray-600 cursor-pointer" title="Prethodna strana"
                wire:click="previousPage"
            >
            Prethodna
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
                        <span class="mx-1 px-2 border border-gray-800 bg-gray-800 text-white text-center rounded-md cursor-pointer">{{ $page }}</span>
                        @elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2)
                        <a class="mx-1 px-2 border  border-gray-800 text-gray-800 text-center hover:text-gray-600 rounded-md cursor-pointer" wire:click="gotoPage({{$page}})">{{ $page }}</a>
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
            @if($paginator->lastPage() - $paginator->currentPage() >= 1)
                <a class="text-gray-800 border border-gray-800 mx-1 px-2 text-center rounded-md hover:text-gray-600 cursor-pointer" title="Sledeća strana"
                wire:click="nextPage"
                rel="next">
                Sledeća
                </a>
            @endif
            <a
                class="text-gray-800 mx-1 px-2 py-1 font-bold text-center hover:text-gray-600 cursor-pointer" title="Poslednja strana"
                wire:click="gotoPage({{ $paginator->lastPage() }})"
            >
            >>
            </a>
        @endif
    </div>
@endif
