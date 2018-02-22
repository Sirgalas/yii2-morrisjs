<?php

namespace sirgalas\Morris;

use yii\web\AssetBundle;

class MorrisAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $css = [
        'css/morris.css',
    ];
    public $js = [
        'js/raphael.min.js',
        'js/morris.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
