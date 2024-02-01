@extends('layouts.base')

@section('content')
    <h1 class="h3 mb-6">Books Management</h1>

    {{-- Display success message --}}
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="mb-2">
        <a href="{{ route('admin.books.create') }}" class="btn btn-primary">Add new book</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Publication Year</th>
                <th scope="col">Available</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
            <tr>
                <th scope="row">{{ $book->id }}</th>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publish_year }}</td>
                <td>{{ $book->available_quantity > 0 ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('admin.books.edit', $book) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('admin.books.destroy', $book) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No books found.</td>
            </tr>
            @endforelse

        </tbody>
    </table>

    {{ $books->links() }}
@endsection
