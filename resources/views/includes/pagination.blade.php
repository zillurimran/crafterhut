@if($products->hasPages())
  <div class="pages">
      <ul class="pagination">
        
          @if($products->currentPage() > 1)
            <li>
              <a href="{{ $products->previousPageUrl() }}">&laquo;</a>
            </li>
          @endif
          @for ($i = 1; $i <= 3; $i++)
            <li class="{{ (request()->page == $i) ? 'active' : '' }}">
                <a class="next page-numbers" href="?page={{ $i }}">{{ $i }}</a>
            </li>
          @endfor
        @if($products->currentPage() != 3)
          <li>
            <a href="{{ $products->nextPageUrl() }}">&raquo;</a>
          </li>
        @endif
        
      </ul>
    </div>
@endif