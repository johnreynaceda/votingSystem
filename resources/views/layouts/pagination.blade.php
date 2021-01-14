@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex space-x-2">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 focus:outline-none bg-white hover:bg-side hover:text-white border border-gray-300 cursor-default leading-5 rounded-md">
            {!! __('pagination.previous') !!}
        </span>
        @else
            <button type="button" wire:click="previousPage" rel="prev" class="relative inline-flex items-center  px-4 py-2 text-sm font-medium text-gray-700 hover:bg-side hover:text-white bg-white border border-gray-300 leading-5 rounded-md  focus:outline-none focus:shadow-outline-blue  active:bg-gray-100 transition ease-in-out duration-150">
                {!! __('pagination.previous') !!}
            </button>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <button type="button" wire:click="nextPage" rel="next" class="relative inline-flex items-center  px-4 py-2 text-sm font-medium text-gray-700 hover:bg-side hover:text-white bg-white border border-gray-300 leading-5 rounded-md  focus:outline-none focus:shadow-outline-blue  active:bg-gray-100  transition ease-in-out duration-150">
                {!! __('pagination.next') !!}
            </button>
        @else
        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium focus:outline-none text-gray-500 hover:bg-side hover:text-white bg-white border border-gray-300 cursor-default leading-5 rounded-md">
            {!! __('pagination.next') !!}
        </span>
        @endif
    </nav>
@endif
