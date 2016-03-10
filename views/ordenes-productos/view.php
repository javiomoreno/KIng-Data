<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OrdenesProductos */

$this->title = $model->OrdenID;
$this->params['breadcrumbs'][] = ['label' => 'Ordenes Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordenes-productos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'OrdenID' => $model->OrdenID, 'ProductoID' => $model->ProductoID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'OrdenID' => $model->OrdenID, 'ProductoID' => $model->ProductoID], [
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
            'ProductoID',
            'CantidadProducto',
            'TotalPrecio',
        ],
    ]) ?>

</div>
