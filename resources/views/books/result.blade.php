@extends('books.layout')
@section('content')
<script>
        $(document).ready(function() {
            $(".book-details").hide();
            $(".book-title").click(function() {
                $(this).next(".book-details").slideToggle();
            });
        });
    </script>
    <h1>Search Results</h1>

    @if(isset($books))
        @if($books->isEmpty())
            <p>No books found.</p>
        @else
            <div class="row">
                @foreach($books as $book)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="book-title">
                                    <h5 class="card-title">{{ $book->title }}</h5>
                                </div>
                                <div class="book-details">
                                    <p class="card-text">{{ $book->author }}</p>
                                    <p class="card-text">{{ $book->pubYear }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    @endif
@endsection