@extends('templates.default')


@section('content')
<video src="{{ asset('videos/SDS1E1.mkv') }}" type='video/x-matroska; codecs="theora, vorbis"' autoplay controls onerror="failed(event)" ></video>
@endsection
