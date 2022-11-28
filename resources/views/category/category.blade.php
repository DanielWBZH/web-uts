@extends('layout/layout')

@section('content')
{{-- <div class = "d-flex flex-row justify-content-center align-items-start bg-secondary rounded p-5 w-200 shadow">
    <div class = "w-50">
        <h1>{{ $data['category']['name'] }} <span class="text-black">Category</span></h1>
    </div> --}}

    <div class="d-flex flex-row mw-100 p-3 justify-content-center">
        <h1>{{ $data['category']['name'] }} <span class="text-warning">Category</span></h1>
    </div>
    <div class="d-flex flex-wrap justify-content-center">
        @foreach ($data['category']->books as $book)
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
</div>
@endsection
