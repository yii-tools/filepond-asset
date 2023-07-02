<?php

declare(strict_types=1);

namespace Yii\Assets;

use Yii\Assets\Js\FilePondEncodePluginProd;
use Yii\Assets\Js\FilePondImageExifOrientationPluginProd;
use Yii\Assets\Js\FilePondValidateSizePluginProd;
use Yii\Assets\Js\FilePondValidateTypePluginProd;
use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

/**
 * Asset bundle for the filepond widget in production mode, mainly used for publishing assets.
 */
final class FilePondProd extends AssetBundle
{
    public string|null $basePath = '@assets';
    public string|null $baseUrl = '@assetsUrl';
    public string|null $sourcePath = '@filepond-asset';
    public array $css = ['filepond.min.css'];
    public array $js = ['filepond.min.js'];
    public array $depends = [
        FilePondEncodePluginProd::class,
        FilePondValidateSizePluginProd::class,
        FilePondValidateTypePluginProd::class,
        FilePondImageExifOrientationPluginProd::class,
        FilePondImagePreviewPluginProd::class,
    ];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only('**/filepond.min.css', '**/filepond.min.js'),
        ];
    }
}
