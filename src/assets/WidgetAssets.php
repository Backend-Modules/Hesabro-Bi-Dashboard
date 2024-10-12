<?php

namespace sadi01\bidashboard\assets;

use yii\web\AssetBundle;

class WidgetAssets extends AssetBundle
{
    public $sourcePath = '@sadi01/bidashboard/assets';

    public $css = [
    ];

    public $js = [
        'bidashboard/dist/js/pjax-utility.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'miloschuman\highcharts\HighchartsAsset'
    ];
}