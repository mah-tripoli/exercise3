@extends('layouts.base')

@section('content')
    <h1 class="h3 mb-6">Add Book</h1>

    <form method="POST" action="{{ route('admin.books.store') }}">
        @csrf
        @include('admin.books.form')
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection