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
          <textarea id="gameDescription" class="input input_bd" name="description" cols="30"
                    rows="3">{{$game->description}}</textarea>
        </div>


        <div class="form-control control">
          <label for="gameData" class="form-control__name control__name">Дата выхода</label>
          <input id="gameData" class="input input_bd" name="date" type="date" value="{{$game->date}}">
        </div>

        <div class="form-control control">
          <span class="form-control__name control__name">Разработчик</span>
          <div data-select class="select">

            <div data-select-top class="select__top input_bd">
              <p data-select-title class="select__title">
                @foreach($developers as $developer)
                @if($developer->id === $game->developer_id)
                {{$developer->title}}
                @endif
                @endforeach
              </p>
            </div>
            <div data-select-content="close" class="select__content">

              <ul data-select-list class="select__list">

                @forelse($developers as $developer)
                  <li class="option">
                    <input data-select-input class="option__input" id="{{"developers-$developer->id"}}"
                           data-name="{{$developer->title}}"
                           type="radio"
                           name="developer_id"
                           value="{{$developer->id}}"
                    @if($developer->id === $game->developer_id)
                      checked
                      @endif
                    >
                    <label for="{{"developers-$developer->id"}}" class="option__label">{{$developer->title}}</label>
                  </li>
                @empty

                @endforelse
              </ul>
            </div>

          </div>

        </div>

        <div class="form-control control">
          <span class="form-control__name control__name">Жанр</span>
          <div data-select="multiselect" class="select">

            <div data-select-top class="select__top input_bd">
              <p data-select-title class="select__title">Выборно {{count($gameGenres)}}</p>
            </div>
            <div data-select-content="close" class="select__content">


              <ul data-select-list class="select__list">

                @forelse($genres as $genre)
                  <li class="option">
                    <input data-select-input class="option__input" id="{{"genre-$genre->id"}}"
                           data-name="{{$genre->title}}"
                           type="checkbox"
                           name="genre[]"
                           value="{{$genre->id}}"
                    @foreach($gameGenres as $gameGenre)
                      @if($gameGenre->id === $genre->id)
                        checked
                        @endif
                      @endforeach
                    >

                    <label for="{{"genre-$genre->id"}}" class="option__label">{{$genre->title}}</label>
                  </li>
                @empty

                @endforelse
              </ul>
            </div>

          </div>

        </div>


      </div>


      <div class="form__bottom">
        <button type="submit" class="form__btn btn btn_blue btn_big">Сохранить изменения</button>
      </div>

    </form>
  </div>
@endsection
