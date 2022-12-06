<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}">
    <title>Game List</title>
</head>

<body>

<header class="header">
    <div class="header__inner container">

        <div class="logo">
            <a href="{{route('home.index')}}" class="logo__link">
          <span class="logo__content">
            <span class="logo__bg">

              <span class="logo__text">
                <span class="logo__word logo__word_first">Game</span>
                <span class="logo__button">
                  <i class="logo__icon"></i>
                  <span class="logo__word logo__word_second">List</span>
                </span>

              </span>

            </span>
          </span>


                <i class="logo__icon"></i>
            </a>
        </div>

        <nav class="navigation">
            <div class="navigation__item _illumination">
                <a class="navigation__link" href="{{route('game.index')}}">Список игр</a>
            </div>

          <div class="navigation__item _illumination">
            <a class="navigation__link" href="{{route('genre.index')}}">Жанры</a>
          </div>

          <div class="navigation__item _illumination">
            <a class="navigation__link" href="{{route('developer.index')}}">Разработчики</a>
          </div>

            <div class="navigation__item _illumination">
                <a class="navigation__link" href="about.html">О проекте</a>
            </div>

        </nav>


        <div id="userMenu" class="user-menu">
            <div data-user-menu-btn class="user-menu__btn ">
                <i class="user-menu__avatar"></i>
                <span class="user-menu__name">Вход</span>
            </div>
            <ul data-user-menu-list="close" class="user-menu__list user-menu__list_close">
                <li class="user-menu__item _illumination">
                    <a href="{{route('game.create')}}" class="user-menu__link">Добавить игру</a>
                </li>
              <li class="user-menu__item _illumination">
                    <a href="{{route('admin.index')}}" class="user-menu__link">Управление</a>
                </li>
                <li class="user-menu__item _illumination">
                    <a href="registration.html" class="user-menu__link">Регистрация</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<main class="main container">
@yield('content')
</main>
<script src="{{asset('js/main.min.js')}}"></script>
</body>

</html>
