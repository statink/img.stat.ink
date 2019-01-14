<?php
declare(strict_types=1);

$params = require __DIR__ . '/params.php';

$config = [
    'id' => 'imgstatink',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'cache' => include(__DIR__ . '/components/cache.php'),
        'db' => include(__DIR__ . '/components/db.php'),
        'errorHandler' => include(__DIR__ . '/components/error-handler.php'),
        'imgS3' => include(__DIR__ . '/components/img-s3.php'),
        'log' => include(__DIR__ . '/components/log.php'),
        'request' => include(__DIR__ . '/components/request.php'),
        'urlManager' => include(__DIR__ . '/components/url-manager.php'),
        'user' => include(__DIR__ . '/components/user.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
