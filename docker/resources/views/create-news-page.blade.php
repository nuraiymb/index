@extends('layouts.standard')
@section('title') Жаңалықтар @endsection
@section('content')
    <h1>Жаңалықты шығару</h1>

    @if ($errors->any())
        <div class="alert alert-danger" style="margin-left:20%; width: 500px;"
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{$error}}</li>
                     @endforeach
             </ul>
        </div>
        @endif

    <div class="form-container">
        <form action="{{route('create-news-post')}}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="title" class="form-label">Тақырыбы</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="form-group mb-3">
                <label for="author" class="form-label">Авторы</label>
                <input type="text" class="form-control" name="author" id="author">
            </div>
            <div class="form-group mb-3">
                <label for="image_url" class="form-label">Суреттің сілтемесі</label>
                <input type="text" class="form-control" name="image_url" id="image_url">
            </div>
            <div class="form-group mb-3">
                <label for="image_url" class="form-label">Көрілім саны</label>
                <input type="text" class="form-control" name="views" id="image_url">
            </div>
            <div class="form-group mb-3">
                <label for="image_url" class="form-label">Пікірлер саны</label>
                <input type="text" class="form-control" name="comments_count" id="image_url">
            </div>
            <div class="form-group mb-3">
                <label for="news_text" class="form-label">Текст</label>
                <textarea class="form-control" name= "news_text" id="news_text" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Шығару</button>
        </form>
    </div>
@endsection
