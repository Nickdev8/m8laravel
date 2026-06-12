@extends('layouts.app')

@section('content')
    <h1>All T-shirts</h1>

    <p>This page shows all T-shirts from the database.</p>

    <div class="grid">
        @foreach ($tshirts as $tshirt)
            <x-tshirt-card :tshirt="$tshirt" />
        @endforeach
    </div>
@endsection