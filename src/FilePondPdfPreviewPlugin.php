<?php

declare(strict_types=1);

namespace Yii\Assets;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

/**
 * Asset bundle for the filepond pdf preview plugin in development mode, mainly used for publishing assets.
 */
final class FilePondPdfPreviewPlugin extends AssetBundle
{
    public string|null $basePath = '@assets';
    public string|null $baseUrl = '@assetsUrl';
    public string|null $sourcePath = '@filepond-pdf-preview-plugin';
    public array $css = ['filepond-plugin-pdf-preview.css'];
    public array $js = ['filepond-plugin-pdf-preview.js'];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only('**filepond-plugin-pdf-preview.css', '**filepond-plugin-pdf-preview.js'),
        ];
    }
}
