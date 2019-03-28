<?php


Route::get('/', function () {
    return view('welcome');
});

route::resource("json","jsoncontroller");
route::get("jsonfarmacias","jsoncontroller@farmacias");