<?php

declare(strict_types=1);

namespace Yii\Assets\Js;

use Yiisoft\Assets\AssetBundle;

/**
 * Asset bundle for the filepond image exif orientation plugin in content delivery network (CDN) mode, mainly used for
 * publishing assets.
 */
final class FilePondImageExifOrientationPluginCdn extends AssetBundle
{
    public bool $cdn = true;
    public array $js = [
        'https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js',
    ];
}
