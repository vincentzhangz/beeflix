@extends('index')

@section('content')

    @foreach($genres as $g)
        <div class="container mb-4">
            <h3><a class="font-weight-bold text-dark" href="{{route('genre',['id'=>$g->id])}}">{{$g->name}}</a></h3>
            <div class="row row-cols-1 row-cols-md-3">
                @foreach($g->movie as $movie)
                    <div class="col mb-4">
                        <div class="card h-auto" style="width: 18rem">
                            <img src="{{$movie->photo}}" class="card-img-top" alt="{{$movie->title}}">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">{{$movie->title}}</h5>
                                <div class="col-md-12 text-center">
                                    <a href="{{route('detail',['id'=>$movie->id])}}" class="btn btn-dark">
                                        Lihat Film
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection
