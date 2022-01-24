@dump(Route::currentRouteName() )
<header>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link {{(Route::currentRouteName() ==='home')? 'active' : ''}}" aria-current="page" href=" {{route('home')}} ">Home</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{(Route::currentRouteName() ==='movies')? 'active' : ''}}" href=" {{route('movies')}} ">Movie</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{(Route::currentRouteName() ==='series')? 'active' : ''}}" href=" {{route('series')}} ">Series</a>
    </li>
  </ul>
</header>