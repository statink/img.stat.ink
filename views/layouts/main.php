<?php
declare(strict_types=1);

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head(); echo "\n" ?>
  </head>
  <body>
    <?php $this->beginBody(); echo "\n" ?>
    <div class="container">
      <?= $content . "\n" ?>
    </div>
    <?php $this->endBody(); echo "\n" ?>
  </body>
</html>
<?php $this->endPage() ?>
