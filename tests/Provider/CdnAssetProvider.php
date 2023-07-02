<?php

declare(strict_types=1);

namespace Yii\Assets\Tests\Provider;

use Yii\Assets;

final class CdnAssetProvider
{
    /**
     * @return array array of asset bundles.
     */
    public static function assetBundles(): array
    {
        return [
            ['Css', Assets\FilePondCdn::class],
            ['Css', Assets\FilepondImagePreviewPluginCdn::class],
            ['Css', Assets\FilePondPdfPreviewPluginCdn::class],
            ['Css', Assets\FilePondCdn::class, Assets\FilePondImagePreviewPluginCdn::class],
            ['Js', Assets\FilePondCdn::class, Assets\FilePondImagePreviewPluginCdn::class],
            ['Js', Assets\FilePondCdn::class, Assets\Js\FilePondEncodePluginCdn::class],
            ['Js', Assets\FilePondCdn::class, Assets\Js\FilePondImageExifOrientationPluginCdn::class],
            ['Js', Assets\FilePondCdn::class, Assets\Js\FilePondValidateSizePluginCdn::class],
            ['Js', Assets\FilePondCdn::class, Assets\Js\FilePondValidateTypePluginCdn::class],
            ['Js', Assets\Js\FilePondImageCropPluginCdn::class],
            ['Js', Assets\Js\FilePondImageTransformPluginCdn::class],
            ['Js', Assets\Js\FilePondRenamePluginCdn::class],
        ];
    }
}
