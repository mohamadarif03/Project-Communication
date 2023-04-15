<div class="flex justify-center mt-8">
    <ul class="pagination">
        @if ($paginator->onFirstPage())
            <li class="disabled">
                <span class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-gray-500 mr-2 cursor-not-allowed" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </span>
            </li>
        @else
            <li>
                <a  class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-yellow-500 cursor-pointer hover:bg-gray-200 mr-2" onclick="GetData({{ $paginator->currentPage()-1 }})" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled"><span class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-gray-500 mr-2 cursor-not-allowed">{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><span class="relative block py-2 px-3 leading-tight bg-yellow-500 text-white mr-2">{{ $page }}</span></li>
                    @else
                        <li><a  class="relative block py-2 px-3 leading-tight cursor-pointer bg-white border border-gray-300 text-yellow-500 hover:bg-gray-200 mr-2" onclick="GetData({{ $page }})">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li>
                <a  class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-yellow-500 cursor-pointer hover:bg-gray-200 ml-2" onclick="GetData({{ $paginator->currentPage()+1 }})" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        @else
            <li class="disabled">
                <span class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-gray-500 ml-2 cursor-not-allowed" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </span>
            </li>
        @endif
    </ul>
</div>