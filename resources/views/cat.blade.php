@extends('layouts.master')

@section('title', 'Все категории ')

@section('content')
<div class="row">
    @foreach($categories as $category)
    	<div class="thumbnail">
    		<div>
            <a href="{{ route('category', $category->code)}}">
                <img src="{{ Storage::url($category->image) }}">
                <h2>{{ $category->name }}</h2>
            </a>
            <p>
                {{ $category->description}}
            </p>
            </div>
        </div>
    @endforeach
</div>
@endsection
