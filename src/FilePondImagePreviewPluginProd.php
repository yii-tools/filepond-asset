<?php

declare(strict_types=1);

namespace Yii\Assets;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

/**
 * Asset bundle for the filepond image preview plugin in production mode, mainly used for publishing assets.
 */
final class FilePondImagePreviewPluginProd extends AssetBundle
{
    public string|null $basePath = '@assets';
    public string|null $baseUrl = '@assetsUrl';
    public string|null $sourcePath = '@filepond-image-preview-plugin';
    public array $css = ['filepond-plugin-image-preview.min.css'];
    public array $js = ['filepond-plugin-image-preview.min.js'];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only(
                '**/filepond-plugin-image-preview.min.css',
                '**/filepond-plugin-image-preview.min.js',
            ),
        ];
    }
}
