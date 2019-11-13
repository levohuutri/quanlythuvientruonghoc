<?php
$config = [
    'id' => 'quanlythuvientruonghoc',
    // the basePath of the application will be the `quanlythuvientruonghoc` directory
    'basePath' => __DIR__,
    // this is where the application will find all controllers
    'controllerNamespace' => 'app\controllers',
    // set an alias to enable autoloading of classes from the 'micro' namespace
    'aliases' => [
        '@app' => __DIR__ . '/../',
        '@vendor' => '@app/vendor',
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'defaultRoute' => 'site/index',
    'layout' => '@app/views/layouts/main',
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'sqlite:@micro/database.sqlite',
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'XkBrvsdfdsfdkklrlj4ddfsdvsdjdjkweisdfjndsvnjdvs'
        ],
    ],
];

$config['modules']['app'] = [
    'class' => 'app\modules\app\Module'
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
    $config['aliases']['@yii/gii'] = '@app/vendor/yiisoft/yii2-gii/src';
}

return $config;