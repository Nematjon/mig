<?php

return [
    'adminEmail' => 'admin@example.com',
	"linkTags"=>[
			//FAVICONS
		[ "rel"=>"shortcut icon", "href"=>"smartAdmin/img/favicon/favicon.ico", "type"=>"image/x-icon" ],
		[ "rel"=>"icon", "href"=>"smartAdmin/img/favicon/favicon.ico", "type"=>"image/x-icon" ],
			//GOOGLE FONT
		[ "rel"=>"stylesheet", "href"=>"http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700" ],
			//Specifying a Webpage Icon for Web Clip
		[ "rel"=>"apple-touch-icon", "href"=>"smartAdmin/img/splash/sptouch-icon-iphone.png" ],
		[ "rel"=>"apple-touch-icon", "sizes"=>"76x76", "href"=>"smartAdmin/img/splash/touch-icon-ipad.png" ],
		[ "rel"=>"apple-touch-icon", "sizes"=>"120x120", "href"=>"smartAdmin/img/splash/touch-icon-iphone-retina.png" ],
		[ "rel"=>"apple-touch-icon", "sizes"=>"152x152", "href"=>"smartAdmin/img/splash/touch-icon-ipad-retina.png" ],
			//Startup image for web apps
		[ "rel"=>"apple-touch-startup-image", "href"=>"smartAdmin/img/splash/ipad-landscape.png", "media"=>"screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" ],
		[ "rel"=>"apple-touch-startup-image", "href"=>"smartAdmin/img/splash/ipad-portrait.png", "media"=>"screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" ],
		[ "rel"=>"apple-touch-startup-image", "href"=>"smartAdmin/img/splash/iphone.png", "media"=>"screen and (max-device-width: 320px)" ],		 
	],
	"metaTags"=>[
		[ "name"=>"apple-mobile-web-app-capable", "content"=>"yes" ],
		[ "name"=>"apple-mobile-web-app-status-bar-style","content"=>"black" ],
		[ "name"=>"author", "content"=>"" ],
		[ "name"=>"description", "content"=>"" ],
		[ "charset"=>"UTF-8" ],	
		[ "name"=>"viewport", "content"=>"width=device-width, initial-scale=1" ],
		[ "name"=>"viewport", "content"=>"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" ]
	],
    'menu'=>[
    	[
    		'label'=>'Поиск', 
        	'url' => 'agent/index',
        	'icon'=>'fa-search',
        	'items'=>[
        		['label'=>'Перелеты','url'=>'agent/index'  ],
        		['label'=>'ЖД билеты','url'=>'agent/index' ],
        	]
        ],[
        	'label' => 'Заказы', 
        	'url' => 'agent/index',
        	'icon' => 'fa-shopping-cart',
        	'items'=>[
        		['label'=>'Перелеты','url'=>'#'  ],
        		['label'=>'ЖД билеты','url'=>'#' ],

        	]
        ],[
        	'label' => 'Тикет Робот', 
        	'url' => ['agent/ticket'],
        	'options'=>['class'=>''],
        	'icon' => 'fa-ticket',
        ],[
        	'label' => 'Биллинг', 
        	'url' => ['agent/index'],
        	'options'=>['class'=>''],
        	'icon' => 'fa-money',
        	'items'=>[
     			['label'=>'Депозиты','url'=>'#'],
     			['label'=>'Депозиты субагентов','url'=>'#'],
     		]
        ],[
        	'label' => 'Счета', 
        	'url' => ['agent/index'],
        	'options'=>['class'=>''],
        	'icon' => 'fa-credit-card',
        ],[
        	'label' => 'Ведомости', 
        	'url' => ['agent/index'],
        	'options'=>['class'=>''],
        	'icon' => 'fa-bar-chart-o',
        ],[
        	'label' => 'Система запросов', 
        	'url' => ['agent/index'],
        	'options'=>['class'=>''],
        	'icon' => 'fa-money',
        	'items'=>[
     			['label'=>'Входящие','url'=>'#'],
     			['label'=>'Исходящие','url'=>'#'],
     			['label'=>'Рассылка','url'=>'#'],
     		]
        ],[
        	'label' => 'Веб-модуль', 
        	'url' => ['agent/index'],
        	'options'=>['class'=>''],
        	'icon' => 'fa-money',
        	'items'=>[
     			['label'=>'XML API','url'=>'#'],
     			['label'=>'Frame','url'=>'#'],
     		]
        ],
    ],
    'menuReport'=>[
    	[ 'label'=>'Отчеты','url'=>'#' ],
    	[ 'label'=>'Общий' ,'url'=>'#'],
    	[ 'label'=>'По продажам' ,'url'=>'#'],
    	[ 'label'=>'Графический' ,'url'=>'#'],
    	[ 'label'=>'Аналитический' ,'url'=>'#'],
    	[ 'label'=>'Страховки' ,'url'=>'#'],
    	[ 'label'=>'AIR лог' ,'url'=>'#'],
    	[ 'label'=>'Купоны' ,'url'=>'#'],
    	[ 'label'=>'По продажам ЖД' ,'url'=>'#']	 
    ]
];
 