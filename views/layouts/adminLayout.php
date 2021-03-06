<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
        'brandLabel' => 'King Data',
        'brandUrl' => ['/administrador/index'],
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Inicio', 'url' => ['/administrador/index']],
        array('label'=>'Usuarios', 'url'=>array('#'),
                            'items' => array(
                            array('label' => 'Crear Usuarios', 'url' => array('/usuarios/create')),
                            array('label' => 'Ver Usuarios', 'url' => array('/usuarios/index')))),
         array('label'=>'Clientes', 'url'=>array('#'),
                            'items' => array(
                            array('label' => 'Crear Cliente', 'url' => array('/clientes/create')),
                            array('label' => 'Ver Clientes', 'url' => array('/clientes/index')))),
         array('label'=>'Rutas', 'url'=>array('#'),
                            'items' => array(
                            array('label' => 'Crear Ruta', 'url' => array('/rutas/create')),
                            array('label' => 'Ver Rutas', 'url' => array('/rutas/index')))),
    ];
    if (!Yii::$app->user->isGuest) {
        $menuItems[] = [
            'label' => 'Salir (' . Yii::$app->user->identity->UsuarioEmail . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; King Data <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
