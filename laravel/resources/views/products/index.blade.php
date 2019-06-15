@extends('layouts.index')

@section('content')

    <div class="row">

        <div class="col-12">
            <a href="{{ route('products.create') }}" class="btn btn-success">Create</a>
        </div>

        @foreach($products as $product)
            <div class="col-6 my-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">
                            {{ $product->description }}
                        </p>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('products.show',['id' => $product->id]) }}" class="btn btn-primary mr-2">Show more</a>
                            <a href="{{ route('products.edit',['id' => $product->id]) }}" class="btn btn-warning mr-2">Edit</a>
                            <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                        </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection