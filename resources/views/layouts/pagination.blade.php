@if ($paginator->hasPages())
    <nav class="w-full my-12 flex flex-col sm:flex-row justify-center items-center">
        {{-- Pagination Elements --}}
        <div class="flex flex-wrap justify-center mb-2 sm:mb-0">
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="mx-1 sm:mx-2 text-sm font-medium">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)

                        @if ($page == $paginator->currentPage())
                            <span class="mx-1 sm:mx-2 text-lg sm:text-xl inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-red-500 bg-gray-100">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="mx-1 sm:mx-2 text-lg sm:text-xl inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>
    </nav>
@endif
