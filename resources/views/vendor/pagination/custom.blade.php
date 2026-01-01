@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="w-full flex items-center justify-center pt-12 mb-10">
        <div class="flex flex-wrap items-center gap-2">
            
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="px-4 py-2 text-sm font-medium text-slate-300 bg-white border border-slate-300 rounded-lg cursor-not-allowed">
                    &lt;
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 hover:text-primary transition-colors">
                    &lt;
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="px-4 py-2 text-sm font-medium text-slate-400 border border-slate-300 rounded-lg">
                        {{ $element }}
                    </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            {{-- Active Page (Solid Orange) --}}
                            <span aria-current="page" class="px-4 py-2 text-sm font-medium text-white bg-primary border border-primary rounded-lg shadow-sm">
                                {{ $page }}
                            </span>
                        @else
                            {{-- Inactive Page (Outline) --}}
                            <a href="{{ $url }}" class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 hover:text-primary hover:border-primary transition-colors">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 hover:text-primary transition-colors">
                    &gt;
                </a>
            @else
                <span class="px-4 py-2 text-sm font-medium text-slate-300 bg-white border border-slate-300 rounded-lg cursor-not-allowed">
                    &gt;
                </span>
            @endif
            
        </div>
    </nav>
@endif