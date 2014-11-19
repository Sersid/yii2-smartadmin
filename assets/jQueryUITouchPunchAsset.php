<?php
namespace sersid\smartadmin\assets;

use yii\web\AssetBundle;

class jQueryUITouchPunchAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-ui-touch-punch';
    public $js = [
        'jquery.ui.touch-punch.min.js',
    ];
}