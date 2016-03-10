<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rutas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rutas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'RutaNombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RutaFecha')->textInput() ?>

    <?= $form->field($model, 'UsuarioID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
