<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\User;
use yii\widgets\Menu;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

if (\Yii::$app->user->isGuest) {
    Yii::$app->getResponse()->redirect(Yii::$app->urlManager->createUrl(['site/login']));
}
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
        <?= Html::csrfMetaTags() ?>
        <!-- BEGIN PLUGIN CSS -->

        <?php $this->head() ?>
    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <?php $this->beginBody() ?>
    <body class="">
        <!-- BEGIN HEADER -->
        <div class="header navbar navbar-inverse "> 
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="navbar-inner">
                <div class="header-seperation"> 
                    <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">	
                        <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" > <div class="iconset top-menu-toggle-white"></div> </a> </li>		 
                    </ul>
                    <!-- BEGIN LOGO -->	
                    <a href="<?= Yii::$app->homeUrl ?>"><img src="<?= Yii::$app->homeUrl ?>themes/umeac/assets/img/logo.png" class="logo" alt=""  data-src="<?= Yii::$app->homeUrl ?>themes/umeac/assets/img/logo.png" data-src-retina="<?= Yii::$app->homeUrl ?>themes/umeac/assets/img/logo2x.png" width="106" height="21"/></a>
                    <!-- END LOGO -->
                </div>
                <!-- END RESPONSIVE MENU TOGGLER --> 
                <div class="header-quick-nav" >

                    <!-- BEGIN CHAT TOGGLER -->
                    <div class="pull-right"> 
                        <div class="chat-toggler">	

                            <div class="user-details"> 
                                <div class="username">
                                    Faried <span class="bold">Wahyu</span>									
                                </div>						
                            </div> 
                            <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                                <li><a href="user-profile.html"> My Account</a>
                                </li>

                                <li class="divider"></li>                
                                <li><a href="login.html"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                            </ul>
                            <div class="iconset top-down-arrow"></div>

                            <div class="profile-pic"> 
                                <img src="<?= Yii::$app->homeUrl ?>themes/umeac/assets/img/profiles/avatar_small.jpg"  alt="" data-src="<?= Yii::$app->homeUrl ?>themes/umeac/assets/img/profiles/avatar_small.jpg" data-src-retina="<?= Yii::$app->homeUrl ?>themes/umeac/assets/img/profiles/avatar_small2x.jpg" width="35" height="35" /> 
                            </div>       			
                        </div>
                        <ul class="nav quick-section ">
                            <li class="quicklinks"> 
                                <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">						
                                    <div class="iconset top-settings-dark "></div> 	
                                </a>
                                <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                                    <li><a href="user-profile.html"> My Account</a>
                                    </li>
                                    <li><a href="calender.html">My Calendar</a>
                                    </li>
                                    <li><a href="email.html"> My Inbox&nbsp;&nbsp;<span class="badge badge-important animated bounceIn">2</span></a>
                                    </li>
                                    <li class="divider"></li>                
                                    <li><a href="login.html"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                                </ul>
                            </li> 
                            <li class="quicklinks"> <span class="h-seperate"></span></li>
                        </ul>
                    </div>
                    <!-- END CHAT TOGGLER -->
                </div> 
                <!-- END TOP NAVIGATION MENU --> 
            </div>
            <!-- END TOP NAVIGATION BAR --> 
        </div>
        <!-- END HEADER --> 
        <!-- BEGIN CONTAINER -->
        <div class="page-container row"> 
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar" id="main-menu"> 
                <!-- BEGIN MINI-PROFILE -->
                <div class="user-info-wrapper">	
                    <div class="profile-wrapper">
                        <img src="<?= Yii::$app->homeUrl ?>themes/umeac/assets/img/profiles/avatar.jpg"  alt="" data-src="<?= Yii::$app->homeUrl ?>themes/umeac/assets/img/profiles/avatar.jpg" data-src-retina="<?= Yii::$app->homeUrl ?>themes/umeac/assets/img/profiles/avatar2x.jpg" width="69" height="69" />
                    </div>
                    <div class="user-info">
                        <div class="greeting">Welcome</div>
                        <div class="username">Faried <span class="semi-bold">Wahyu</span></div>
                    </div>
                </div>
                <!-- END MINI-PROFILE -->

                <!-- BEGIN SIDEBAR MENU -->	

                <ul>	
                    <li class="start active "> <a href="index.html"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span></a> </li>
                    <li class=""> <a href="javascript:;"> <i class="icon-custom-ui"></i> <span class="title">Daftar Soal</span> <span class="arrow "></span> </a>
                        <ul class="sub-menu">
                            <li > <a href="<?php echo Yii::$app->urlManager->createUrl('kuis-category') ?>"> Kategori </a> </li>
                            <li > <a href="<?php echo Yii::$app->urlManager->createUrl('kuis') ?>"> List Soal </a> </li>
                        </ul>
                    </li>
                    <li class=""> <a href="javascript:;"> <i class="icon-custom-form"></i> <span class="title">Siswa dan Kelas</span> <span class="arrow "></span> </a>
                        <ul class="sub-menu">
                            <li > <a href="<?php echo Yii::$app->urlManager->createUrl('classroom') ?>">Kelas</a> </li>
                            <li > <a href="<?php echo Yii::$app->urlManager->createUrl('user') ?>">Siswa</a> </li>
                        </ul>
                    </li>
                    <li class=""> <a href="javascript:;"> <i class="icon-custom-portlets"></i> <span class="title">Report</span> <span class="arrow "></span> </a>
                        <ul class="sub-menu">
                            <li > <a href="grids_simple.html">Simple Grids</a> </li>
                            <li > <a href="grids_draggable.html">Draggable Grids </a> </li>
                        </ul>
                    </li>

                </ul>

                <!-- END SIDEBAR MENU --> 
            </div>
            <!-- END SIDEBAR --> 
            <!-- BEGIN PAGE CONTAINER-->
            <div class="page-content"> 
                <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                <div id="portlet-config" class="modal hide">
                    <div class="modal-header">
                        <button data-dismiss="modal" class="close" type="button"></button>
                        <h3>Widget Settings</h3>
                    </div>
                    <div class="modal-body"> Widget settings form goes here </div>
                </div>
                <div class="clearfix"></div>
                <div class="content">
                    <?= $content ?>
                    <!-- END PAGE --> 
                </div>
            </div>
            <!-- BEGIN CHAT --> 

            <!-- END CHAT --> 
            <!-- END CONTAINER --> 
        </div>
        <!-- BEGIN CORE JS FRAMEWORK--> 
        <!-- END CORE TEMPLATE JS -->
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
