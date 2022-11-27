@extends('layouts.main')

@section('content')
  <div class="admin">
    <div class="sidebar">
      <h2 class="sidebar__title">Управление</h2>
      <ul class="list">
        <li class="list__row _dark-bg _shift">
          <a href="{{route('admin.developer.index')}}" class="list__item">
            Разработчики
          </a>
        </li>
        <li class="list__row _dark-bg _shift">
          <a href="{{route('admin.genre.index')}}" class="list__item">
            Жанры
          </a>
        </li>
      </ul>
    </div>
    <div class="content">
      @yield('admin')
    </div>
  </div>
@endsection
