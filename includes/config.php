<?php

// fungua fungua funguaaaa 🔓

use Proxy\Config;

Config::set('app_key', 'my_super_secret_key_123');

// Hii ni URL ya proxy yako - itajijaza kiotomatiki
Config::set('proxy_url', '');

Config::set('base_url', '');

Config::set('url_mode', 2);

// Plugins kama unataka kudhibiti js, cookies, etc
Config::set('plugins', array(
    'ProxyPlugin',
    'YoutubePlugin',
    'CookiePlugin',
    'HeaderRewritePlugin',
    'StreamPlugin',
    'GoogleTranslatePlugin'
));
