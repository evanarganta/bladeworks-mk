@if ($paginator->hasPages())
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 border-t border-[#27272a] pt-4 mt-4 text-xs text-[#a1a1aa]">
        <div>
            Menampilkan <span class="text-white font-medium">{{ $paginator->firstItem() }}</span> &ndash; <span class="text-white font-medium">{{ $paginator->lastItem() }}</span> dari <span class="text-white font-medium">{{ $paginator->total() }}</span> data
        </div>

        <div class="flex items-center gap-1">
            @if ($paginator->onFirstPage())
                <span class="inline-flex items-center border border-[#27272a] bg-[#111113] px-2.5 py-1 text-[11px] text-[#71717a] cursor-not-allowed">
                    &larr; prev
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="inline-flex items-center border border-[#27272a] bg-[#18181b] px-2.5 py-1 text-[11px] text-[#d4d4d8] hover:border-[#3f3f46] hover:text-white">
                    &larr; prev
                </a>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="px-2 py-1 text-[11px] text-[#71717a]">{{ $element }}</span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="inline-flex items-center border border-[#3f3f46] bg-[#27272a] px-2.5 py-1 text-[11px] font-medium text-white">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="inline-flex items-center border border-[#27272a] bg-[#18181b] px-2.5 py-1 text-[11px] text-[#a1a1aa] hover:border-[#3f3f46] hover:text-white">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="inline-flex items-center border border-[#27272a] bg-[#18181b] px-2.5 py-1 text-[11px] text-[#d4d4d8] hover:border-[#3f3f46] hover:text-white">
                    next &rarr;
                </a>
            @else
                <span class="inline-flex items-center border border-[#27272a] bg-[#111113] px-2.5 py-1 text-[11px] text-[#71717a] cursor-not-allowed">
                    next &rarr;
                </span>
            @endif
        </div>
    </div>
@endif
