<?php

$header = <<<EOF
AdvancedHosting asset files: images, configs and more

@link      https://github.com/advancedhosters/yii-asset-advancedhosting
@package   yii-asset-advancedhosting
@license   proprietary
@copyright Copyright (c) 2019, AdvancedHosters (https://advancedhosters.com/)
EOF;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@PSR2' => true,
        'header_comment'                             =>  [
            'header'        => $header,
            'separate'      => 'bottom',
            'location'      => 'after_declare_strict',
            'commentType'   => 'PHPDoc',
        ],
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
            ->notPath('vendor')
            ->notPath('runtime')
            ->notPath('web/assets')
        )
;
