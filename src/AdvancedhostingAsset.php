<?php
/**
 * AdvancedHosting asset files: images, configs and more
 *
 * @link      https://github.com/advancedhosters/yii-asset-advancedhosting
 * @package   yii-asset-advancedhosting
 * @license   proprietary
 * @copyright Copyright (c) 2019, AdvancedHosters (https://advancedhosters.com/)
 */

namespace advancedhosters\assets\advancedhosting;

use yii\web\AssetBundle;

class AdvancedhostingAsset extends AssetBundle
{
    public $sourcePath = '@advancedhosters/assets/advancedhosting/assets';

    public $css = [
        'https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap',
        'https://fonts.googleapis.com/icon?family=Material+Icons',
        'css/advancedhosting.css',
    ];

    public $js = [
        // Popper JS
        [
            'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
            'integrity' => 'sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1',
        ],
        // Bootstrap 4 JS
        [
            'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
            'sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM',
        ],
    ];

    public $cssOptions = [
        'crossorigin' => 'anonymous',
    ];

    public $jsOptions = [
        'crossorigin' => 'anonymous',
    ];
}
