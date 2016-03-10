<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ordenes */

$this->title = $model->OrdenID;
$this->params['breadcrumbs'][] = ['label' => 'Ordenes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordenes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->OrdenID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->OrdenID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'OrdenID',
            'OrdenFecha',
            'OrdenEstado',
            'Observaciones',
            'Ordencol',
            'ClienteID',
            'FormaPagoID',
        ],
    ]) ?>

</div>
