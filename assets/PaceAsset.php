<?php
namespace sersid\smartadmin\assets;

use yii\web\AssetBundle;

class PaceAsset extends AssetBundle
{
    public $sourcePath = '@bower/pace';
    public $js = [
        'pace.min.js'
    ];
}