<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'rgdhqr0HO59cTarnrR3D3ctVz6_xZedz',
            'baseUrl' => '',
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'app' => 'app.php',
                    ],
                ],
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'class' => 'webvimark\modules\UserManagement\components\UserConfig',
            // Comment this if you don't want to record user logins
            'on afterLogin' => function($event) {
                \webvimark\modules\UserManagement\models\UserVisitLog::newVisitor($event->identity->id);
            }
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.mail.ru',
                'username' => 'order@printellect.ru',
                'password' => 'W=4G7vSXrotq',
//                'username' => '5707590@mail.ru',
//                'password' => 'velosiped2016',
//                'port' => '465',
//                'encryption' => 'SSL',
                'port' => '587',
                'encryption' => 'TLS',
//У меня swiftmailer с smtp.mail.ru работает только так: TLS на порту 587, а SSL на 465.
//Причем, TLS заметно быстрее.
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
//            'enableStrictParsing' => true,
            'rules' => [

                'category/<id:\d+>/page/<page:\d+>' => 'category/view',
                'category/<id:\d+>' => 'category/view',
                'show/<id:\d+>' => 'category/show',
                'product/<id:\d+>' => 'product/view',
                'search' => 'category/search',
            ],
        ],
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
            'layout' => 'main',
        //'defaultRoute' => 'order/index',
        ],
        'user-management' => [
            'class' => 'webvimark\modules\UserManagement\UserManagementModule',
            // 'enableRegistration' => true,
            // Add regexp validation to passwords. Default pattern does not restrict user and can enter any set of characters.
            // The example below allows user to enter :
            // any set of characters
            // (?=\S{8,}): of at least length 8
            // (?=\S*[a-z]): containing at least one lowercase letter
            // (?=\S*[A-Z]): and at least one uppercase letter
            // (?=\S*[\d]): and at least one number
            // $: anchored to the end of the string
            //'passwordRegexp' => '^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$',
            // Here you can set your handler to change layout for any controller or action
            // Tip: you can use this event in any module
            'on beforeAction' => function(yii\base\ActionEvent $event) {
                if ($event->action->uniqueId == 'user-management/auth/login') {
                    $event->action->controller->layout = 'loginLayout.php';
                };
            },
            'layout' => 'main',
        ],
        'yii2images' => [
            'class' => 'rico\yii2images\Module',
            //be sure, that permissions ok 
            //if you cant avoid permission errors you have to create "images" folder in web root manually and set 777 permissions
            'imagesStorePath' => 'images/products', //path to origin images
            'imagesCachePath' => 'images/products/cache', //path to resized copies
            'graphicsLibrary' => 'GD', //but really its better to use 'Imagick' 
            'placeHolderPath' => '@webroot/images/products/no-image.png', // if you want to get placeholder when image not exists, string will be processed by Yii::getAlias
        ],
        'gridview' => [
            'class' => '\kartik\grid\Module'
        // enter optional module parameters below - only if you need to  
        // use your own export download action or custom translation 
        // message source
        // 'downloadAction' => 'gridview/export/download',
        // 'i18n' => []
        ],
        'datecontrol' => [
            'class' => 'kartik\datecontrol\Module',
            // format settings for displaying each date attribute
            'displaySettings' => [
                'date' => 'd-m-Y',
                'time' => 'H:i:s A',
                'datetime' => 'd-m-Y H:i:s A',
            ],
            // format settings for saving each date attribute
            'saveSettings' => [
                'date' => 'Y-m-d',
                'time' => 'H:i:s',
                'datetime' => 'Y-m-d H:i:s',
            ],
            // automatically use kartik\widgets for each of the above formats
            'autoWidget' => true,
        ],
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
            'access' => ['@'],
            'root' => [
                // 'baseUrl' => '/web',
                'path' => 'images/',
                'name' => 'Printellect'
            ],
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
    $config['modules']['gii']['generators'] = [
        'kartikgii-crud' => ['class' => 'warrence\kartikgii\crud\Generator'],
    ];
}

return $config;
