<?php namespace Startrill\Weixin;

use \Illuminate\Support\Facades\Config as Config;
use Startrill\Weixin\Sdk\Wechat as Wechat;

class Weixin {

    private static $_wechat = null;

    public function __construct() {
    }
    
    public static function getInstance() {
        
        if(!self::$_wechat) {
            
            $options = array(
                'token' => Config::get('weixin::token'),
                'appid' => Config::get('weixin::appid'),
                'appsecret' => Config::get('weixin::appsecret'),
                'partnerid' => Config::get('weixin::partnerid'),
                'partnerkey' => Config::get('weixin::partnerkey'),
                'paysignkey' => Config::get('weixin::paysignkey'),
                'debug' => Config::get('weixin::debug'),
                'logcallback' => Config::get('weixin::logcallback')
            );

            self::$_wechat = new Wechat($options);
        } 
        
        return self::$_wechat;
    }
}
