@extends('layouts.app')
@section('title', 'Awtoşaýlaryň katalogy')

@section('content') {{-- Заполняем yield('content') --}}
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Biziň harytlarymyz</h1>

            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('products.index') }}" method="GET" class="row g-2">
                        <div class="col-md-10">
                            <input type="text" name="search" class="form-control" placeholder="SKU ýa-da ady boýunça gözleg..." value="{{ request('search') }}">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100">Gözlemek</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                @forelse($products as $product)
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="text-muted small">Artikuly: {{ $product->sku }}</p>
                                <p class="h4 text-primary">{{ number_format($product->price, 2) }} TMT</p>
                            </div>
                            <div class="card-footer bg-transparent border-0 pb-3">
                                <a href="{{ route('products.show', $product->slug) }}" class="btn btn-sm btn-outline-primary">Görmek</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12"><p>Haryt tapylmady.</p></div>
                @endforelse
            </div>

            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection