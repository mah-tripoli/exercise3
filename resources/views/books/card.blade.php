<div class="card">
    <img src="https://dummyimage.com/150x125/cccccc/ffffff.png&text=Book+Cover" alt="{{ $book['title'] }}" class="card-img-top">
    <div class="card-body">
        <strong>{{ $book->title }}</strong>
        <p>{{ $book->author }}</p>
        <p>{{ $book->publish_year }}</p>
        <p><span class="badge text-bg-info">{{ $book->genre?->name }}</span></p>
        @if ($book->available_quantity > 0 && !$book->userRented)
            <button class="btn btn-primary" onclick="rentBook({{ $book['id'] }})">Rent Book</button>
        @elseif ($book->userRented)
            <button class="btn btn-warning" onclick="returnBook({{ $book['id'] }})">Return Book</button>
        @endif
        
    </div>

</div>