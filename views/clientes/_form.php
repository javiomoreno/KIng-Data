<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clientes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ClienteNombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ClienteCedula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ClienteDireccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ClienteEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ClienteTelefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ClienteContacto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Observaciones')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RutaID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
