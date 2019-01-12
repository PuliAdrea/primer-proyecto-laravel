<?php

Route::get('/','PagesController@inicio');

Route::get('fotos', 'PagesController@fotos')->name('fot');

Route::get('blog','PagesController@blog')->name('blo');

Route::get('nosotros/{nombre?}', 'PagesController@nosotros')->name('nos');
