<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FormasPagos */

$this->title = 'Update Formas Pagos: ' . ' ' . $model->FormaPagoID;
$this->params['breadcrumbs'][] = ['label' => 'Formas Pagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FormaPagoID, 'url' => ['view', 'id' => $model->FormaPagoID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="formas-pagos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
