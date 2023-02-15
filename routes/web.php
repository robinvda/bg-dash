<?php

Route::group([
    'prefix' => 'bg-dash',
    'namespace' => 'BgDash\Http\Controllers'
], function() {

    Route::get('/', fn() => view('bg-dash::index'));

});
