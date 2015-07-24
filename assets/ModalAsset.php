<?php

namespace pendalf89\filemanager\assets;

use yii\web\AssetBundle;

class ModalAsset extends AssetBundle
{
    public $sourcePath = '@vendor/weison-tech/yii2-filemanager/assets/source';
    public $css = [
        'css/modal.css',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
