<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\FormasPagosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Formas Pagos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formas-pagos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Formas Pagos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'FormaPagoID',
            'FormaPagoNombre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
