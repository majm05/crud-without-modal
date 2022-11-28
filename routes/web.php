<?php

use App\Http\Livewire\User\UserLive;
use Illuminate\Support\Facades\Route;

Route::get('users', UserLive::class)->name('users');


Route::get('/', function () {
    return view('welcome');
});
