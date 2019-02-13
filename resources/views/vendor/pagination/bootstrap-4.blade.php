@if ($paginator->hasPages())
    <ul id="pagination" class="pagination float-right">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link arrow">Atgal</span></li>
        @else
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">Atgal</a></li>
        @endif



        @if($paginator->total()/$paginator->perPage() <= 9)
            @foreach(range(1, $paginator->lastPage()) as $i)
                    @if ($i == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                    @endif
            @endforeach
        @else
            @if($paginator->currentPage() > 5)
                <li class="page-item hidden-xs"><a class="page-link" href="{{ $paginator->url(1) }}">1</a></li>
            @endif
            
            @if($paginator->currentPage() <= 5)
                @foreach(range(1, 7) as $i)
                        @if ($i == $paginator->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                        @endif
                @endforeach
            @endif

            @if($paginator->currentPage() > 5)
                <li class="page-item disabled hidden-xs"><span class="page-link">...</span></li>
            @endif
            
            @if($paginator->currentPage() > 5 && $paginator->currentPage() < $paginator->lastPage() - 4)                
                @foreach(range(1, $paginator->lastPage()) as $i)
                    @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                        @if ($i == $paginator->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                        @endif
                    @endif
                @endforeach                
            @endif

            @if($paginator->currentPage() >= $paginator->lastPage() - 4)
                @foreach(range($paginator->lastPage()-6, $paginator->lastPage()) as $i)
                        @if ($i == $paginator->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                        @endif
                @endforeach
            @endif

            @if($paginator->currentPage() < $paginator->lastPage() - 4)
                <li class="page-item disabled hidden-xs"><span class="page-link">...</span></li>
            @endif

            @if($paginator->currentPage() < $paginator->lastPage() - 4)
                <li class="page-item hidden-xs"><a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
            @endif
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Pirmyn</a></li>
        @else
            <li class="page-item disabled"><span class="page-link arrow">Pirmyn</span></li>
        @endif
    </ul>
@endif