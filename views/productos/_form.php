<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Productos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProductoNombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductoDescripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductoModelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductoColor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductoSKU')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductoIm1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductoIm2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductoIm3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductoDisponible')->textInput() ?>

    <?= $form->field($model, 'ProductoMaximo')->textInput() ?>

    <?= $form->field($model, 'Productocol')->textInput() ?>

    <?= $form->field($model, 'ProductoPrecio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductoIva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TipoProductoID')->textInput() ?>

    <?= $form->field($model, 'ProveedorID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
