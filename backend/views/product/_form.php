<?php

use common\models\Category;
use kartik\widgets\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Product;
use kartik\editors\Summernote;

/** @var yii\web\View $this */
/** @var common\models\Product $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Основная информация
                </div>
                <div class="card-body">
                    <?= $form->field($model, 'short_name')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'category_id')->widget(Select2::className(), [
                        'options' => ['placeholder' => '[не выбрана]'],
                        'showToggleAll' => false,
                        'pluginOptions' => [
                            'allowClear' => true,
                        ],
                        'data' => Category::getList(),
                    ]) ?>
                    <?= $form->field($model, 'type_id')->widget(Select2::className(), [
                        'options' => ['placeholder' => '[не выбран]'],
                        'showToggleAll' => false,
                        'pluginOptions' => [
                            'allowClear' => true,
                        ],
                        'data' => Product::getTypesList(),
                    ]) ?>
                    <?= $form->field($model, 'description')->widget(Summernote::className(), []) ?>
                    <?= $form->field($model, 'price')->textInput() ?>
                    <?= $form->field($model, 'is_active')->checkbox() ?>

                </div>
            </div>
        </div>
        <div class="col-6">
            <?= $model->getImagesField($form) ?>
        </div>
        <div class="clearfix"></div>
        <div class="col-12">
            <div class="form-group mt10">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
