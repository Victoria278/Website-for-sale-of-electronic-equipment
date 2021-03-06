@extends('auth.layouts.master')

@section('title', 'Замовлення ' . $order->id)

@section('content')
    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>Замовлення №{{ $order->id }}</h1>
                    <p>Замовник: <b>{{ $order->name }}</b></p>
                    <p>Номер теелфону: <b>{{ $order->phone }}</b></p>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Назва</th>
                            <th>Кількість</th>
                            <th>Ціна</th>
                            <th>Вартість</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                                        <img height="56px"
                                             src="{{ Storage::url($product->image) }}">
                                        {{ $product->name }}
                                    </a>
                                </td>
                                <td><span class="badge">{{ $product->pivot->count }}</span></td>
                                <td>{{ $product->price }} грн.</td>
                                <td>{{ $product->getPriceForCount()}} грн.</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">Загальна вартість:</td>
                            <td>{{ $order->calculateFullSum() }} грн.</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection