<?php
declare(strict_types=1);

use yii\db\Connection;

return [
    'class' => Connection::class,
    'dsn' => 'sqlite:@app/data/db/imgstatink.db',
    'username' => '',
    'password' => '',
    'charset' => 'utf8',
];
