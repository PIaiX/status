@if ($paginator->hasPages())
    <ul class="pagination">
       
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><a class="btn_main btn_xs f_08 btn_3">В начало</a></li>
        @else
            <li class="page-item">
                <a class="btn_main btn_xs f_08 btn_3" href="{{ $paginator->previousPageUrl() }}" rel="prev">В начало</a>
            </li>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="page-item disabled"><a class="page-link">{{ $element }}</a></li>
            @endif
            <li class="page-item"><a class="page-link" href="">...</a></li>
           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item"><a class="page-link active">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        <li class="page-item"><a class="page-link" href="">...</a></li>
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="btn_main btn_xs f_08 btn_3" href="{{ $paginator->nextPageUrl() }}" rel="next">Дальше</a></li>
        @else
            <li class="page-item disabled"><a class="btn_main btn_xs f_08 btn_3">Дальше</a></li>
        @endif
    </ul>
@endif 