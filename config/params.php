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
    'favicon.ico'       => '@advancedhosters/assets/advancedhosters/assets/images/favicon.ico',

    'organization.name' => 'AdvancedHosting',
    'organization.url'  => 'https://advancedhosting.com/',

    'supportEmail'           => $supportEmail,
    'adminEmail'             => $supportEmail,
    'abuseEmail'             => 'abuse@advancedhosters.com',
    'salesEmail'             => 'contact.sales@advancedhosters.com',
    'ticketGlobalNotifyMail' => 'ahnames-tickets@advancedhosters.com',


    'copyright.year'    => 2002,

    'socialLinks.links' => [
        'email'     => 'mailto:' . $supportEmail,
        'twitter'   => 'https://twitter.com/advancedhosters',
        'facebook'  => 'https://www.facebook.com/AdvancedHosting/',
    ],

    'legals.privacyPolicyUrl' => 'https://advancedhosting.com/en/documents/privacyPolicy',
];
