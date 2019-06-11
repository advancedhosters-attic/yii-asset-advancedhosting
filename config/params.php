<?php
/**
 * AdvancedHosting asset files: images, configs and more
 *
 * @link      https://github.com/advancedhosters/yii-asset-advancedhosting
 * @package   yii-asset-advancedhosting
 * @license   proprietary
 * @copyright Copyright (c) 2019, AdvancedHosters (https://advancedhosters.com/)
 */

$supportEmail = 'support@advancedhosters.com';

return [
    'favicon.ico'       => '@advancedhosters/assets/advancedhosting/assets/images/favicon.ico',

    'organization.name' => 'AdvancedHosting',
    'organization.url'  => 'https://advancedhosting.com/',

    'supportEmail'           => $supportEmail,
    'adminEmail'             => $supportEmail,
    'abuseEmail'             => 'abuse@advancedhosters.com',
    'salesEmail'             => 'contact.sales@advancedhosters.com',
    'ticketGlobalNotifyMail' => 'ahnames-tickets@advancedhosters.com',

    'billing.localObjects'   => 'serverConfig',

    'copyright.year'    => 2002,

    'socialLinks.links' => [
        'email'     => 'mailto:' . $supportEmail,
        'twitter'   => 'https://twitter.com/advancedhosters',
        'facebook'  => 'https://www.facebook.com/AdvancedHosting/',
    ],

    'user.checkEmailConfirmed' => false,

    'legals.privacyPolicyUrl' => 'https://advancedhosting.com/en/documents/privacyPolicy',

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
];
