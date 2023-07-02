<?php

declare(strict_types=1);

namespace Yii\Assets\Js;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

/**
 * Asset bundle for the filepond rename plugin in development mode, mainly used for publishing assets.
 */
final class FilePondRenamePlugin extends AssetBundle
{
    public string|null $basePath = '@assets';
    public string|null $baseUrl = '@assetsUrl';
    public string|null $sourcePath = '@filepond-file-rename-plugin';
    public array $js = ['filepond-plugin-file-rename.js'];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only('**/filepond-plugin-file-rename.js'),
        ];
    }
}
