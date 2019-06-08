@extends('layouts.index')

@section('content')

    <div class="row">

        @foreach($products as $product)
            <div class="col-6 my-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">
                            {{ $product->description }}
                        </p>
                        <a href="{{ route('products.index') . '/' . $product->id }}" class="btn btn-primary">Show more</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection