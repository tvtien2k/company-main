

@if (isset($paginator) && $paginator->lastPage() > 1)

    <ul class="pagination" style="font-size: 20px" >

    <?php
    $interval = isset($interval) ? abs(intval($interval)) : 3 ;
    $from = $paginator->currentPage() - $interval;
    if($from < 1){
        $from = 1;
    }

    $to = $paginator->currentPage() + $interval;
    if($to > $paginator->lastPage()){
        $to = $paginator->lastPage();
    }
    ?>

    <!-- first/previous -->
        @if($paginator->currentPage() > 1)
{{--            <li>--}}
{{--                <a href="{{ $paginator->url(1) }}" aria-label="First">--}}
{{--                    <span aria-hidden="true"> &laquo; </span>--}}
{{--                </a>--}}
{{--            </li>--}}

            <li style="margin-right: 0px;float: right">
                <a href="{{ $paginator->url($paginator->currentPage() - 1) }}" aria-label="Previous">
                    <div aria-hidden="true" style="height: 33px;width:110px;border: 1px solid gray;text-align: center">Previous</div>
                </a>
            </li>
        @endif
    <!-- links -->
        @for($i = $from; $i <= $to; $i++)

            <?php
            $isCurrentPage = $paginator->currentPage() == $i;
            ?>
            <li class="{{ $isCurrentPage ? 'active' : '' }}">
                <a href="{{ !$isCurrentPage ? $paginator->url($i) : '#' }}">
                   <div id="value" style="border: 1px solid gray;text-align: center;width: 40px"; value="{{ $i }}" ">{{ $i }} </div>
                </a>
            </li>
        @endfor

    <!-- next/last -->
        @if($paginator->currentPage() < $paginator->lastPage())
            <li>
                <a href="{{ $paginator->url($paginator->currentPage() + 1) }}" aria-label="Next">
                    <div aria-hidden="true" style="border: 1px solid gray;width: 60px;text-align: center">Next</div>
                </a>
            </li>

{{--            <li>--}}
{{--                <a href="{{ $paginator->url($paginator->lastpage()) }}" aria-label="Last">--}}
{{--                    <span aria-hidden="true">&raquo;</span>--}}
{{--                </a>--}}
{{--            </li>--}}
        @endif

    </ul>

@endif
