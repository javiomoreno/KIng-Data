<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\OrdenesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ordenes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'OrdenID') ?>

    <?= $form->field($model, 'OrdenFecha') ?>

    <?= $form->field($model, 'OrdenEstado') ?>

    <?= $form->field($model, 'Observaciones') ?>

    <?= $form->field($model, 'Ordencol') ?>

    <?php // echo $form->field($model, 'ClienteID') ?>

    <?php // echo $form->field($model, 'FormaPagoID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
