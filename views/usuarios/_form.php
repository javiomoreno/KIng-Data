<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Nuevo Usuario';
?>

<div class="usuarios-form">
    <div class="container">
        <div class="register register-container">
            <?php $form = ActiveForm::begin(); ?>
            <p id="profile-name" class="profile-name-usuario"><?= Html::encode($this->title) ?></p>
            
            <div class="row">
                <div class="col-sm-6">
                    <?= $form->field($model, 'TiposUsuarios_idTipoUsuario')->dropDownList($model->listaTiposUsuarios, ['prompt' => 'Seleccione Tipo' ]);?>
                </div>
            </div>

            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

            <div class="form-group text-center">
                <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>


