@extends('layouts.index')

@section('content')

    <div class="row">

        <div class="col-12">
            <a href="{{ route('categories.create') }}" class="btn btn-success">Create category</a>
        </div>

        @foreach($categories as $category)
            <div class="col-6 my-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <p class="card-text">
                            {{ $category->description }}
                        </p>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('categories.show',['id' => $category->id]) }}" class="btn btn-primary mr-2">Show more</a>
                            <a href="{{ route('categories.edit',['id' => $category->id]) }}" class="btn btn-warning mr-2">Edit</a>
                            <form action="{{ route('categories.destroy', ['id' => $category->id]) }}" method="post">
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