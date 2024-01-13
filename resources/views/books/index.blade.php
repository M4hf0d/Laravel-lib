@extends('books.layout')
@section('content')
        <h1>Book Search</h1>

        <!-- Search Form -->
        <form method="POST" action="{{ route('books.search') }}">
    @csrf
    <div class="form-group">
        <input type="text" name="query" class="form-control" placeholder="Search for a book">
    </div>
    <button type="submit" class="btn btn-primary">Search</button>
</form>
@endsection