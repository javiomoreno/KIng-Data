<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ordenes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ordenes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'OrdenFecha')->textInput() ?>

    <?= $form->field($model, 'OrdenEstado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Observaciones')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ordencol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ClienteID')->textInput() ?>

    <?= $form->field($model, 'FormaPagoID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
