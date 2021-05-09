<?php

use Illuminate\Support\Facades\Route;

Route::get('/lessons/{lesson}','LessonController@show')->name('lessons.show');