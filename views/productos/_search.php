<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ProductosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ProductoID') ?>

    <?= $form->field($model, 'ProductoNombre') ?>

    <?= $form->field($model, 'ProductoDescripcion') ?>

    <?= $form->field($model, 'ProductoModelo') ?>

    <?= $form->field($model, 'ProductoColor') ?>

    <?php // echo $form->field($model, 'ProductoSKU') ?>

    <?php // echo $form->field($model, 'ProductoIm1') ?>

    <?php // echo $form->field($model, 'ProductoIm2') ?>

    <?php // echo $form->field($model, 'ProductoIm3') ?>

    <?php // echo $form->field($model, 'ProductoDisponible') ?>

    <?php // echo $form->field($model, 'ProductoMaximo') ?>

    <?php // echo $form->field($model, 'Productocol') ?>

    <?php // echo $form->field($model, 'ProductoPrecio') ?>

    <?php // echo $form->field($model, 'ProductoIva') ?>

    <?php // echo $form->field($model, 'TipoProductoID') ?>

    <?php // echo $form->field($model, 'ProveedorID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
