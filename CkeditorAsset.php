<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace larvata\yii2ckeditor;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class CkeditorAsset extends AssetBundle
{
    public $sourcePath = '@vendor';
    public $css = [
    ];
    public $js = [
        'ckeditor/ckeditor/ckeditor.js'
    ];
    public $depends = [
    ];
}
