@extends('layouts.app')

@section('content')
    <section class="conatiner">
        <h1> {{ $book->title }} </h1>
        <p> {{ $book->plot }} </p>
        <img src="{{ $book->cover_image }}" alt="{{ $book->title }}">
    </section>
@endsection
