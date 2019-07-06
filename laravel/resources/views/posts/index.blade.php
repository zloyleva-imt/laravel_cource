@extends('layouts.index')

@section('content')

    <posts-component
        :routes="{{ $routes }}"
        :posts="{{ $posts }}"
    ></posts-component>

@endsection