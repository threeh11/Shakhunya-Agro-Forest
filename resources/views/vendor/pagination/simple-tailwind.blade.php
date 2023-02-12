@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="float-left px-4 py-2 text-black ease-in rounded-lg hover:bg-[#FFED4E]">
                {!! __('<<') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="float-left px-4 py-2 text-black ease-in rounded-lg hover:bg-[#FFED4E] hover:border hover:border-gray">
                {!! __('<<') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="float-left px-4 py-2 text-black ease-in hover:bg-[#FFED4E] rounded-lg hover:border hover:border-gray">
                {!! __('>>') !!}
            </a>
        @else
            <span class="float-left px-4 py-2 text-black ease-in hover:bg-[#FFED4E] rounded-lg">
                {!! __('>>') !!}
            </span>
        @endif
    </nav>
@endif
