<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'ru-RU',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'infoLog' => [
            'class' => 'common\components\InfoLog',
        ],
        'mailSender' => [
            'class' => 'common\components\MailSender',
        ],
        'telegram' => [
            'class' => 'common\components\TelegramSender',
            'token' => '7487573825:AAEPPBGAkLglS1WsOENRijSI_ZDlSlupBLE'
        ],
    ],
];
