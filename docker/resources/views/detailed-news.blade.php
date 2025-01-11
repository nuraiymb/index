@extends('layouts.standard')

@section('title'){{$news->title}}@endsection

@section('content')
    <h1>Жаңалықтар</h1>
    <div class="alert alert-info" style="margin-left: 10%; width:500px;">
        <h3>{{ $news->title}}</h3>
        <p>{{ $news->author}}</p>
        <p>{{ $news->created_at}}</p>
        <img src="{{ $news->image_url}}" alt="image text">
        <p name="message" id="message" class="form-control">
            {{$news->text}}
        </p>
        <p><small>{{$news->comments_count}} пікір </small></p>
        <a href="{{route( 'update-news-page', $news->id)}}"><button class="btn btn-primary">Жанарту</button></a>
        <form action="{{route('delete-news', $news->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
          <button type="submit" class="btn btn-danger">Жою</button>
        </form>
    </div>
@endsection



