<style>
    @media screen and (max-width: 400px) {
        li.page-item {

            display: none;
        }

        .page-item:first-child,
        .page-item:nth-child(2),
        .page-item:nth-last-child(2),
        .page-item:last-child,
        .page-item.active,
        .page-item.disabled {

            display: block;
        }
    }
</style>
@if ($paginator->hasPages())
    <ul class="pagination">
        <!-- Liên kết trang trước -->
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><a class="page-link"><span>&laquo;</span></a></li>
        @else
            <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" class="page-link" rel="prev">&laquo;</a>
            </li>
        @endif

        <!-- Các thành phần phân trang -->
        @foreach ($elements as $element)
            <!-- Tạo ba dấu chấm -->
            @if (is_string($element))
                <li class="page-item disabled"><a class="page-link"><span>{{ $element }}</span></a></li>
            @endif

            <!-- Mảng liên kết -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><a class="page-link"><span>{{ $page }}</span></a></li>
                    @else
                        <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        <!-- Liên kết trang tiếp -->
        @if ($paginator->hasMorePages())
            <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" class="page-link"><span>&raquo;</span></a>
            </li>
        @else
            <li class="page-item disabled"><a class="page-link"><span>&raquo;</span></a></li>
        @endif
    </ul>

@endif
