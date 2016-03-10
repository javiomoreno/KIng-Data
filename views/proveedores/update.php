<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedores */

$this->title = 'Update Proveedores: ' . ' ' . $model->ProveedorID;
$this->params['breadcrumbs'][] = ['label' => 'Proveedores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ProveedorID, 'url' => ['view', 'id' => $model->ProveedorID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="proveedores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
