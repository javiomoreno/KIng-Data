<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TiposProductos */

$this->title = 'Create Tipos Productos';
$this->params['breadcrumbs'][] = ['label' => 'Tipos Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipos-productos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
