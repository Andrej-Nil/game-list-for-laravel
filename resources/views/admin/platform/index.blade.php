@extends('layouts.adminApp')

@section('admin')
  <div class="content__title title-h4">Игровые платформы</div>
  <div class="content__controls">
    <a class="btn btn_blue" href="{{route('admin.platform.create')}}">Добавить платформу</a>
  </div>
  <div class="content__inner">
    <div class="content__main">
      <label class="content__search form-control control">
        <span class="form-control__name control__name">Поиск</span>
        <input class="input input_bd">
      </label>

      <ul class="content__list list">

        @forelse($platforms as $platform)
          <li class="list__row _dark-bg _shift">
            <a href="{{route('admin.platform.show', $platform->id)}}" class="list__item">
              {{$platform->title}}
            </a>
          </li>
        @empty
          <li class="list__row">
            <p class="list__text">
              Ни одногой платформы не существует! Для создания жанра передийте по ссылке <a class="link
                      link_blue" href="{{route('admin.platform.create')}}">Добавить
                платформу</a>
            </p>

          </li>
        @endforelse
      </ul>
    </div>
    <div class="total">
      <h2 class="total__title">Общая информация</h2>
      <ul class="total__content list">
        <li class="list__row row">
              <span class="row__label">
                всего в списке
              </span>
          <span class="row__value">
                1 933 723
              </span>
        </li>
        <li class="list__row row">
              <span class="row__label">
                всего в списке
              </span>
          <span class="row__value">
                1 933 723
              </span>
        </li>
        <li class="list__row row">
              <span class="row__label">
                всего в списке
              </span>
          <span class="row__value">
                1 933 723
              </span>
        </li>
        <li class="list__row row">
              <span class="row__label">
                всего в списке
              </span>
          <span class="row__value">
                1 933 723
              </span>
        </li>
      </ul>
    </div>
  </div>
@endsection
