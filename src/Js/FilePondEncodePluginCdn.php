<?php

declare(strict_types=1);

namespace Yii\Assets\Js;

use Yiisoft\Assets\AssetBundle;

/**
 * Asset bundle for the filepond encode plugin in content delivery network (CDN) mode, mainly used for publishing
 * assets.
 */
final class FilepondEncodePluginCdn extends AssetBundle
{
    public bool $cdn = true;
    public array $js = ['https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.js'];
}
