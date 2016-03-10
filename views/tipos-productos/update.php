<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TiposProductos */

$this->title = 'Update Tipos Productos: ' . ' ' . $model->TipoProductoID;
$this->params['breadcrumbs'][] = ['label' => 'Tipos Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TipoProductoID, 'url' => ['view', 'id' => $model->TipoProductoID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipos-productos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
