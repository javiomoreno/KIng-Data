<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\UsuariosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'UsuarioID') ?>

    <?= $form->field($model, 'UsuarioNombre') ?>

    <?= $form->field($model, 'UsuarioApellido') ?>

    <?= $form->field($model, 'UsuarioEmail') ?>

    <?= $form->field($model, 'UsuarioAlias') ?>

    <?php // echo $form->field($model, 'UsuarioTelefono') ?>

    <?php // echo $form->field($model, 'UsuarioClave') ?>

    <?php // echo $form->field($model, 'UsuarioDireccion') ?>

    <?php // echo $form->field($model, 'Usuariocol') ?>

    <?php // echo $form->field($model, 'RolID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
