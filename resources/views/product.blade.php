@extends('layouts.master')

@section('title', 'Товар ')

@section('content')

    <h1>{{ $product->name }}</h1>
    <h2>{{ $product->category->name }}</h2>
    <p>Цена: <b>{{ $product->price }} грн.</b></p>
    <img src="{{ Storage::url($product->image) }}" height="240px">
    <p>{{ $product->description }}</p>

    @if($product->isAvailable())
        <form action="{{ route('basket-add', $product) }}" method="POST">
            <button type="submit" class="btn btn-success" role="button">Додати у кошик</button>
            @csrf
        </form>
    @else
    <span>Нема в наявнсотi</span>
        <br>
        <span>Повiдомити, коли товар зьявиться в наявностi:</span>
        <div class="warning">
            @if($errors->get('email'))
                {!! $errors->get('email')[0] !!}
            @endif
        </div>
        <form method="POST" action="{{ route('subscription', $product) }}">
            @csrf
            <input type="text" name="email"></input>
            <button type="submit">Вiдправити</button>
        </form>
    @endif
@endsection