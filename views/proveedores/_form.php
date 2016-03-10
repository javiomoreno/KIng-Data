<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proveedores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProveedorNombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProveedorEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProveedorTelefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProveedorDireccion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
