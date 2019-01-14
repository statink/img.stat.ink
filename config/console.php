<?php
declare(strict_types=1);

$config = [
    'id' => 'imgstatink-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'cache' => include(__DIR__ . '/components/cache.php'),
        'db' => include(__DIR__ . '/components/db.php'),
        'imgS3' => include(__DIR__ . '/components/img-s3.php'),
        'log' => include(__DIR__ . '/components/log.php'),
    ],
    'params' => include(__DIR__ . '/params.php'),
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
