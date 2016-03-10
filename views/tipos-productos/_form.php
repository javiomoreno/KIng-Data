<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TiposProductos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipos-productos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TipoProductoNombre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
