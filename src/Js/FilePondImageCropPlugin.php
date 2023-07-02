<?php

declare(strict_types=1);

namespace Yii\Assets\Js;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

/**
 * Asset bundle for the filepond image crop plugin in development mode, mainly used for publishing assets.
 */
final class FilePondImageCropPlugin extends AssetBundle
{
    public string|null $basePath = '@assets';
    public string|null $baseUrl = '@assetsUrl';
    public string|null $sourcePath = '@filepond-file-image-crop-plugin';
    public array $js = ['filepond-plugin-image-crop.js'];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only('**/filepond-plugin-image-crop.js'),
        ];
    }
}
