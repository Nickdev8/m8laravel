@extends('layouts.app')

@section('content')
    <h1>Category: {{ $category->name }}</h1>

    <p>These are all T-shirts in the {{ $category->name }} category.</p>

    <div class="grid">
        @foreach ($category->tshirts as $tshirt)
            <x-tshirt-card :tshirt="$tshirt" />
        @endforeach
    </div>

    <p>
        <a class="button" href="{{ route('categories.index') }}">
            Back to categories
        </a>
    </p>
@endsection