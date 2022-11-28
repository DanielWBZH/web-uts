@extends('layout/layout')

@section('content')
    <div class="d-flex flex-row mw-100 p-3 justify-content-center">
        <h1>{{ $data['publisher']['name'] }} <span class="text-warning"> - Publisher</span></h1>
    </div>
    <div class="d-flex flex-row mw-100 p-3 justify-content-center">
        <div class="text-dark text-center">
            <div class="h6">Address : {{ $data['publisher']['address'] }}</div>
            <div class="h6">Phone Number : {{ $data['publisher']['phone'] }}</div>
            <div class="h6">Email Address : {{ $data['publisher']['email'] }}</div>
        </div>
    </div>
    <div class="d-flex flex-wrap justify-content-center">
        @foreach ($data['publisher']->books as $book)
            <div class="card m-2" style="width: 18rem;">
                <img class="card-img-top" width="400" height="500" src={{ $book['image'] }} alt="">
                <div class="card-body">
                    <h6 class="card-title">{{ $book['title'] }}</h6>
                    <p class="card-text">{{ $book['author'] }}</p>
                    <a href="/book/{{$book['id']}}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
