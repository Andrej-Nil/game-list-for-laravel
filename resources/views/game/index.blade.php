@extends('layouts.main')

@section('content')
  <form class="form-search" action="search" method="GET">
    <input class="form-search__input input" type="text" name="search" placeholder="Поиск по названию">
    <button type="submit" class="form-search__btn">
      <i class="form-search__icon"></i>
    </button>
  </form>

  <div class="game-list">
    @foreach($games as $game)
      <div class="game-card">
        <div class="game-card__preview">
          <a href="{{route('game.show', $game->id)}}">
            <img class="game-card__pic" src="./images/dest/game-cover1.jpg" alt="">
          </a>
        </div>
        <a class="game-card__title" href="{{route('game.show', $game->id)}}">{{$game->title}}</a>
        <div class="game-card__info">
          <div class="game-card__row">

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


            <span class="game-card__desc">
              <span class="game-card__label">Оценили</span>
              <span class="game-card__value">{{$game->number_of_ratings}}</span>
            </span>
          </div>

          <div class="game-card__row">

            <button class="btn btn_blue">Добавить</button>


            <span class="game-card__desc">
              <span class="game-card__label">Добавили</span>
              <span class="game-card__value">{{$game->number_of_additions}}</span>
            </span>

          </div>
        </div>
      </div>
    @endforeach


  </div>

  <div class="pagination container">
    <a href="" class="pagination__item">
      <svg class="pagination__arrow pagination__arrow_rotate" xmlns="http://www.w3.org/2000/svg" width="11"
           height="20">
        <path
          d="M.38 19.01c.49.49 1.28.49 1.77 0l8.31-8.31a.996.996 0 0 0 0-1.41L2.15.98a1.25 1.25 0 0 0-1.77 0 1.25 1.25 0 0 0 0 1.77L7.62 10 .37 17.25c-.48.48-.48 1.28.01 1.76Z"/>
      </svg>
    </a>

    <a href="" class="pagination__item">1</a>
    <a href="" class="pagination__item pagination__item_active">2</a>
    <a href="" class="pagination__item">3</a>
    <a href="" class="pagination__item">4</a>
    <a href="" class="pagination__item">5</a>
    <a href="" class="pagination__item">6</a>
    <a href="" class="pagination__item">7</a>
    <a href="" class="pagination__item">8</a>

    <span class="pagination__item pagination__item_fake">...</span>

    <a href="" class="pagination__item">9</a>

    <a href="" class="pagination__item">
      <svg class="pagination__arrow" xmlns="http://www.w3.org/2000/svg" width="11" height="20">
        <path
          d="M.38 19.01c.49.49 1.28.49 1.77 0l8.31-8.31a.996.996 0 0 0 0-1.41L2.15.98a1.25 1.25 0 0 0-1.77 0 1.25 1.25 0 0 0 0 1.77L7.62 10 .37 17.25c-.48.48-.48 1.28.01 1.76Z"/>
      </svg>
    </a>
  </div>



@endsection
