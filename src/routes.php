<?php

Route::get('/test', function(){
    Weixin::getInstance()->valid();
});

Route::get('/menu', function(){
    $menu = Weixin::getInstance()->getMenu();
    var_dump($menu);
});