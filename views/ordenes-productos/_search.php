<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\OrdenesProductosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ordenes-productos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'OrdenID') ?>

    <?= $form->field($model, 'ProductoID') ?>

    <?= $form->field($model, 'CantidadProducto') ?>

    <?= $form->field($model, 'TotalPrecio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
