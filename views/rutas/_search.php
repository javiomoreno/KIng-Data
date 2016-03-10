<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\RutasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rutas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'RutaID') ?>

    <?= $form->field($model, 'RutaNombre') ?>

    <?= $form->field($model, 'RutaFecha') ?>

    <?= $form->field($model, 'UsuarioID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
