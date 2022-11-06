@extends('layouts.main')

@section('content')
  <div class="form-container">
  <h1 class="main-title">Создание игры</h1>

  <form class="form" action="" method="GET">
    <div class="form-controls">
      <label class="form-control control">
        <span class="form-control__name control__name">Название игры</span>
        <input class="input">
      </label>

      <label class="form-control control">
        <span class="form-control__name control__name">Описание</span>
        <textarea class="input" name="" id="" cols="30" rows="3"></textarea>
      </label>

      <label class="form-control control">
        <span class="form-control__name control__name">Разработчик</span>
        <input class="input">
      </label>
    </div>

    <div class="form__bottom">
      <button type="submit" class="form__btn btn btn_blue btn_big">Добавить</button>
    </div>

  </form>
  </div>
@endsection
