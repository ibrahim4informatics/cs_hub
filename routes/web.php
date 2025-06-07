<?php

use App\Livewire\Pages\Documents;
use App\Livewire\Pages\Favourite;
use App\Livewire\Pages\Profile;
use App\Livewire\Pages\Signin;
use App\Livewire\Pages\Welcom;
use App\Livewire\Pages\Signup;
use Illuminate\Support\Facades\Route;

Route::get('/',Welcom::class)->name("welcome");
Route::get('/documents',Documents::class)->name("documents");
Route::get("/signup", Signup::class)->name("signup")->middleware("guest");
Route::get("/signin", Signin::class)->name("login")->middleware("guest");
Route::get("/profile", Profile::class)->name("profile")->middleware("auth");
Route::get("/favourites", Favourite::class)->name("favourite")->middleware("auth");