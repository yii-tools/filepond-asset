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
            ['Css', Assets\Filepond::class],
            ['Css', Assets\FilepondImagePreviewPlugin::class],
            ['Css', Assets\FilePondPdfPreviewPlugin::class],
            ['Css', Assets\FilePondPdfPreviewPluginProd::class],
            ['Css', Assets\FilepondProd::class],
            ['Css', Assets\FilepondProd::class, Assets\FilepondImagePreviewPluginProd::class],
            ['Js', Assets\Filepond::class, Assets\FilepondImagePreviewPlugin::class],
            ['Js', Assets\Filepond::class, Assets\Js\FilepondEncodePlugin::class],
            ['Js', Assets\Filepond::class, Assets\Js\FilepondImageExifOrientationPlugin::class],
            ['Js', Assets\Filepond::class, Assets\Js\FilepondValidateSizePlugin::class],
            ['Js', Assets\Filepond::class, Assets\Js\FilepondValidateTypePlugin::class],
            ['Js', Assets\FilepondProd::class, Assets\FilepondImagePreviewPluginProd::class],
            ['Js', Assets\FilepondProd::class, Assets\Js\FilepondEncodePluginProd::class],
            ['Js', Assets\FilepondProd::class, Assets\Js\FilepondImageExifOrientationPluginProd::class],
            ['Js', Assets\FilepondProd::class, Assets\Js\FilepondValidateSizePluginProd::class],
            ['Js', Assets\FilepondProd::class, Assets\Js\FilepondValidateTypePluginProd::class],
            ['Js', Assets\Js\FilePondImageCropPlugin::class],
            ['Js', Assets\Js\FilePondImageCropPluginProd::class],
            ['Js', Assets\Js\FilePondRenamePlugin::class],
            ['Js', Assets\Js\FilePondRenamePluginProd::class],
            ['Js', Assets\Js\FilePondImageTransformPlugin::class],
            ['Js', Assets\Js\FilePondImageTransformPluginProd::class],
        ];
    }
}
