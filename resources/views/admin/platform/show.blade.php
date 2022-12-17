@extends('layouts.adminApp')

@section('admin')
  <div class="content__title title-h4 title_m">Просмотр платформы</div>

  <div class="content__controls">
    <a class="btn btn_blue" href="{{route('admin.platform.index')}}">Платформы</a>
    <a class="btn btn_yellow" href="{{route('admin.platform.edit', $platform->id)}}">Редостировать</a>

    <form action="{{route('admin.platform.delete', $platform->id)}}" method="post">
      @csrf
      @method('delete')
      <button type="submit" class="btn btn_red">Удалить</button>
    </form>
  </div>

  <div class="content__inner">
    <div class="content__desk">
      <p class="content__title title-h5">{{$platform->title}}</p>

      <p class="content__text">{{$platform->description}}</p>
    </div>
  </div>

@endsection
