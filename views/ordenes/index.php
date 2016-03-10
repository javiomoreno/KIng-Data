<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\OrdenesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ordenes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordenes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ordenes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'OrdenID',
            'OrdenFecha',
            'OrdenEstado',
            'Observaciones',
            'Ordencol',
            // 'ClienteID',
            // 'FormaPagoID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
