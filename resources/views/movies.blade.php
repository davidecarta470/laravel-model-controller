@extends('layouts.main')
@section('content')
  <h1>
    Qui i tuoi film
  </h1>
  @foreach ($movies as $item)
      <h1>{{$item->title}}</h1>
  @endforeach
@endsection
