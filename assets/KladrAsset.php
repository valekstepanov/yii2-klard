<?php

namespace valekstepanov\yii2kladr\assets;

use yii\web\AssetBundle;

/**
 * Class KladrAsset
 *
 * @package common\components\kladr\assets
 */
class KladrAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.kladr';
    public $css = [
        'jquery.kladr.min.css'
    ];
    public $js = [
        'jquery.kladr.min.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
