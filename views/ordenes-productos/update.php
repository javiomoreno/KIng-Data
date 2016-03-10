<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OrdenesProductos */

$this->title = 'Update Ordenes Productos: ' . ' ' . $model->OrdenID;
$this->params['breadcrumbs'][] = ['label' => 'Ordenes Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->OrdenID, 'url' => ['view', 'OrdenID' => $model->OrdenID, 'ProductoID' => $model->ProductoID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ordenes-productos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
