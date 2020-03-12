@extends('templates.default')


@section('content')
<div class="container text-center my-5">

    @foreach (\App\Serie::all() as $serie)
    <h2 class="font-weight-bold">{{ $serie->name }}</h2>
    <div class="row">
        @foreach ($serie->seasons as $season)
        <div class="col-6">
            <h4>Saison {{ $season->number }}</h4>

            <ul class="list-unstyled">
                @foreach ($season->episodes as $episode)
                <li><a>Episode {{ $episode->number }}</a></li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
    @endforeach

</div>
@endsection
