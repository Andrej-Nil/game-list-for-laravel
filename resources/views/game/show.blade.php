@extends('layouts.main')

@section('content')
  <div class="main-card">
    <div class="main-card__cover">
      <img class="main-card__pic" src="{{asset('images/dest/game-cover1.jpg')}}" alt="">
    </div>

    <div class="main-card__desc">
      <h1 class="main-card__title page-title">{{$game->title}}</h1>

      <div class="main-card-rating">
        <span class="main-card-rating__label">Оценка играков:</span>
        <div class="rating">
          <div class="rating__line">
            @for($i=0; $i < 5; $i++)
              @if($game->rating > $i)
                <i class="rating__star rating__star_active"></i>
              @else
                <i class="rating__star"></i>
              @endif
            @endfor
          </div>
        </div>
      </div>
      <div class="main-card__about">
        {{$game->description}}
      </div>

      <div class="main-card-info">

        <div class="main-card-info__row">
          <div class="main-card-info__label">
            Дата выхода
          </div>
          <div class="main-card-info__value">
            {{"$game->release_date $game->release_month $game->release_year"}}
          </div>
        </div>

        <div class="main-card-info__row">
          <div class="main-card-info__label">
            Жанр
          </div>
          <div class="main-card-info__value">
            @foreach($genres as $genre)
              {{ $genre->title}}
            @endforeach
          </div>
        </div>

        <div class="main-card-info__row">
          <div class="main-card-info__label">
            Разработчики
          </div>
          <div class="main-card-info__value">
            {{$developer->title}}
          </div>
        </div>
      </div>

      <div class="main-card-controls">
        <a class="btn btn_blue btn_big" href="#!">Добавить в свой список</a>
        <a class="btn btn_yellow btn_big" href="{{route('game.edit', $game->id)}}">Редостировать</a>
        <form action="{{route('game.delete', $game->id)}}" method="post">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn_red btn_big">Удалить</button>
        </form>
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
