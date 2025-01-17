@extends('layouts.standard')

@section('title'){{$news->title}}@endsection

@section('content')
    <h1>Жаңалық</h1>
    <div class="form-container">
        <form action="{{route('update-news-post', $news->id)}}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="title" class="form-label">Тақырыбы</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$news->title}}">
            </div>
            <div class="form-group mb-3">
                <label for="author" class="form-label">Авторы</label>
                <input type="text" value="{{$news->author}}" class="form-control" name="author" id="author">
            </div>
            <div class="form-group mb-3">
                <label for="image_url" class="form-label">Суреттің сілтемесі</label>
                <input type="text" class="form-control" value="{{$news->image_url}}" name="image_url" id="image_url">
            </div>

            <div class="form-group mb-3">
                <label for="image_url" class="form-label">Көрілім саны</label>
                <input type="text" class="form-control" value="{{$news->views}}" name="views" id="image_url">
            </div>
            <div class="form-group mb-3">
                <label for="comments_count" class="form-label">Пікірлер саны</label>
                <input type="number" class="form-control" value="{{$news->comments_count}}" name="comments_count" id="comments_count">
            </div>
            <div class="form-group mb-3">
                <label for="news_text" class="form-label">Текст</label>
                <textarea class="form-control" name= "news_text" id="news_text" rows="3">{{$news->text}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Жаңарту</button>
        </form>
    </div>
@endsection



