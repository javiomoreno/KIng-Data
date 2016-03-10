<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Rutas */

$this->title = $model->RutaID;
$this->params['breadcrumbs'][] = ['label' => 'Rutas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rutas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->RutaID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->RutaID], [
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
            'RutaID',
            'RutaNombre',
            'RutaFecha',
            'UsuarioID',
        ],
    ]) ?>

</div>
