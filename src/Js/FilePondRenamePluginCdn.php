<?php

declare(strict_types=1);

namespace Yii\Assets\Js;

use Yiisoft\Assets\AssetBundle;

/**
 * Asset bundle for the filepond rename plugin in content delivery network (CDN) mode, mainly used for publishing
 * assets.
 */
final class FilePondRenamePluginCdn extends AssetBundle
{
    public bool $cdn = true;
    public array $js = ['https://unpkg.com/filepond-plugin-file-rename/dist/filepond-plugin-file-rename.js'];
}
