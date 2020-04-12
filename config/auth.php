<?php

return [

  

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],


    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        "customer"=>[
            "driver"=>"session",
            "provider"=>"customer"
        ],
        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
        
    ],

   

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],
        'customer' => [
            'driver' => 'eloquent',
            'model' => App\Customer::class,
        ],
       
        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],


    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];

// return array(
// 	'multi'	=> array(
// 		'customer' => array(
// 			'driver' => 'eloquent',
// 			'model'	=> \App\User::class
// 		),
// 		'user' => array(
// 			'driver' => 'database',
// 			'table' => \App\Customer::class
// 		)
// 	),

// 	'reminder' => array(

// 		'email' => 'emails.auth.reminder',

// 		'table' => 'password_reminders',

// 		'expire' => 60,

// 	),

// );