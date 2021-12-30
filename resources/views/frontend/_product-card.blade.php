
<div class="card h-100">
    <a href="{{route('frontend.products.show', $product['id'])}}" style="text-decoration:none;" class="text-dark">
        <img src="{{url('images') . '/' . $product['image']}}" class="card-img-top p-1" alt="..." >
        <div class="card-body">
            @if ($product['discount'] > 0)
            <p class="mb-1"><span class="bg-danger text-white small p-1 rounded"><i class="fas fa-fire-alt"></i> Hot Sale</span></p>
            @else
            <p class="mb-1"><span class="bg-success text-white small p-1 rounded"><i class="fas fa-truck"></i> Avaliable</span></p>
            @endif
            <h5 class="card-title mb-0">{{$product['name']}}</h5>
            <p class="small mb-0">Ref. {{$product['reference']}}</p>
            @if ($product['discount'] > 0)
            <span class="card-text mb-0" style="text-decoration: line-through;">${{number_format($product['price'])}}</span>
            <span class="text-danger"><b>-{{$product['discount']}}%</b></span>
            <p class="card-text text-danger h5"><b>${{number_format($product['price'] - ($product['discount'] * $product['price'] / 100) )}}</b></p>
            @else
            <span class="card-text mb-0">Only</span>
            <p class="card-text h5 text-danger">${{number_format($product['price'])}}</p>
            @endif
        </div>
    </a>
</div>
    