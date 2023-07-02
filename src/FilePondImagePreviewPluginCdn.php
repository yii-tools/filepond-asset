<?php

declare(strict_types=1);

namespace Yii\Assets;

use Yiisoft\Assets\AssetBundle;

/**
 * Asset bundle for the filepond image preview plugin in content delivery network (CDN) mode, mainly used for publishing
 * assets.
 */
final class FilePondImagePreviewPluginCdn extends AssetBundle
{
    public bool $cdn = true;
    public array $css = ['https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css'];
    public array $js = ['https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js'];
}
