@extends('layouts/main')
@section('content')
    <div class="container">
        @foreach ($comics as $comic) 
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">{{$comic['title']}}</p>
                </div>
              </div>
        </div>
        @endforeach
    </div>
@endsection