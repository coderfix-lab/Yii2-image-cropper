<?php

namespace coderfixlab\cropper;


use yii\web\AssetBundle;
use yii\web\View;


class CropperReadyAsset extends AssetBundle
{
    public $sourcePath = '@coderfixlab/cropper/assets';
    public $jsOptions = ['position' => View::POS_READY];
    public $css = [
        'cropper.css',
    ];
    public $js = [
        'cropper.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}