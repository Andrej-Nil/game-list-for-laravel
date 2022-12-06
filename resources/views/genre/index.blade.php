@extends('layouts.main')

@section('content')
  <form class="form-search" action="search" method="GET">
    <input class="form-search__input input" type="text" name="search" placeholder="Поиск по названию">
    <button type="submit" class="form-search__btn">
      <i class="form-search__icon"></i>
    </button>
  </form>

  <div class="card-list">

    @foreach($genres as $genre)
    <div class="card">
      <div class="card__main">
        <a href="{{route('genre.show', $genre->id)}}" class="card__pic-link">
          <div class="card__picture">
            <img src="https://www.mirf.ru/wp-content/uploads/2019/08/Ion-Fury.jpg" alt="" class="card__img">
          </div>
        </a>
        <div class="card__content">
          <p class="card__title title-h5 title_b">
            <a href="{{route('genre.show', $genre->id)}}" class="card__link">{{$genre->title}}</a>
          </p>
          <p class="card__desc">{{$genre->description}}</p>
          <div class="card__bottom">
            <div class="card-recommend">
              <p class="card-recommend__label">Рекомендуем:</p>
              <div class="card-recommend__links">
                @foreach( $genre->gameRecommend as $game)
                  <a href="{{route('game.show', $game->id)}}" class="btn btn_blue">{{$game->title}}</a>
                  @endforeach


              </div>
            </div>
          </div>
        </div>
      </div>
      <div href="{{route('genre.show', $genre->id)}}" class="card-btn _illumination">
        <a href="" class="card-btn__link">
          <span class="card-btn__title">
             Все игры жанра {{$genre->title}}.
          </span>
          <div class="card-total">
            <p class="card-total__label">Всего игр:</p>
            <p class="card-total__value">{{$genre->games_count}}</p>
          </div>
        </a>
      </div>
    </div>
    @endforeach
  </div>
@endsection
