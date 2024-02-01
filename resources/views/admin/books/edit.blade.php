@extends('layouts.base')

@section('content')
    <h1 class="h3 mb-6">Edit Book: {{ $book->title }}</h1>

    <form method="POST" action="{{ route('admin.books.update', $book) }}') }}">
        @csrf
        @method('PUT')
        @include('admin.books.form')
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection