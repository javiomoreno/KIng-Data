<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Productos */

$this->title = $model->ProductoID;
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ProductoID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ProductoID], [
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
            'ProductoID',
            'ProductoNombre',
            'ProductoDescripcion',
            'ProductoModelo',
            'ProductoColor',
            'ProductoSKU',
            'ProductoIm1',
            'ProductoIm2',
            'ProductoIm3',
            'ProductoDisponible',
            'ProductoMaximo',
            'Productocol',
            'ProductoPrecio',
            'ProductoIva',
            'TipoProductoID',
            'ProveedorID',
        ],
    ]) ?>

</div>
