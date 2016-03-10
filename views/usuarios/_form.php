<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
      <div class="col-lg-6">
        <?= $form->field($model, 'UsuarioNombre')->textInput(['maxlength' => true]) ?>
      </div>
      <div class="col-lg-6">
        <?= $form->field($model, 'UsuarioApellido')->textInput(['maxlength' => true]) ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <?= $form->field($model, 'UsuarioEmail')->textInput(['maxlength' => true]) ?>
      </div>
      <div class="col-lg-6">
        <?= $form->field($model, 'UsuarioAlias')->textInput(['maxlength' => true]) ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <?= $form->field($model, 'UsuarioTelefono')->textInput(['maxlength' => true]) ?>
      </div>
      <div class="col-lg-6">
        <?= $form->field($model, 'UsuarioClave')->passwordInput(['maxlength' => true]) ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <?= $form->field($model, 'UsuarioDireccion')->textInput(['maxlength' => true]) ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <?= $form->field($model, 'Usuariocol')->textInput(['maxlength' => true]) ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <?= $form->field($model, 'RolID')->dropDownList($model->listaRoles, ['prompt' => 'Seleccione Tipo' ]);?>
      </div>
    </div>

    <div class="form-group text-center">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
