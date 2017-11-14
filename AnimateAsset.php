<?php

namespace barilee\yii2\auth\rbac;

use yii\web\AssetBundle;

/**
 * Description of AnimateAsset
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @since 2.5
 */
class AnimateAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@barilee/yii2/auth/rbac/assets';
    /**
     * @inheritdoc
     */
    public $css = [
        'animate.css',
    ];

}
