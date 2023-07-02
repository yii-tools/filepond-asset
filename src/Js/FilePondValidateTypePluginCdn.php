<?php

declare(strict_types=1);

namespace Yii\Assets\Js;

use Yiisoft\Assets\AssetBundle;

/**
 * Asset bundle for the filepond validate type plugin in content delivery network (CDN) mode, mainly used for publishing
 * assets.
 */
final class FilePondValidateTypePluginCdn extends AssetBundle
{
    public bool $cdn = true;
    public array $js = ['dist/filepond-plugin-file-validate-type.min.js'];
}
