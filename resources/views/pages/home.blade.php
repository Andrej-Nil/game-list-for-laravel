@extends('layouts.main')

@section('content')
    <form class="form-search" action="search" method="GET">

        <input class="form-search__input input" type="text" name="search" placeholder="Поиск по названию">
        <button type="submit" class="form-search__btn">
            <i class="form-search__icon"></i>
        </button>

    </form>

    <div class="main-pic">
        <img class="main-pic__img" src="./images/dest/main-picture.jpg" alt="">
    </div>
    <div class="main-desc">
      <span class="logo-text"><span class="logo-text__word logo-text__word_red">Game</span><span
              class="logo-text__word logo-text__word_blue">List</span></span> - место где ты можешь сотовлять свой список
        игр, добовлять игры, ставить оценки, оставлять свои отзовы, мнение или даже выкладывать статьи о своих любимых
        играх! Общаться с другими пользователями о играх, а так же найти компанию для совместной игры - ведь играть вместе
        веселей! Присоединяйся!
    </div>
@endsection
