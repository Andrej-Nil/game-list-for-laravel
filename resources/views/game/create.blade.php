@extends('layouts.main')

@section('content')
  <div class="form-container">
    <h1 class="main-title">Создание игры</h1>

    <form class="form" action="{{route('game.store')}}" method="post">
      @csrf
      <div class="form-controls">
        <div class="form-control control">
          <label for="gameTitle" class="form-control__name control__name">Название игры</label>
          <input id="gameTitle" type="text" name="title" class="input input_bd">
        </div>

        <div class="form-control control">
          <label for="gameDescription" class="form-control__name control__name">Описание</label>
          <textarea id="gameDescription" class="input input_bd" name="description" cols="30" rows="3"></textarea>
        </div>


        <div class="form-group">
          <span class="form-control__name control__name">Дата выхода</span>
          <div class="form-group__controls">

            <div data-select class="select">
              <div data-select-top class="select__top input_bd">
                <p data-select-title class="select__title select__title_inactive">Число</p>
              </div>

              <div data-select-content="close" class="select__content">
                <ul data-select-list class="select__list">
                  @for($i = 1; $i <= 31; $i++)
                    <li class="option">
                      <input data-select-input class="option__input" id="{{"date-$i"}}"
                             data-name="{{$i}}"
                             type="radio"
                             name="release_date"
                             value="{{$i}}">
                      <label for="{{"date-$i"}}" class="option__label">{{$i}}</label>
                    </li>
                  @endfor

                </ul>
              </div>

            </div>
            <div data-select class="select">
              <div data-select-top class="select__top input_bd">
                <p data-select-title class="select__title select__title_inactive">Месяц</p>
              </div>

              <div data-select-content="close" class="select__content">
                <ul data-select-list class="select__list">
                  @foreach($months as $month)
                    <li class="option">
                      <input data-select-input class="option__input" id="{{$month}}"
                             data-name="{{$month}}"
                             type="radio"
                             name="release_month"
                             value="{{$month}}">
                      <label for="{{$month}}" class="option__label">{{$month}}</label>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>

            <div data-select class="select">
              <div data-select-top class="select__top input_bd">
                <p data-select-title class="select__title select__title_inactive">Год</p>
              </div>

              <div data-select-content="close" class="select__content">
                <ul data-select-list class="select__list">
                  @for($i = 1940; $i <= $currentYear; $i++)
                    <li class="option">
                      <input data-select-input class="option__input" id="{{"year-$i"}}"
                             data-name="{{$i}}"
                             type="radio"
                             name="release_year"
                             value="{{$i}}">
                      <label for="{{"year-$i"}}" class="option__label">{{$i}}</label>
                    </li>
                  @endfor
                </ul>
              </div>

            </div>
          </div>
        </div>
        {{--        <div class="form-control control">--}}
        {{--          <label for="gameDeveloper" class="form-control__name control__name">Разработчик</label>--}}
        {{--          <input id="gameDeveloper" name="developer" type="text" class="input input_bd">--}}
        {{--        </div>--}}

        <div class="form-control control">
          <span class="form-control__name control__name">Разработчик</span>
          <div data-select class="select">

            <div data-select-top class="select__top input_bd">
              <p data-select-title class="select__title select__title_inactive">Выбор разработчика</p>
            </div>
            <div data-select-content="close" class="select__content">

              <ul data-select-list class="select__list">

                @forelse($developers as $developer)
                  <li class="option">
                    <input data-select-input class="option__input" id="{{"developers-$developer->id"}}"
                           data-name="{{$developer->title}}"
                           type="radio"
                           name="developer_id"
                           value="{{$developer->id}}">
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
              <p data-select-title class="select__title select__title_inactive">Выбор жанра</p>
            </div>
            <div data-select-content="close" class="select__content">


              <ul data-select-list class="select__list">

                @forelse($genres as $genre)
                  <li class="option">
                    <input data-select-input class="option__input" id="{{"genre-$genre->id"}}"
                           data-name="{{$genre->title}}"
                           type="checkbox"
                           name="genre[]"
                           value="{{$genre->id}}">
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
        <button type="submit" class="form__btn btn btn_blue btn_big">Добавить</button>
      </div>

    </form>
  </div>
@endsection
