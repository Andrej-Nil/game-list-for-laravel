@extends('layouts.adminApp')

@section('admin')
  <div class="content__title title-h4 title_m">Просмотр разработчика</div>

  <div class="content__controls">
    <a class="btn btn_blue" href="{{route('admin.developer.index', $developer->id)}}">Разработчики</a>
    <a class="btn btn_yellow" href="{{route('admin.developer.edit', $developer->id)}}">Редостировать</a>

    <form action="{{route('admin.developer.delete', $developer->id)}}" method="post">
      @csrf
      @method('delete')
      <button type="submit" class="btn btn_red">Удалить</button>
    </form>
  </div>

  <div class="content__inner">
    <div class="content__desk">
      <p class="content__title title-h5">{{$developer->title}}</p>

      <p class="content__text">{{$developer->description}}</p>
    </div>
  </div>

@endsection
