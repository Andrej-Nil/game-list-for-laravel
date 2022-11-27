@extends('layouts.adminApp')

@section('admin')
  <div class="content__title title-h4 title_m">Просмотр жанра</div>

  <div class="content__controls">
    <a class="btn btn_yellow" href="{{route('admin.genre.edit', $genre->id)}}">Редостировать</a>

    <form action="{{route('admin.genre.delete', $genre->id)}}" method="post">
      @csrf
      @method('delete')
      <button type="submit" class="btn btn_red">Удалить</button>
    </form>
  </div>

  <div class="content__inner">
    <div class="content__desk">
      <p class="content__title title-h5">{{$genre->title}}</p>

      <p class="content__text">{{$genre->description}}</p>
    </div>
  </div>

@endsection
