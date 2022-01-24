@extends('layouts.main')
@section('content')
  <h3>
    Qui il risultato Movies::where('id',2)->first();
  </h3>
  <h3>
    {{$resultQueryTwo->title}}

  </h3>
@endsection
