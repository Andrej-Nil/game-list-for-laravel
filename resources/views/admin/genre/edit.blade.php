@extends('layouts.adminApp')

@section('admin')
  <div class="content__title title-h4">Редоктирование жанра</div>

  <div class="content__inner">
    <form class="form" action="{{route('admin.genre.update', $genre->id)}}" method="POST">
      @csrf
      @method('patch')
      <div class="form-controls">
        <label class="form-control control">
          <span class="form-control__name control__name">Название</span>
          <input class="input input_bd" name="title" value="{{$genre->title}}">
        </label>

        <label class="form-control control">
          <span class="form-control__name control__name">Описание</span>
          <textarea class="input input_bd" rows="5" name="description">{{$genre->description}}</textarea>
        </label>


      </div>

      <div class="form__bottom">
        <button type="submit" class="form__btn btn btn_blue btn_big">Создать</button>
      </div>

    </form>
  </div>
@endsection
