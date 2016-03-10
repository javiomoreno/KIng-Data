<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ClientesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ClienteID') ?>

    <?= $form->field($model, 'ClienteNombre') ?>

    <?= $form->field($model, 'ClienteCedula') ?>

    <?= $form->field($model, 'ClienteDireccion') ?>

    <?= $form->field($model, 'ClienteEmail') ?>

    <?php // echo $form->field($model, 'ClienteTelefono') ?>

    <?php // echo $form->field($model, 'ClienteContacto') ?>

    <?php // echo $form->field($model, 'Observaciones') ?>

    <?php // echo $form->field($model, 'RutaID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
