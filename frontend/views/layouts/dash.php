<?php

/* @var $this \yii\web\View */
/* @var $content string */
//ese kartik\widgets\SideNav;
//use yii\helpers\Html;
use kartik\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

use dosamigos\leaflet\layers\LayerGroup;
use dosamigos\leaflet\layers\Marker;

use dosamigos\leaflet\layers\TileLayer;
use dosamigos\leaflet\LeafLet;
use dosamigos\leaflet\types\LatLng;
use dosamigos\leaflet\plugins\geocoder\ServiceNominatim;
use dosamigos\leaflet\plugins\geocoder\GeoCoder;

use rodzadra\geolocation\Geolocation;

//use willdurand\geocoder;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<span class="glyphicon glyphicon-dashboard"></span> Your Bill$OfHealth Dashboard',
        'brandUrl' => ['/user/index'],
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    
    $menuItems = [
        //['label' => '<span class="glyphicon glyphicon-home"></span> Home', 'url' => ['/site/index']],
        //['label' => '<span class="glyphicon glyphicon-book"></span> About', 'url' => ['/about-us/index']],
        //['label' => '<span class="glyphicon glyphicon-envelope"></span> Contact', 'url' => ['/site/contact']],
        //['label' => '<span class="glyphicon glyphicon-education"></span> FAQ', 'url' => ['/faq-search/index']],
        //['label' => 'Factual', 'url' => ['/site/facsearch']],
        //['label' => 'Doc', 'url' => ['/site/test']],
        //['label' => 'Soc', 'url' => ['/site/indexs']],
    ];
    if (Yii::$app->user->isGuest) {
        //$menuItems[] = ['label' => '<span class="glyphicon glyphicon-user"></span> Signup', 'url' => ['/site/signup']];
        //$menuItems[] = ['label' => '<span class="glyphicon glyphicon-modal-window"></span> Login', 'url' => ['/site/login']];
    } else {
        //$menuItems[] = ['label' => '<span class="glyphicon glyphicon-dashboard"></span> Dashboard', 'url' => ['/user/index']];
        //$menuItems[] = ['label' => '<span class="glyphicon glyphicon-home"></span> Home', 'url' => ['/site/index']];
        //$menuItems[] = ['label' => '<span class="glyphicon glyphicon-book"></span> About', 'url' => ['/about-us/index']];
        //$menuItems[] = ['label' => '<span class="glyphicon glyphicon-envelope"></span> Contact', 'url' => ['/site/contact']];
        //$menuItems[] = ['label' => '<span class="glyphicon glyphicon-education"></span> FAQ', 'url' => ['/faq-search/index']];
        //     ['label' => '<span class="glyphicon glyphicon-book"></span> About', 'url' => ['/about-us/index']],
        //     ['label' => '<span class="glyphicon glyphicon-off"></span> Logout (' . Yii::$app->user->identity->username . ')','url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']],

        $menuItems[] = ['label' => '<span class="glyphicon glyphicon-home"></span> Home', 'url' => ['/site/index']];
        $menuItems[] = [       
            'label' => 'My Account (' . Yii::$app->user->identity->username . ')',
            'items' => [
                ['label' => '<span class="glyphicon glyphicon-envelope"></span> Contact Information','url' => ['/user-contact'],],
                ['label' => '<span class="glyphicon glyphicon-envelope"></span> Contact Information','url' => ['/user-contact'],],
                ['label' => '<span class="glyphicon glyphicon-envelope"></span> Contact Information','url' => ['/user-contact'],],
                [
                'label' => '<span class="glyphicon glyphicon-off"></span> Logout (' . Yii::$app->user->identity->username . ')',
                'url' => ['/site/logout'],
                'linkOptions' => ['data-method' => 'post']
                ],
            ],
        ];
    }



    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
        'encodeLabels' => false,
    ]);
    NavBar::end();
    ?>

    <div class="container">


    <div class="row">    





<?php 



Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

  


<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Bill$OfHealth <?= date('Y') ?> All Rights Reserved</p>

        <p class="pull-right">Saving your wealth with Bills of Health</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
