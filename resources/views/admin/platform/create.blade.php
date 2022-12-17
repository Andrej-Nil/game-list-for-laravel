@extends('layouts.adminApp')

@section('admin')
  <div class="content__title title-h4">Создание жанра</div>
  <div class="content__controls">
    <a class="btn btn_blue" href="{{route('admin.platform.index')}}">Назад</a>
  </div>
  <div class="content__inner">
    <form class="content__form form" action="{{route('admin.platform.store')}}" method="POST">
      @csrf
      <div class="form-controls">
        <label class="form-control control">
          <span class="form-control__name control__name">Название</span>
          <input class="input input_bd" name="title">
        </label>

        <label class="form-control control">
          <span class="form-control__name control__name">Описание</span>
          <textarea class="input input_bd" rows="5" name="description"></textarea>
        </label>


      </div>

      <div class="form__bottom">
        <button type="submit" class="form__btn btn btn_blue btn_big">Создать</button>
      </div>

    </form>
  </div>
@endsection
