<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Order $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="order-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Основная информация
                </div>
                <div class="card-body">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'product')->textInput(['maxlength' => true, 'readonly' => true]) ?>
                    <?= $form->field($model, 'price')->textInput() ?>
                    <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'class' => 'form-control phone-mask']) ?>
                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

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
