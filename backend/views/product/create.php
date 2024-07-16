<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Product $model */

$this->title = 'Добавление продукта';
$this->params['breadcrumbs'][] = ['label' => $model->modelName, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
