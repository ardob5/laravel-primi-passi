<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home');
})->name('home');

Route::get('/about', function () {
  return view('about');
})->name('about');

Route::get('/contact', function () {
  return view('contact');
})->name('contact');

Route::get('/pastastore', function () {

  $cards = config('pasta');
  $collection = collect($cards) -> map(function($item, $key){
  $item['id'] = $key;
  return $item;
  });

$lunga = $collection -> where('tipo', 'lunga');
$corta = $collection -> where('tipo', 'corta');
$cortissima = $collection -> where('tipo', 'cortissima');

return view('pastastore', compact('lunga', 'corta', 'cortissima'));
})->name('pastastore');

Route::get('/pastatipo/{id}', function ($id) {

  $cards = config('pasta');
  $card = $cards[$id];

  return view('pastatipo', compact('card'));
})->name('pastatipo');;
