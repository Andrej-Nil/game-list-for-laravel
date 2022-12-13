@extends('layouts.main')

@section('content')
  <div class="form-container">
  <h1 class="main-title">Редоктирование игры</h1>

  <form class="form" action="{{route('game.update', $game->id)}}" method="post">
    @csrf
    @method('patch')


    <div class="form-controls">

      <div class="form-control control">
        <label for="gameTitle" class="form-control__name control__name">Название игры</label>
        <input id="gameTitle" type="text" name="title" class="input input_bd" value="{{$game->title}}">
      </div>

      <div class="form-control control">
        <label for="gameDescription" class="form-control__name control__name">Описание</label>
        <textarea id="gameDescription" class="input input_bd" name="description" cols="30" rows="3">{{$game->description}}</textarea>
      </div>


      <div class="form-control control">
        <label for="gameData" class="form-control__name control__name">Дата выхода</label>
        <input id="gameData" class="input input_bd" name="date" type="date" value="{{$game->date}}">
      </div>

      <label class="form-control control">
        <label for="gameDeveloper" class="form-control__name control__name">Разработчик</label>
        <input id="gameDeveloper" name="developer" type="text" class="input" value="{{$game->developer}}">
      </label>
    </div>

    <div class="form-control control">
      <span class="form-control__name control__name">Жанр</span>
      <div data-select class="select">

        <div data-select-top class="select__top">
          <p data-select-title class="select__title select__title_inactive">Выбор жанра</p>
        </div>
        <div data-select-content="close" class="select__content">
          <ul data-select-list class="select__list">
            <li class="option">
              <input data-select-input class="option__input" id="1" data-name="action" type="radio" name="genre"
                     value="">
              <label for="1" class="option__label">action</label>
            </li>
            <li class="option">
              <input data-select-input class="option__input" id="2" data-name="action/RPG" type="radio" name="genre"
                     value="">
              <label for="2" class="option__label">action/RPG</label>
            </li>
          </ul>
        </div>

      </div>

    </div>

    <div class="form__bottom">
      <button type="submit" class="form__btn btn btn_blue btn_big">Сохранить изменения</button>
    </div>

  </form>
  </div>
@endsection
