#Laravel wrapper of weixin php sdk

##How to install

Add the following into composer.json under your laravel root
	"startrill/weixin": "dev-master"

Run the Composer update comand

    $ composer update

Add service providers

	'providers' => array(

        'Illuminate\Foundation\Providers\ArtisanServiceProvider',
        'Illuminate\Auth\AuthServiceProvider',
        ...
        'Startrill\Weixin\WeixinServiceProvider',

    ),

Add facade alias
	'aliases' => array(

        'App'        => 'Illuminate\Support\Facades\App',
        'Artisan'    => 'Illuminate\Support\Facades\Artisan',
        ...
        'Weixin'    => 'Startrill\Weixin\Facades\Weixin',

    ),

##How to use
Publish your weixin config and modify the config according to your weixin developement account
	$ php artisan config:publish startrill/weixin

Add bellow url into weixin developement account to check valid

	http://YOURDOMAIN/wxcheck

Sample code to fetch custom menu

	http://YOURDOMAIN/wxmenu

	
	Route::get('/wxmenu', function(){
	    $menu = Weixin::getInstance()->getMenu();
	    var_dump($menu);
	});


## License

This is free software distributed under the terms of the MIT license

## Additional information

Inspired by  [wechat-php-sdk](https://github.com/dodgepudding/wechat-php-sdk)