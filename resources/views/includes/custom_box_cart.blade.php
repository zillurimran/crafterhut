<div class="card-total">
    <h6 class="final_price">Final price (TTC)</h6>
    <h6 class="card-total__price">{{ getCustomTotal() }} ৳</h6>
</div>
<div class="list-group">
    <a href="#" class="list-group-item">
        @if (session('box_id'))
        {{ \App\Models\Product::find(session('box_id'))->name }}
        @else
        FRUITIBOX TO PERSONALISE
        @endif
    </a>
    @if (session('selected_product'))
        @foreach (session('selected_product') as $data)
        <a href="javascript:void(0)" class="list-group-item">
            {{ $data['qnt'] }}x {{ \App\Models\Product::find($data['id'])->name }}
        </a>
        @endforeach
    @endif 
</div>