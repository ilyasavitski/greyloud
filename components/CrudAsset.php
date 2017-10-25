<?php

namespace app\components;

use yii\web\AssetBundle;

class CrudAsset extends AssetBundle {

    public $sourcePath = '@app/media';
    public $css = [
        'greyloud.css'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'kartik\grid\GridViewAsset',
    ];

    public function init() {

        $this->js = YII_DEBUG ? [
            'ModalRemote.js',
            'greyloud.js',
                ] : [
            'ModalRemote.min.js',
            'greyloud.min.js',
        ];

        parent::init();
    }

}
