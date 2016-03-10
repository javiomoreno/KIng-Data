<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\TiposProductosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipos Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipos-productos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipos Productos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'TipoProductoID',
            'TipoProductoNombre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
