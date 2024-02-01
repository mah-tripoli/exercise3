<div class="card">
    <img src="https://dummyimage.com/150x125/cccccc/ffffff.png&text=Book+Cover" alt="{{ $book['title'] }}" class="card-img-top">
    <div class="card-body">
        <strong>{{ $book['title'] }}</strong>
        <p>{{ $book['author'] }}</p>
        <p>{{ $book['publication_year'] }}</p>

        @if ($book['available'])
            <button class="btn btn-primary" onclick="rentBook({{ $book['id'] }})">Rent Book</button>
        @else
            <button class="btn btn-warning" onclick="returnBook({{ $book['id'] }})">Return Book</button>
        @endif
        
    </div>

</div>