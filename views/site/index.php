<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'King Data';
?>
<div class="container">
    <div class="row">
        <div class="card card-container">
            <div class='info' style='text-align:center;'>
                <?php
                    $flashMessages = Yii::$app->session->getFlash('error');
                    if($flashMessages)
                    {
                        echo '<div id="alert-message" class="alert alert-danger" role="alert">' . $flashMessages. "</div>";
                    }
                ?>
            </div>
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'form-horizontal'],
                'fieldConfig' => [
                    'template' => "<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
            ]); ?>

            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <span id="reauth-email" class="reauth-email"></span>
            <?= $form->field($model, 'username', [
                    'inputOptions' =>
                        [
                            'type' => 'text' ,
                            'class' => 'form-control',
                            'placeholder' => 'Usuario',
                        ],])->label(false) ?>
            <?= $form->field($model, 'password', [
                    'inputOptions' =>
                        [
                            'type' => 'password' ,
                            'class' => 'form-control',
                            'placeholder' => 'Contraseña',
                        ],])->label(false)->passwordInput() ?>
            <div class="form-group">
                <div class="col-lg-12">
                    <?= Html::submitButton('Iniciar Sesión', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
