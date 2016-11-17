<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-adminlte/blob/master/LICENSE
 * @link http://adminlte.yiister.ru
 */

namespace zabachok\adminlte\assets;

class Asset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/zabachok/adminlte/dist';
    public $css = [
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
    ];
    public $js = [
        'js/app.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
    ];
}
