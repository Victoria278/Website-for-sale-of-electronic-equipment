@extends('auth.layouts.master')

@section('title', 'Категория ' . $category->name)

@section('content')
    <div class="col-md-12">
        <h1>Категорія</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значення
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <td>Код</td>
                <td>{{ $category->code }}</td>
            </tr>
            <tr>
                <td>Назва</td>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <td>Опис</td>
                <td>{{ $category->description }}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><img src="{{ Storage::url($category->image) }}" height="240px">
            </tr>
            <tr>
                <td>Кількість товарів</td>
                <td>{{ $category->products->count() }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection