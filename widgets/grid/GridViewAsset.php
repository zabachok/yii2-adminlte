<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-adminlte/blob/master/LICENSE
 * @link http://adminlte.yiister.ru
 */

namespace zabachok\adminlte\widgets\grid;

class GridViewAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/zabachok/adminlte/plugins/datatables';
    public $css = [
        'dataTables.bootstrap.css',
    ];
    public $js = [];
    public $depends = [
        'zabachok\adminlte\assets\Asset',
    ];
}
