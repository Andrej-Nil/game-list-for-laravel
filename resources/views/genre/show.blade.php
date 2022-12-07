@extends('layouts.main')

@section('content')

  <div class="main-card">
    <div class="main-card__cover">
      <img class="main-card__pic" src="https://www.mirf.ru/wp-content/uploads/2019/08/Ion-Fury.jpg" alt="">
    </div>

    <div class="main-card__desc">
      <h1 class="main-card__title page-title">{{$genre->title}}</h1>

      <div class="main-card__about">
        <p>{{$genre->description}}</p>
      </div>


      <div class="main-card-info">
        @if(count($genre->gameRecommend))
          <div class="card-recommend">
            <p class="card-recommend__label">Рекомендуем:</p>
            <div class="card-recommend__links">
              @foreach($genre->gameRecommend as $game)
                <a href="" class="btn btn_red">название игры</a>
              @endforeach
            </div>
          </div>
        @endif
        <div class="main-card-controls">
          @if(count($genre->gameRecommend))
            <a href="" class="btn btn_blue">Все игры жанра шутер.</a>
          @endif
        </div>
      </div>

    </div>
  </div>

  <div class="gallery">

    <h2 class="gallery__title main-title">Скрины из игры</h2>

    <div class="gallery__list">
      <div class="gallery__item">
        <img src="{{asset('images/dest/screens/screen1.jpg')}}" alt="" class="gallery__pic">
      </div>
      <div class="gallery__item">
        <img src="{{asset('images/dest/screens/screen2.jpg')}}" alt="" class="gallery__pic">
      </div>
      <div class="gallery__item">
        <img src="{{asset('images/dest/screens/screen3.png')}}" alt="" class="gallery__pic">
      </div>
      <div class="gallery__item">
        <img src="{{asset('images/dest/screens/screen4.jpg')}}" alt="" class="gallery__pic">
      </div>
      <div class="gallery__item">
        <img src="{{asset('images/dest/screens/screen5.jpg')}}" alt="" class="gallery__pic">
      </div>

    </div>


  </div>
@endsection
