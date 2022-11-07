@extends('layouts.main')

@section('content')
  <div class="form-container">
  <h1 class="main-title">Редоктирование игры</h1>

  <form class="form" action="{{route('game.update', $game->id)}}" method="post">
    @csrf
    @method('patch')
    <div class="form-controls">
      <label class="form-control control">
        <span class="form-control__name control__name">Название игры</span>
        <input name="title" class="input" value="{{$game->title}}">
      </label>

      <label class="form-control control">
        <span class="form-control__name control__name">Описание</span>
        <textarea class="input" name="description"  cols="30" rows="3">{{$game->description}}</textarea>
      </label>

      <label class="form-control control">
        <span class="form-control__name control__name">Разработчик</span>
        <input name="developer" class="input" value="{{$game->developer}}">
      </label>
    </div>

    <div class="form__bottom">
      <button type="submit" class="form__btn btn btn_blue btn_big">Сохранить изменения</button>
    </div>

  </form>
  </div>
@endsection
