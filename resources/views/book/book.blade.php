@extends('layout/layout')

@section('content')
<div class = "d-flex flex-row justify-content-center align-items-start bg-white rounded p-3 w-100 shadow">
    <div class = "w-50">
            <img src={{ $data['book']['image'] }} class="d-block mx-lg-auto img-fluid" alt="" width="450">
        </div>
        <div class="col-md-7">
            <h1 class="display-5 fw-bold lh-1 mb-3">{{ $data['book']['title'] }}</h1>
            <p class="lead">
                <span>
                    <b>Author</b>
                    {{ $data['book']['author'] }}
                </span>
                <br>
                <span>
                    <b>Publisher</b>
                    {{ $data['book']['publisher']['name']}}
                </span>
                <br>
                <span>
                    <b>Year</b>
                    {{ $data['book']['year'] }}
                </span>
                <br>
                <span>
                    <b>Synopsis</b>
                    {{ $data['book']['synopsis'] }}
                </span>
            </p>
        </div>
    </div>
@endsection
