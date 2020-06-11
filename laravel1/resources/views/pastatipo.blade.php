@extends('layouts.mainLayout')

@section('content')
  <img class="pasta-img" src="{{ $card['src']}}" alt="">
  <p> {{ $card['descrizione'] }} </p>
@endsection
