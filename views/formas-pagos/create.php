<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FormasPagos */

$this->title = 'Create Formas Pagos';
$this->params['breadcrumbs'][] = ['label' => 'Formas Pagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formas-pagos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
