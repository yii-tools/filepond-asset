<?php

declare(strict_types=1);

namespace Yii\Assets\Tests\Provider;

use Yii\Assets;

final class NpmAssetProvider
{
    /**
     * @return array array of asset bundles.
     */
    public static function assetBundles(): array
    {
        return [
            ['Css', Assets\FilePond::class],
            ['Css', Assets\FilePondImagePreviewPlugin::class],
            ['Css', Assets\FilePondPdfPreviewPlugin::class],
            ['Css', Assets\FilePondPdfPreviewPluginProd::class],
            ['Css', Assets\FilePondProd::class],
            ['Css', Assets\FilePondProd::class, Assets\FilePondImagePreviewPluginProd::class],
            ['Js', Assets\FilePond::class, Assets\FilePondImagePreviewPlugin::class],
            ['Js', Assets\FilePond::class, Assets\Js\FilePondEncodePlugin::class],
            ['Js', Assets\FilePond::class, Assets\Js\FilePondImageExifOrientationPlugin::class],
            ['Js', Assets\FilePond::class, Assets\Js\FilePondValidateSizePlugin::class],
            ['Js', Assets\FilePond::class, Assets\Js\FilePondValidateTypePlugin::class],
            ['Js', Assets\FilePondProd::class, Assets\FilePondImagePreviewPluginProd::class],
            ['Js', Assets\FilePondProd::class, Assets\Js\FilePondEncodePluginProd::class],
            ['Js', Assets\FilePondProd::class, Assets\Js\FilePondImageExifOrientationPluginProd::class],
            ['Js', Assets\FilePondProd::class, Assets\Js\FilePondValidateSizePluginProd::class],
            ['Js', Assets\FilePondProd::class, Assets\Js\FilePondValidateTypePluginProd::class],
            ['Js', Assets\Js\FilePondImageCropPlugin::class],
            ['Js', Assets\Js\FilePondImageCropPluginProd::class],
            ['Js', Assets\Js\FilePondRenamePlugin::class],
            ['Js', Assets\Js\FilePondRenamePluginProd::class],
            ['Js', Assets\Js\FilePondImageTransformPlugin::class],
            ['Js', Assets\Js\FilePondImageTransformPluginProd::class],
        ];
    }
}
