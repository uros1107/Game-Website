@if ($paginator->hasPages())
<div class="pagination_sec text-center pt-3">
    <div class="row">
        <div class="col-12">
            <div class="pagination_number">
                <span>
                
                    @if ($paginator->onFirstPage())
                        <a href="#" class="disabled">
                            <i class="fal fa-angle-left"></i>
                        </a>
                    @else
                        <a href="#" class="prev-page" data-href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fal fa-angle-left"></i></a>
                    @endif
                
                    @foreach ($elements as $element)
                    
                        @if (is_string($element))
                            <a href="#">{{ $element }}</a>
                        @endif
                    
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <a class="active my-active" href="#">{{ $page }}</a>
                                @else
                                    <a href="#" class="number-page" data-href="{{ $url }}">{{ $page }}</a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    
                    @if ($paginator->hasMorePages())
                        <a href="#" class="next-page" data-href="{{ $paginator->nextPageUrl() }}" rel="next">
                            <i class="fal fa-angle-right"></i>
                        </a>
                    @else
                        <a href="#" class="disabled">
                            <i class="fal fa-angle-right"></i>
                        </a>
                    @endif
                </span>
            </div>
        </div>
    </div>
</div>
@endif 
