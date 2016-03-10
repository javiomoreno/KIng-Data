<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ordenes */

$this->title = 'Update Ordenes: ' . ' ' . $model->OrdenID;
$this->params['breadcrumbs'][] = ['label' => 'Ordenes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->OrdenID, 'url' => ['view', 'id' => $model->OrdenID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ordenes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
