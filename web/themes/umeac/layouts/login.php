<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\assets\AppAsset;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */
AppAsset::register($this);
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="<?= Yii::$app->charset ?>" />
        <title><?= Html::encode($this->title) ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN CORE CSS FRAMEWORK -->
        <!-- END CSS TEMPLATE -->
        <?php $this->head() ?>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <?php $this->beginBody() ?>
    <body class="error-body no-top">
        <div class="container">
            <div class="row login-container column-seperation">  
                <div class="col-md-5 col-md-offset-1">
                    <h2>UMEAC</h2>
                    <p>University Negeri Malang Education Asisment Center<?= Yii::$app->homeUrl ?><br><br>
                    <p><b>Di bawah naungan:</b><br>
                        <img src="<?= Yii::$app->homeUrl ?>themes/umeac/um.png"  alt="" data-src="<?= Yii::$app->homeUrl ?>themes/umeac/um.png" data-src-retina="<?= Yii::$app->homeUrl ?>themes/umeac/um.png" style="width: 90%;" />
                </div>
                <div class="col-md-5 "> <br>
                    <?= $content ?>
                </div>


            </div>
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN CORE JS FRAMEWORK-->
        <!-- BEGIN CORE TEMPLATE JS -->
        <!-- END CORE TEMPLATE JS -->
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
