@extends('layouts.app')

@section('content')
    <h1>Color: {{ $color->name }}</h1>

    <p>These are all T-shirts with the color {{ $color->name }}.</p>

    <div class="grid">
        @foreach ($color->tshirts as $tshirt)
            <x-tshirt-card :tshirt="$tshirt" />
        @endforeach
    </div>

    <p>
        <a class="button" href="{{ route('colors.index') }}">
            Back to colors
        </a>
    </p>
@endsection