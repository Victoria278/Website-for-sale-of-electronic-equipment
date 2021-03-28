@extends('layouts.master')

@section('title', 'Товар ')

@section('content')

    <h2>{{ $product->name }}</h2>
    <p>Ціна: <b>{{ $product->price }}</b></p>
    <img src="{{ Storage::url($product->image) }}">
    <p>{{ $product->description }}</p>

    <form action="{{ route('basket-add', $product) }}" method="POST">
        <button type="submit" class="btn btn-primary" role="button">В кошик</button>
        @csrf
    </form>

    
@endsection