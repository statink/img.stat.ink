<?php
declare(strict_types=1);

use app\components\ImageS3;

return array_merge(
    [
        'class' => ImageS3::class,
        'enabled' => true,
        'endpoint' => 'b.sakurastorage.jp',
        'accessKey' => '',
        'secret' => '',
        'bucket' => '',
    ],
    include(__DIR__ . '/../secrets/img-s3.php')
);
