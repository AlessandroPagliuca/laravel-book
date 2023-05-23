@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($books as $book)
            <li>
                <a href="{{ route('books.show', ['id' => $book->id]) }}">{{ $book->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
