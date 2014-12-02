<?php
namespace sersid\smartadmin;

use yii\web\AssetBundle;
class Asset extends AssetBundle
{
    public $css = [
        'css/smartadmin-production-plugins.min.css',
        'css/smartadmin-production.min.css',
        'css/smartadmin-skins.min.css',
        'css/smartadmin-rtl.min.css',
        'http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700',
    ];

    public $js = [
        'js/app.config.js',
        'js/app.min.js',
    ];

    public $depends = [
        'sersid\smartadmin\assets\PaceAsset',
        'yii\web\YiiAsset',
        'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'sersid\fontawesome\Asset',
        'sersid\smartadmin\assets\jQueryUITouchPunchAsset',
        'sersid\smartadmin\assets\SmartNotificationAsset',
        'sersid\smartadmin\assets\JarvisWidgetAsset',
        'sersid\smartadmin\assets\jQueryEasyPieChartAsset',
        'sersid\smartadmin\assets\jQuerySparklineAsset',
        'sersid\smartadmin\assets\jQueryMaskedinputAsset',
        'sersid\smartadmin\assets\jQuerySelect2Asset',
        'sersid\smartadmin\assets\jQueryBootstrapSliderAsset',
        'sersid\smartadmin\assets\jQueryMbBrowserAsset',
        'sersid\smartadmin\assets\FastclickAsset',
    ];
}