@extends('index')

@section('content')
    <div class="container mb-4">
        <h3><a class="font-weight-bold text-dark" href="{{route('genre',['id'=>$genres->id])}}">{{$genres->name}}</a>
        </h3>
        <div class="row row-cols-1 row-cols-md-3">
            @foreach($genres->movie as $m)
                <div class="col mb-4">
                    <div class="card h-auto" style="width: 18rem">
                        <img src="{{$m->photo}}" class="card-img-top" alt="{{$m->title}}">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">{{$m->title}}</h5>
                            <div class="col-md-12 text-center">
                                <a href="{{route('detail',['id'=>$m->id])}}" class="btn btn-dark">
                                    Lihat Film
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
