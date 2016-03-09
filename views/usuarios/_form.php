<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UsuarioNombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UsuarioApellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UsuarioEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UsuarioAlias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UsuarioTelefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UsuarioClave')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UsuarioDireccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Usuariocol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RolID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
