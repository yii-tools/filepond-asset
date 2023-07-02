<?php

declare(strict_types=1);

namespace Yii\Assets\Js;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

/**
 * Asset bundle for the filepond image transform plugin in production mode, mainly used for publishing assets.
 */
final class FilePondImageTransformPluginProd extends AssetBundle
{
    public string|null $basePath = '@assets';
    public string|null $baseUrl = '@assetsUrl';
    public string|null $sourcePath = '@filepond-image-transform-plugin';
    public array $js = ['filepond-plugin-image-transform.min.js'];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only('**filepond-plugin-image-transform.min.js'),
        ];
    }
}
