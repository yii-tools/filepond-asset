<?php

declare(strict_types=1);

namespace Yii\Assets;

use Yii\Assets\Js\FilepondEncodePluginCdn;
use Yii\Assets\Js\FilePondImageExifOrientationPluginCdn;
use Yii\Assets\Js\FilePondValidateSizePluginCdn;
use Yii\Assets\Js\FilePondValidateTypePluginCdn;
use Yiisoft\Assets\AssetBundle;

/**
 * Asset bundle for the filepond widget in content delivery network, mainly used for publishing assets.
 */
final class FilePondCdn extends AssetBundle
{
    public bool $cdn = true;
    public array $css = ['https://unpkg.com/filepond@^4/dist/filepond.min.css'];
    public array $js = ['https://unpkg.com/filepond@^4/dist/filepond.min.js'];
    public array $depends = [
        FilepondEncodePluginCdn::class,
        FilePondValidateSizePluginCdn::class,
        FilePondValidateTypePluginCdn::class,
        FilePondImageExifOrientationPluginCdn::class,
        FilePondImagePreviewPluginCdn::class,
    ];
}
