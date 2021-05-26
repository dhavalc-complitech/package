<?php
use Illuminate\Http\Request;

/* Route::get('contact', 'Dhaval\Contact\Http\Controllers\ContactController@index')->name('contact');
Route::post('contact', 'Dhaval\Contact\Http\Controllers\ContactController@send'); */

Route::group(['namespace'=>'Dhaval\Contact\Http\Controllers'],function(){
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');
});
