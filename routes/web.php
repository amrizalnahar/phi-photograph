<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home', [
        "title" => "Home"
        ]);
});

Route::get('/admin-fe/dashboard', function () {
    return view('admin-fe.dashboard', [
        "title" => "Dashboard"
        ]);
});

Route::get('/admin-fe/package', function () {
    return view('admin-fe.package.index', [
        "title" => "Package"
        ]);
});

Route::get('/admin-fe/package/create', function () {
    return view('admin-fe.package.create', [
        "title" => "Create Package"
        ]);
});

Route::get('/admin-fe/package/show', function () {
    return view('admin-fe.package.show', [
        "title" => "Show Package"
        ]);
});

Route::get('/admin-fe/package/edit', function () {
    return view('admin-fe.package.edit', [
        "title" => "Edit Package"
        ]);
});


