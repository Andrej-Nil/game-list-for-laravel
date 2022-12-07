@extends('layouts.main')

@section('content')
  <form class="form-search" action="search" method="GET">
    <input class="form-search__input input" type="text" name="search" placeholder="Поиск по названию">
    <button type="submit" class="form-search__btn">
      <i class="form-search__icon"></i>
    </button>
  </form>
  <div class="card-list">

  @foreach($developers as $developer)
    <div class="card">
      <div class="card__main">
        <a href="{{route('developer.show', $developer->id)}}" class="card__pic-link">
          <div class="card__picture">
            <img src="https://images.eurogamer.net/2015/articles/1/8/2/7/7/6/7/-1462187505149.jpg/EG11/resize/1200x-1/-1462187505149.jpg" alt="" class="card__img">
          </div>
        </a>
        <div class="card__content">
          <p class="card__title title-h5 title_b">
            <a href="{{route('developer.show', $developer->id)}}" class="card__link">{{$developer->title}}</a>
          </p>
          <p class="card__desc">{{$developer->description}}</p>
          <div class="card__bottom">
            @if(count($developer->gameRecommend))
            <div class="card-recommend">

              <p class="card-recommend__label">Рекомендуем:</p>
              <div class="card-recommend__links">
                @foreach($developer->gameRecommend as $game)
                  <a href="{{route('game.show', $game->id)}}" class="btn btn_blue">{{$game->title}}</a>
                @endforeach
              </div>

            </div>
            @endif
          </div>
        </div>
      </div>
      <div href="{{route('developer.show', $developer->id)}}" class="card-btn _illumination">
        <a href="" class="card-btn__link">
          <span class="card-btn__title">
             Все игры разработчика {{$developer->title}}.
          </span>
          <div class="card-total">
            <p class="card-total__label">Всего игр:</p>
            <p class="card-total__value">{{$developer->games_count}}</p>
          </div>
        </a>
      </div>
    </div>
    @endforeach
    </div>

@endsection
