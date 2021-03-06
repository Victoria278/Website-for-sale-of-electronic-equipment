@extends('layouts.master')

@section('title', 'Все категории ')

@section('content')
@foreach($categories as $category)
<div class="col-sm-6 col-md-6">
    <div class="thumbnail">

        <a href="{{ route('category', $category->code)}}">
                <img src="{{ Storage::url($category->image) }}">
            </a>
        <div class="caption">
            <h3>{{ $category->name }}</h3>
            <p>
                {{ $category->description}}
            </p>
        </div>
    </div>
</div>
@endforeach
@endsection
