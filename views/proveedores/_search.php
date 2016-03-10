<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ProveedoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proveedores-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ProveedorID') ?>

    <?= $form->field($model, 'ProveedorNombre') ?>

    <?= $form->field($model, 'ProveedorEmail') ?>

    <?= $form->field($model, 'ProveedorTelefono') ?>

    <?= $form->field($model, 'ProveedorDireccion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
