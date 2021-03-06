<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace sheillendra\jeasyui\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@sheillendra/jeasyui/assets/app';
    public $css = [
        'css/site.css',
        'css/icon.css'
    ];
    public $js = [
        'js/app.js'
        //'js/app.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'sheillendra\jeasyui\assets\jEasyUIAsset'
    ];
    public $publishOptions=['forceCopy'=>YII_DEBUG];
}
