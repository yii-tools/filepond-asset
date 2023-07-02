<?php

declare(strict_types=1);

namespace Yii\Assets;

use Yii\Asset\Js\FilePondEncodePlugin;
use Yii\Asset\Js\FilePondImageExifOrientationPlugin;
use Yii\Asset\Js\FilePondValidateSizePlugin;
use Yii\Asset\Js\FilePondValidateTypePlugin;
use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

/**
 * Asset bundle for the filepond widget in development mode, mainly used for publishing assets.
 */
final class FilePond extends AssetBundle
{
    public string|null $basePath = '@assets';
    public string|null $baseUrl = '@assetsUrl';
    public string|null $sourcePath = '@filepond-asset';
    public array $css = ['filepond.css'];
    public array $js = ['filepond.js'];
    public array $depends = [
        FilePondEncodePlugin::class,
        FilePondValidateSizePlugin::class,
        FilePondValidateTypePlugin::class,
        FilePondImageExifOrientationPlugin::class,
        FilePondImagePreviewPlugin::class,
    ];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only('**/filepond.css', '**/filepond.js'),
        ];
    }
}
