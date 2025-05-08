@extends('app')
@section('content')
    <!-- Hero Section start  -->
    @include('pages.inicio.portada')

    <!-- Feature Section start  -->
    @include('pages.inicio.Carrusel1')

    <!-- Shop Section start  -->
    @include('pages.inicio.ShopSeccion')

    <!-- Book Catagories Section start  -->
    @include('pages.inicio.Categorias')

    <!-- Shop2 Section start  -->
    @include('pages.inicio.shop2')

    <!-- Cta Banner Section start  -->
    @include('pages.inicio.banner')

    <!-- Top Ratting Book Section start  -->
    @include('pages.inicio.ranking')
@endsection
