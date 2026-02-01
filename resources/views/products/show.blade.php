@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="container">
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Katalog</a></li>
            <li class="breadcrumb-item active">{{ $product->category->name }}</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm text-center py-5 bg-secondary text-white">
                <i class="bi bi-image" style="font-size: 5rem;"></i>
                <p>Изображение запчасти</p>
                </div>
        </div>

        <div class="col-md-6">
            <h1 class="display-5 fw-bold">{{ $product->name }}</h1>
            <p class="text-muted">Artikul (SKU): <span class="badge bg-dark">{{ $product->sku }}</span></p>
            
            <hr>

            <div class="mb-4">
                <h3 class="text-primary">{{ number_format($product->price, 2, '.', ' ') }} ₽</h3>
                <p class="text-success">●  ({{ $product->stock }} sanysy bar.)</p>
            </div>

            <h5>Öndüriji</h5>
            <p>{{ $product->brand->name }}</p>

            <h5>Haryt barada</h5>
            <p class="text-secondary">{{ $product->description }}</p>

            @if($product->attributes)
                <div class="card bg-light mt-4">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Tehniki häsiýetnamasy:</h6>
                        <ul class="list-unstyled mb-0">
                            @foreach($product->attributes as $key => $value)
                                <li><strong>{{ ucfirst($key) }}:</strong> {{ $value }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <div class="mt-4">
                <button class="btn btn-primary btn-lg px-5">Sebede goş</button>
            </div>
        </div>
    </div>
</div>
@endsection