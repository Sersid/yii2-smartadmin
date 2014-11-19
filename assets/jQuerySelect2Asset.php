<?php
namespace sersid\smartadmin\assets;

use yii\web\AssetBundle;

class jQuerySelect2Asset extends AssetBundle
{
    public $sourcePath = '@bower/select2';
    public $js = [
        'select2.min.js',
        'select2_locale_ru.js',
    ];
}