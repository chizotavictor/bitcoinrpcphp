<?php

return [

    'default' => [
        'scheme'        => 'http',
        'host'          => 'localhost',
        'port'          => 8332,
        'user'          => '', //'(rpcuser from bitcoin.conf)',     // required
        'password'      => '', //'(rpcpassword from bitcoin.conf)', // required
        'ca'            => null,
        'preserve_case' => false,
        'timeout'       => false,
        'timeout' => false,

        'zeromq' => [
            'host' => 'localhost',
            'port' => 28332,
        ],
    ],

    'litecoin' => [
        'scheme'        => 'http',
        'host'          => 'localhost',
        'port'          => 9332,
        'user'          => '',
        'password'      => '',
        'ca'            => null,
        'preserve_case' => false,
        'timeout'       => false,
        'zeromq'        => null,
    ],
];
