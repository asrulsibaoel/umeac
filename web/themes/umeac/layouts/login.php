<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
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
        <link href="<?= $this->theme->baseUrl ?>/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?= $this->theme->baseUrl ?>/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $this->theme->baseUrl ?>/assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $this->theme->baseUrl ?>/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $this->theme->baseUrl ?>/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <!-- END CORE CSS FRAMEWORK -->
        <!-- BEGIN CSS TEMPLATE -->
        <link href="<?= $this->theme->baseUrl ?>/assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $this->theme->baseUrl ?>/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $this->theme->baseUrl ?>/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
        <!-- END CSS TEMPLATE -->
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="error-body no-top">
        <div class="container">
            <div class="row login-container column-seperation">  
                <div class="col-md-5 col-md-offset-1">
                    <h2>UMEAC</h2>
                    <p>University Negeri Malang Education Asisment Center<br><br>
                    <p><b>Di bawah naungan:</b><br>
                        <img src="<?= $this->theme->baseUrl ?>/um.png"  alt="" data-src="<?= $this->theme->baseUrl ?>/um.png" data-src-retina="<?= $this->theme->baseUrl ?>/um.png" style="width: 90%;" />
                </div>
                <div class="col-md-5 "> <br>
                    <?= $content?>
                </div>


            </div>
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN CORE JS FRAMEWORK-->
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?= $this->theme->baseUrl ?>/assets/js/login.js" type="text/javascript"></script>
        <!-- BEGIN CORE TEMPLATE JS -->
        <!-- END CORE TEMPLATE JS -->
    </body>
</html>