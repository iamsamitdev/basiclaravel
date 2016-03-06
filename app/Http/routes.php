<?php
Route::get('/','BasicController@index');
Route::get('about-us','BasicController@about_us');
Route::get('service','BasicController@service');
Route::get('portfolio','BasicController@portfolio');
Route::get('blog','BasicController@blog');
Route::get('contact','BasicController@contact');

Route::get('register','BasicController@register');
Route::post('register','BasicController@register_submit');

Route::get('customers-list','BasicController@customers_list');
Route::get('products-list','BasicController@products_list');