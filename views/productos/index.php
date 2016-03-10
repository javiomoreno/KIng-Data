<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ProductosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Productos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ProductoID',
            'ProductoNombre',
            'ProductoDescripcion',
            'ProductoModelo',
            'ProductoColor',
            // 'ProductoSKU',
            // 'ProductoIm1',
            // 'ProductoIm2',
            // 'ProductoIm3',
            // 'ProductoDisponible',
            // 'ProductoMaximo',
            // 'Productocol',
            // 'ProductoPrecio',
            // 'ProductoIva',
            // 'TipoProductoID',
            // 'ProveedorID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
