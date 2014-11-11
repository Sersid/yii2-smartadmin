<?php

namespace sersid\smartadmin;
use yii\web\AssetBundle;

class Asset extends AssetBundle
{
	public $css = [
		'css/bootstrap.min.css',
        'css/font-awesome.min.css',
		'css/smartadmin-production.min.css',
		'css/smartadmin-skins.min.css',
		'css/demo.min.css',
        'css/style.css',
		'http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700',
    ];
	public $js = [
		'js/plugin/pace/pace.min.js',
		'js/libs/jquery-ui-1.10.3.min.js', 
		'js/app.config.js', //IMPORTANT: APP CONFIG
		'js/plugin/jquery-touch/jquery.ui.touch-punch.min.js', //JS TOUCH : include this plugin for mobile drag / drop touch events
		'js/bootstrap/bootstrap.min.js', //BOOTSTRAP JS
		'js/notification/SmartNotification.min.js', //CUSTOM NOTIFICATION
		'js/smartwidgets/jarvis.widget.min.js', //JARVIS WIDGETS
		'js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js', //EASY PIE CHARTS
		'js/plugin/sparkline/jquery.sparkline.min.js', //SPARKLINES
		//'js/plugin/jquery-validate/jquery.validate.min.js', //JQUERY VALIDATE
		'js/plugin/masked-input/jquery.maskedinput.min.js', //JQUERY MASKED INPUT
		'js/plugin/select2/select2.min.js', //JQUERY SELECT2 INPUT
		'js/plugin/bootstrap-slider/bootstrap-slider.min.js', //JQUERY UI + Bootstrap Slider
		'js/plugin/msie-fix/jquery.mb.browser.min.js', //browser msie issue fix
		'js/plugin/fastclick/fastclick.min.js', //FastClick: For mobile devices
		//'js/demo.min.js', //Demo purpose only
		'js/app.min.js', //MAIN APP JS FILE
		'js/speech/voicecommand.min.js', //Voice command : plugin
		//Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip
		'js/plugin/flot/jquery.flot.cust.min.js',
		'js/plugin/flot/jquery.flot.resize.min.js',
		'js/plugin/flot/jquery.flot.tooltip.min.js',
		//Vector Maps Plugin: Vectormap engine, Vectormap language
		'js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js',
		'js/plugin/vectormap/jquery-jvectormap-world-mill-en.js',
		//Full Calendar
		'js/plugin/fullcalendar/jquery.fullcalendar.min.js',
		'js/init.js',
	];
}