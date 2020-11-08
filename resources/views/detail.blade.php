@extends('index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{$episodes[0]->movie->photo}}" alt="" height="400">
            </div>

            <div class="col d-flex flex-column">
                <div>
                    <h2 class="font-weight-bold">{{$episodes[0]->movie->title}}</h2>
                </div>
                <div>
                    @for($i=0;$i < $episodes[0]->movie->rating;$i++)
                        ⭐
                    @endfor
                </div>
                <div class="text-break">
                    {{$episodes[0]->movie->description}}
                </div>
                <div>
                    Kategori: <a
                        href="{{route('genre',["id"=>$episodes[0]->movie->genre->id])}}">{{$episodes[0]->movie->genre->name}}</a>
                </div>
            </div>

            <div class="col">
                <h5 class="font-weight-bold">EPISODE</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Episode</th>
                        <th scope="col">Judul</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($episodes as $episode)
                        <tr>
                            <th scope="row">{{$episode->episode}}</th>
                            <td>{{$episode->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="col-md-12 text-center">
                    {{ $episodes->links() }}
                </div>
            </div>
        </div>

    </div>
@endsection
