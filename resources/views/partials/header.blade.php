@dump(Route::currentRouteName() )
<header>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link {{(Route::currentRouteName() ==='home')? 'active' : ''}}" aria-current="page" href=" {{route('home')}} ">Home</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{(Route::currentRouteName() ==='about')? 'active' : ''}}" href=" {{route('about')}} ">About</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{(Route::currentRouteName() ==='contacts')? 'active' : ''}}" href=" {{route('contacts')}} ">Contacts</a>
    </li>
  </ul>
</header>