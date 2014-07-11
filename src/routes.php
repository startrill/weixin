<?php

Route::get('/wxcheck', function(){
    Weixin::getInstance()->valid();
});

Route::get('/wxmenu', function(){
    $menu = Weixin::getInstance()->getMenu();
    var_dump($menu);
});