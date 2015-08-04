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
        <link href="<?= $this->theme->baseUrl ?>/assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?= $this->theme->baseUrl ?>/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?= $this->theme->baseUrl ?>/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $this->theme->baseUrl ?>/assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
        <!--<link rel="<?= $this->theme->baseUrl ?>/stylesheet" href="assets/plugins/jquery-ricksaw-chart/css/rickshaw.css" type="text/css" media="screen" >-->
        <link rel="<?= $this->theme->baseUrl ?>/stylesheet" href="assets/plugins/jquery-morris-chart/css/morris.css" type="text/css" media="screen">
        <link href="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?= $this->theme->baseUrl ?>/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?= $this->theme->baseUrl ?>/assets/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen"/>
        <!-- END PLUGIN CSS -->

        <!-- BEGIN CORE CSS FRAMEWsORK -->

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
                    <a href="index.html"><img src="<?= $this->theme->baseUrl ?>/assets/img/logo.png" class="logo" alt=""  data-src="<?= $this->theme->baseUrl ?>/assets/img/logo.png" data-src-retina="<?= $this->theme->baseUrl ?>/assets/img/logo2x.png" width="106" height="21"/></a>
                    <!-- END LOGO -->
                </div>
                <!-- END RESPONSIVE MENU TOGGLER --> 
                <div class="header-quick-nav" > 
                    <!-- BEGIN CHAT TOGGLER -->
                    <div class="pull-right"> 
                        <div class="chat-toggler">	
                            <a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom"  data-content='' data-toggle="dropdown" data-original-title="Notifications">
                                <div class="user-details"> 
                                    <div class="username">
                                        <span class="badge badge-important">3</span> 
                                        Faried <span class="bold">Wahyu</span>									
                                    </div>						
                                </div> 
                                <div class="iconset top-down-arrow"></div>
                            </a>
                            <div class="profile-pic"> 
                                <img src="<?= $this->theme->baseUrl ?>/assets/img/profiles/avatar_small.jpg"  alt="" data-src="<?= $this->theme->baseUrl ?>/assets/img/profiles/avatar_small.jpg" data-src-retina="<?= $this->theme->baseUrl ?>/assets/img/profiles/avatar_small2x.jpg" width="35" height="35" /> 
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
                        <img src="<?= $this->theme->baseUrl ?>/assets/img/profiles/avatar.jpg"  alt="" data-src="<?= $this->theme->baseUrl ?>/assets/img/profiles/avatar.jpg" data-src-retina="<?= $this->theme->baseUrl ?>/assets/img/profiles/avatar2x.jpg" width="69" height="69" />
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
                            <li > <a href="typography.html"> Kategori </a> </li>
                            <li > <a href="messages_notifications.html"> List Soal </a> </li>
                        </ul>
                    </li>
                    <li class=""> <a href="javascript:;"> <i class="icon-custom-form"></i> <span class="title">Sisa dan kelas</span> <span class="arrow "></span> </a>
                        <ul class="sub-menu">
                            <li > <a href="form_elements.html">Form Elements </a> </li>
                            <li > <a href="form_validations.html">Form Validations</a> </li>
                        </ul>
                    </li>
                    <li class=""> <a href="javascript:;"> <i class="icon-custom-portlets"></i> <span class="title">Report</span> <span class="arrow "></span> </a>
                        <ul class="sub-menu">
                            <li > <a href="grids_simple.html">Simple Grids</a> </li>
                            <li > <a href="grids_draggable.html">Draggable Grids </a> </li>
                        </ul>
                    </li>
                    
                </ul>
                <?php
                    echo Menu::widget([
                        'items' => [
                            ['label' => '<i class="icon-custom-portlets"></i><span class="title">Home</span>', 'url' => ['site/index']],
                            ['label' => '<i class="icon-custom-portlets"></i><span class="title">About</span>', 'url' => ['site/about']],
                            ['label' => '<i class="icon-custom-portlets"></i><span class="title">Products</span>',
                                'url' => ['product/index'],
                                'options' => ['class' => 'dropdown'],
                                'template' => '<a href="{url}">{label}</a>',
                                'items' => [
                                    ['label' => 'New Arrivals', 'url' => ['product/new']],
                                    ['label' => 'Most Popular', 'url' => ['product/popular']],
                                ]
                            ],
                        ],
//                        'linkTemplate' => '<i class="icon-custom-portlets"></i> <span class="title">{label}',
                        'submenuTemplate' => "\n<ul class='sub-menu'>\n{items}\n</ul>\n",
                    ]);
                    ?>
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
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/breakpoints.js" type="text/javascript"></script> 
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
        <!-- END CORE JS FRAMEWORK --> 

        <!-- BEGIN PAGE LEVEL JS --> 
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script> 
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>  
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<!--        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-ricksaw-chart/js/raphael-min.js"></script> 
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-ricksaw-chart/js/d3.v2.js"></script>
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-ricksaw-chart/js/rickshaw.min.js"></script>-->
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-morris-chart/js/morris.min.js"></script>
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-easy-pie-chart/js/jquery.easypiechart.min.js"></script>
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script> 	
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script> 	
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-jvectormap/js/jquery-jvectormap-us-lcc-en.js" type="text/javascript"></script> 	
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-sparkline/jquery-sparkline.js"></script>
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-flot/jquery.flot.min.js"></script>
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/jquery-flot/jquery.flot.animator.min.js"></script>
        <script src="<?= $this->theme->baseUrl ?>/assets/plugins/skycons/skycons.js"></script>
        <!-- END PAGE LEVEL PLUGINS   --> 	
        <!-- PAGE JS --> 	
        <script src="<?= $this->theme->baseUrl ?>/assets/js/dashboard.js" type="text/javascript"></script>
        <!-- BEGIN CORE TEMPLATE JS --> 
        <script src="<?= $this->theme->baseUrl ?>/assets/js/core.js" type="text/javascript"></script> 
        <script src="<?= $this->theme->baseUrl ?>/assets/js/chat.js" type="text/javascript"></script> 
        <script src="<?= $this->theme->baseUrl ?>/assets/js/demo.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS -->
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
