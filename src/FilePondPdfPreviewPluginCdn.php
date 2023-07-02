<?php

declare(strict_types=1);

namespace Yii\Assets;

use Yiisoft\Assets\AssetBundle;

/**
 * Asset bundle for the filepond pdf preview plugin in content delivery network (CDN) mode, mainly used for publishing
 * assets.
 */
final class FilePondPdfPreviewPluginCdn extends AssetBundle
{
    public bool $cdn = true;
    public array $css = ['https://unpkg.com/filepond-plugin-pdf-preview/dist/filepond-plugin-pdf-preview.min.css'];
    public array $js = ['https://unpkg.com/filepond-plugin-pdf-preview/dist/filepond-plugin-pdf-preview.min.js'];
}
