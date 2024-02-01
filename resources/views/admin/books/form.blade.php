{{-- Display Validation Errors --}}
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $book->title ?? '') }}" placeholder="book title">
</div>
<div class="mb-3">
    <label for="author" class="form-label">Author</label>
    <input type="text" class="form-control" id="author" name="author" value="{{ old('author', $book->author ?? '') }}" placeholder="book author">
</div>
<div class="mb-3">
    <label for="isbn" class="form-label">ISBN</label>
    <input type="text" class="form-control" id="isbn" name="isbn" value="{{ old('isbn', $book->isbn ?? '') }}" placeholder="book isbn">
</div>
<div class="mb-3">
    <label for="publish_year" class="form-label">Publish Year</label>
    <input type="text" class="form-control" id="publish_year" name="publish_year" value="{{ old('publish_year', $book->publish_year ?? '') }}" placeholder="book publish year">
</div>
<div class="mb-3">
    <label for="genre_id" class="form-label">Genre</label>
    <select class="form-select" id="genre_id" name="genre_id">
        <option value="">Select a genre</option>
        @foreach ($genres as $genre)
        <option value="{{ $genre->id }}" {{ old('genre_id', $book->genre_id ?? '') == $genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="available_quantity" class="form-label">Available Quantity</label>
    <input type="text" class="form-control" id="available_quantity" name="available_quantity" value="{{ old('available_quantity', $book->available_quantity ?? '') }}" placeholder="available quantity">
</div>
<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description" placeholder="book description">{{ old('description', $book->description ?? '') }}</textarea>
</div>
