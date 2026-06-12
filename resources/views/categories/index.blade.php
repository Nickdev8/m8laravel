@extends('layouts.app')

@section('content')
    <h1>Categories</h1>

    <p>Choose a category to see all T-shirts inside it.</p>

    <div class="grid">
        @foreach ($categories as $category)
            <article class="card">
                <h2>{{ $category->name }}</h2>

                <p>{{ $category->tshirts_count }} T-shirts</p>

                <a class="button" href="{{ route('categories.show', $category) }}">
                    View category
                </a>
            </article>
        @endforeach
    </div>
@endsection