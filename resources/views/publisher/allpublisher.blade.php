@extends('layout/layout')

@section('content')
<div class="d-flex flex-wrap justify-content-center">
    @foreach ($data['allpublisher'] as $publisher)
        <div class="card m-2" style="width: 18rem;">
            <div class="p-5">
                <img class="card-img-top" src={{ $publisher['image'] }} alt="publisher Image" width="200"height="200">
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $publisher['name'] }}</h5>
                <p class="card-text">{{ $publisher['address'] }}</p>
                <a href="/publisher/{{ $publisher['id'] }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    @endforeach
</div>
@endsection


