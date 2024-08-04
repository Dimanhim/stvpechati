<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'name' => 'Trafaret',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        /*'assetManager' => [
            'bundles' => [
                'yii\web\YiiAsset' => false,
            ],
        ],*/
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => ''
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.jino.ru',
                'username' => 'info@stavtime.ru',
                'password' => 'HY4tW4My',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/ecp' => 'site/ecp',
                '/registration' => 'site/registration',
                '/politics' => 'site/politics',
                '/sitemap' => 'site/sitemap',
                '/sitemap.xml' => 'site/sitemap',
            ],
        ],
    ],
    'params' => $params,
];
