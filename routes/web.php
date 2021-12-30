<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use Jiny\Theme\Http\Controllers\AdminTheme;
use Jiny\Theme\Http\Controllers\AdminThemeCopy;

// 관리자 URL
Route::middleware(['web','auth:sanctum', 'verified'])
->name('admin.store.')
->prefix('/admin/store')->group(function () {
    Route::resource('theme', \Jiny\Store\Http\Controllers\Admin\ThemeStoreController::class);
});

Route::get('/store/theme', function () {
    $body = file_get_contents(__DIR__."/../docs/themelist.json");
    //dd($body);
    return response($body,200)
        ->header('Content-Type','text/plain');
    //return $body;
});
