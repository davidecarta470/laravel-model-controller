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
      <a class="nav-link {{(Route::currentRouteName() ==='firstquery')? 'active' : ''}}" href=" {{route('firstquery')}} ">Prima query</a>
    </li>
  </ul>
</header>