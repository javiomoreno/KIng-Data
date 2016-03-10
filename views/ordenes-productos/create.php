<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OrdenesProductos */

$this->title = 'Create Ordenes Productos';
$this->params['breadcrumbs'][] = ['label' => 'Ordenes Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordenes-productos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
