<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\OrdenesProductosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ordenes Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordenes-productos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ordenes Productos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'OrdenID',
            'ProductoID',
            'CantidadProducto',
            'TotalPrecio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
