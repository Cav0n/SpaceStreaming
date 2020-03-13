@extends('templates.default')


@section('content')
<div class="container text-center my-5">

    <div class="mb-5">
        <h2>{{ $episode->season->serie->name }}</h2>
        <h4>

            Saison {{ $episode->season->number }} Episode {{ $episode->number }}

        </h4>

        <div class="d-flex justify-content-center">
            @if ($episode->previousEpisode)
                <a href="{{ route('episode.show', ['episode' => $episode->previousEpisode]) }}" class="text-light">
                    Episode précedent</a>
            @endif

            @if ($episode->previousEpisode && $episode->nextEpisode)
                <p class="mx-3"> - </p>
            @endif

            @if ($episode->nextEpisode)
                <a href="{{ route('episode.show', ['episode' => $episode->nextEpisode]) }}" class="text-light">
                    Episode suivant</a>
            @endif
        </div>

    </div>

    <video
    class="w-100"
    src="{{ asset($episode->video->path) }}"
    @if ("mkv" == substr($episode->video->path, -3))
        type='video/x-matroska; codecs="theora, vorbis"'
    @endif
    autoplay
    controls
    onerror="failed(event)" ></video>
</div>

<script>
</script>

@endsection
