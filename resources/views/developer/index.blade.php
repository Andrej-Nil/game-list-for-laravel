@extends('layouts.main')

@section('content')
  <form class="form-search" action="search" method="GET">
    <input class="form-search__input input" type="text" name="search" placeholder="Поиск по названию">
    <button type="submit" class="form-search__btn">
      <i class="form-search__icon"></i>
    </button>
  </form>


@endsection
