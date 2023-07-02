<?php

declare(strict_types=1);

namespace Yii\Assets\Js;

use Yiisoft\Assets\AssetBundle;

/**
 * Asset bundle for the filepond image transform plugin in content delivery network (CDN) mode, mainly used for publishing
 * assets.
 */
final class FilePondImageTransformPluginCdn extends AssetBundle
{
    public bool $cdn = true;
    public array $js = [
        'https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.min.js',
    ];
}
