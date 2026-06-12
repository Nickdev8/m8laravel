@extends('layouts.app')

@section('content')
    <article class="card">
        <img
            class="tshirt-image tshirt-image-detail"
            src="{{ asset($tshirt->image_path) }}"
            alt="{{ $tshirt->text_line_1 }}"
        >

        <h1>{{ $tshirt->text_line_1 }}</h1>

        @if ($tshirt->text_line_2)
            <p>{{ $tshirt->text_line_2 }}</p>
        @endif

        <p>
            <strong>Category:</strong>
            <a href="{{ route('categories.show', $tshirt->category) }}">
                {{ $tshirt->category->name }}
            </a>
        </p>

        <p>
            <strong>Color:</strong>
            <a href="{{ route('colors.show', $tshirt->color) }}">
                {{ $tshirt->color->name }}
            </a>
        </p>

        <a class="button" href="{{ route('tshirts.index') }}">
            Back to all T-shirts
        </a>
    </article>
@endsection
