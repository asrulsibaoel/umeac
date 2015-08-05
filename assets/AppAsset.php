<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'themes/umeac/assets/plugins/fullcalendar/fullcalendar.css',
        'themes/umeac/assets/plugins/pace/pace-theme-flash.css',
        'themes/umeac/assets/plugins/gritter/css/jquery.gritter.css',
        'themes/umeac/assets/plugins/bootstrap-datepicker/css/datepicker.css',
        'themes/umeac/assets/plugins/jquery-morris-chart/css/morris.css',
        'themes/umeac/assets/plugins/jquery-slider/css/jquery.sidr.light.css',
        'themes/umeac/assets/plugins/bootstrap-select2/select2.css',
        'themes/umeac/assets/plugins/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css',
        'themes/umeac/assets/plugins/boostrap-checkbox/css/bootstrap-checkbox.css',
        'themes/umeac/assets/plugins/boostrapv3/css/bootstrap.min.css',
        'themes/umeac/assets/plugins/boostrapv3/css/bootstrap-theme.min.css',
        'themes/umeac/assets/plugins/font-awesome/css/font-awesome.css',
        'themes/umeac/assets/css/animate.min.css',
        'themes/umeac/assets/css/style.css',
        'themes/umeac/assets/css/responsive.css',
        'themes/umeac/assets/css/custom-icon-set.css',
    ];
    public $js = [
        'themes/umeac/assets/plugins/jquery-1.8.3.min.js',
        'themes/umeac/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js',
        'themes/umeac/assets/plugins/boostrapv3/js/bootstrap.min.js',
        'themes/umeac/assets/plugins/breakpoints.js',
        'themes/umeac/assets/plugins/jquery-unveil/jquery.unveil.min.js',
        'themes/umeac/assets/plugins/pace/pace.min.js',
        'themes/umeac/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'themes/umeac/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js',
        'themes/umeac/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
        'themes/umeac/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'themes/umeac/assets/plugins/jquery-block-ui/jqueryblockui.js',
        'themes/umeac/assets/plugins/bootstrap-select2/select2.min.js',
        'themes/umeac/assets/plugins/jquery-ricksaw-chart/js/raphael-min.js',
        'themes/umeac/assets/plugins/jquery-ricksaw-chart/js/d3.v2.js',
        'themes/umeac/assets/plugins/jquery-ricksaw-chart/js/rickshaw.min.js',
        'themes/umeac/assets/plugins/jquery-morris-chart/js/morris.min.js',
        'themes/umeac/assets/plugins/jquery-easy-pie-chart/js/jquery.easypiechart.min.js',
        'themes/umeac/assets/plugins/jquery-slider/jquery.sidr.min.js',
        'themes/umeac/assets/plugins/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js',
        'themes/umeac/assets/plugins/jquery-jvectormap/js/jquery-jvectormap-us-lcc-en.js',
        'themes/umeac/assets/plugins/jquery-sparkline/jquery-sparkline.js',
        'themes/umeac/assets/plugins/jquery-flot/jquery.flot.min.js',
        'themes/umeac/assets/plugins/jquery-flot/jquery.flot.animator.min.js',
        'themes/umeac/assets/plugins/skycons/skycons.js',
        'themes/umeac/assets/js/dashboard.js',
        'themes/umeac/assets/js/core.js',
        'themes/umeac/assets/js/chat.js',
        'themes/umeac/assets/js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
