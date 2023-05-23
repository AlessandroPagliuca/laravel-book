@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>home page</h1>

        <a href="{{ route('books.index') }}">lista libri</a>
    </section>
@endsection
