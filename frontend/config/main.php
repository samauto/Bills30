<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',

    'basePath' => dirname(__DIR__),

    'bootstrap' => ['log'],

    'modules' => [
        'gridview' =>  [
        'class' => '\kartik\grid\Module'
        // enter optional module parameters below - only if you need to  
        // use your own export download action or custom translation 
        // message source
        // 'downloadAction' => 'gridview/export/download',
        // 'i18n' => []
        ],
        
        'social' => [
        // the module class
        'class' => 'kartik\social\Module',
 
        // the global settings for the Disqus widget
        //'disqus' => [
        //    'settings' => ['shortname' => 'DISQUS_SHORTNAME'] // default settings
        //],
 
        // the global settings for the Facebook plugins widget
        'facebook' => [
            'appId' => '476765529161698',
            'secret' => '38c1d73d55a5dfd948c304717a2be3f3',
            //'appId' => 'FACEBOOK_APP_ID',
            //'secret' => 'FACEBOOK_APP_SECRET',
        ],


        // the global settings for the Google+ Plugins widget
        //'google' => [
        //    'clientId' => 'GOOGLE_API_CLIENT_ID',
        //    'pageId' => 'GOOGLE_PLUS_PAGE_ID',
        //    'profileId' => 'GOOGLE_PLUS_PROFILE_ID',
        //],
 
        // the global settings for the Google Analytics plugin widget
        //'googleAnalytics' => [
        //    'id' => 'TRACKING_ID',
        //    'domain' => 'TRACKING_DOMAIN',
        //],
 
        // the global settings for the Twitter plugin widget
        //'twitter' => [
        //    'screenName' => 'TWITTER_SCREEN_NAME'
        //],
 
        // the global settings for the GitHub plugin widget
        //'github' => [
        //    'settings' => ['user' => 'GITHUB_USER', 'repo' => 'GITHUB_REPO']
        //],
    ],
    // your other modules

    ],

    'controllerNamespace' => 'frontend\controllers',

    'aliases' => [
        '@sibilino/yii2/openlayers' => '@vendor/sibilino/yii2-openlayers/widget',
        '2amigos/yii2/google/places/library' => '@vendor/2amigos/yii2-google-places-library'
    ],

    'components' => [

        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'localhost',
                'username' => 'samauto@hotmail.com',
                'password' => 'AUTO99bat',
                'port' => '587',
                'encryption' => 'tls',
            ],
        ],

        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name' => '_frontendUser'
            ]
        ],
        'session' => [
            'name' => 'PHPFRONTSESSID',
            'savePath' => sys_get_temp_dir(),
        ],
        'request' => [
            'cookieValidationKey' => 'iQdLePOcuzOJDCsgwYBT',
            'csrfParam' =>'_frontendCSRF',
        ],

        'formatter' => [
           'dateFormat' => 'd-M-Y',
           'datetimeFormat' => 'd-M-Y H:i:s',
           'timeFormat' => 'H:i:s',
           'locale' => 'en-US', //your language locale
           'defaultTimeZone' => 'America/Chicago', // time zone
        ],
    
        //'urlManager' => [
        //    'enablePrettyUrl' => true,
        //    'showScriptName' => true,
        //    'enableStrictParsing' => false,
        //    'rules' => [],
        //],


        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    'authUrl' => 'https://www.facebook.com/dialog/oauth?display=popup',
                    'clientId' => '476765529161698',
                    'clientSecret' => '38c1d73d55a5dfd948c304717a2be3f3',
                    //'clientId' => 'YOUR APP CLIENT ID',
                    //'clientSecret' => 'YOUR APP CLIENT SECRET',
                ],
            ],
        ],


    ],

    'params' => [
                $params,
                'icon-framework' => 'el']


];
