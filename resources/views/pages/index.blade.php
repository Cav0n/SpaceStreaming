@extends('templates.default')


@section('content')
<div class="container my-5">

    @foreach (\App\Serie::all() as $serie)
    <h2 class="font-weight-bold">{{ $serie->name }}</h2>
    <div class="row">
        @foreach ($serie->seasons as $season)
        <div class="col-6">
            <h4>Saison {{ $season->number }}</h4>

            <ul class="list-unstyled">
                @foreach ($season->episodes as $episode)
                <li>
                    <a href='{{ route('episode.show', ['episode' => $episode]) }}' class="text-light">
                        Episode {{ $episode->number }}</a>

                    @if($episode->created_at->diffInHours(Carbon\Carbon::now(), false) > 15)
                        <span class="badge badge-light ml-2">Nouveau</span>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
    @endforeach

</div>
@endsection
