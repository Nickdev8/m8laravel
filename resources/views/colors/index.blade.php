@extends('layouts.app')

@section('content')
    <h1>Colors</h1>

    <p>Choose a color to see all T-shirts with that color.</p>

    <div class="grid">
        @foreach ($colors as $color)
            <article class="card">
                <h2>{{ $color->name }}</h2>

                <p>{{ $color->tshirts_count }} T-shirts</p>

                <a class="button" href="{{ route('colors.show', $color) }}">
                    View color
                </a>
            </article>
        @endforeach
    </div>
@endsection