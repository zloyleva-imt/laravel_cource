@extends('layouts.index')

@section('content')

    <catalog-component
        :routes="{{ $routes }}"
        :products="{{ $products }}"
    ></catalog-component>

@endsection