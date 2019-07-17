<?php
/**
 * AdvancedHosting asset files: images, configs and more
 *
 * @link      https://github.com/advancedhosters/yii-asset-advancedhosting
 * @package   yii-asset-advancedhosting
 * @license   proprietary
 * @copyright Copyright (c) 2019, AdvancedHosters (https://advancedhosters.com/)
 */

$supportEmail = 'support@advancedhosting.com';

return [
    'favicon.ico'       => '@advancedhosters/assets/advancedhosting/assets/images/favicon.ico',

    'organization.name' => 'AdvancedHosting',
    'organization.url'  => 'https://advancedhosting.com/',

    'supportEmail'           => $supportEmail,
    'adminEmail'             => $supportEmail,
    'abuseEmail'             => 'abuse@advancedhosting.com',
    'salesEmail'             => 'contact.sales@advancedhosting.com',
    'ticketGlobalNotifyMail' => 'ahnames-tickets@advancedhosting.com',

    'billing.localObjects'   => 'serverConfig',

    'copyright.year'    => 2002,

    'socialLinks.links' => [
        'email'     => 'mailto:' . $supportEmail,
        'twitter'   => 'https://twitter.com/advancedhosting',
        'facebook'  => 'https://www.facebook.com/AdvancedHosting/',
    ],

    'user.checkEmailConfirmed'      => false,
    'hiam.refresh_token.lifetime'   => 3600 * 24 * 365,

    'legals.privacyPolicyUrl' => 'https://advancedhosting.com/en/documents/privacyPolicy',
    'terms_url' => 'https://advancedhosting.com/en/documents/termsAndConditions',

    'module.server.order.allowed'               => false,
    'module.server.power.management.allowed'    => false,
    'module.finance.bill.detalization.allowed'  => false,

    'hiam.authorizedClients' => array_filter([
        'grafana'                           => 'HecAt1ojNad_',
        'hipanel.advancedhosting.com'       => 'Whic_OjEcuk0',
        'hisite.advancedhosting.com'        => 'flevyog+Lis4',
        'vcp.advancedhosting.com'           => 'Irdal~ObNiv2',

        'websa.advancedhosting.com'         => 'webOj,obcyk8',
        'stage-websa.advancedhosting.com'   => 'webOj,obcyk8',
        'dev-websa.advancedhosting.com'     => 'webOj,obcyk8',
    ]),

    'language.languages' => new \yii\helpers\ReplaceArrayValue([
        'en' => 'English',
    ]),
];
