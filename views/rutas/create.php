<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Rutas */

$this->title = 'Create Rutas';
$this->params['breadcrumbs'][] = ['label' => 'Rutas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rutas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
