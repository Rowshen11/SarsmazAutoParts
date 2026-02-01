@extends('layouts.app')
@section('title', 'Awtoşaýlaryň katalogy')

@section('content')
<div class="row">
    <div class="col-md-3 mb-4">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white fw-bold">Brendler</div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <a href="{{ route('products.index') }}" 
                       class="list-group-item list-group-item-action {{ !request('brand') ? 'active' : '' }}">
                       Ähli öndürijiler
                    </a>
                    
                    @foreach($brands as $brand)
                        <a href="{{ route('products.index', ['brand' => $brand->id] + request()->except('brand', 'page')) }}" 
                           class="list-group-item list-group-item-action {{ request('brand') == $brand->id ? 'active' : '' }}">
                            {{ $brand->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <form action="{{ route('products.index') }}" method="GET" class="mb-4">
            @if(request('brand'))
                <input type="hidden" name="brand" value="{{ request('brand') }}">
            @endif
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="SKU ýada ady boýunça tapmak..." value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Gözleg</button>
            </div>
        </form>

        <div class="row row-cols-1 row-cols-lg-3 g-4">
            @forelse($products as $product)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h6 class="text-muted small">{{ $product->brand->name }}</h6>
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="text-primary fw-bold">{{ number_format($product->price, 2) }} ₽</p>
                            <a href="{{ route('products.show', $product->slug) }}" class="btn btn-sm btn-outline-dark">Giňişleýin</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <h5>Hiç zat tapylmady...</h5>
                    <a href="{{ route('products.index') }}" class="btn btn-link">Filterleri aýyrmak</a>
                </div>
            @endforelse
        </div>

        <div class="mt-4 d-flex justify-content-center">
             {{ $products->links() }}
        </div>
    </div>
</div>
@endsection