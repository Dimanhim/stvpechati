<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Product $model */

$this->title = $model->modelName . ' - ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => $model->modelName, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить продукт?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'image_fields',
                'format' => 'raw',
                'value' => function($data) {
                    return $data->imagesHtml;
                }
            ],
            'short_name',
            'name',
            [
                'attribute' => 'category_id',
                'format' => 'raw',
                'value' => function($data) {
                    if($data->category) {
                        return Html::a($data->category->name, ['category/view', 'id' => $data->category->id]);
                    }
                },
            ],
            [
                'attribute' => 'type_id',
                'format' => 'raw',
                'value' => function($data) {
                    return $data->typeName;
                },
            ],
            [
                'attribute' => 'description',
                'format' => 'raw',
                'value' => function($data) {
                    return $data->description;
                },
            ],
            'price',
            'is_active:boolean',
            'created_at:datetime',
        ],
    ]) ?>

</div>
