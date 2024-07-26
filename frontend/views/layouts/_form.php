<?php

use frontend\models\OrderForm;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$model = new OrderForm();
?>

<div class="pop-up-wrapp pop-up-candy-home-wrapp">
    <div id="lbox-kup" class="lbox-kup">
        <div class="lbox-bg"></div>
        <div class="lbox-window">
            <div class="close-but">×</div>
            <div class="form-head form-head-o">
                ПЕЧАТЬ СМАРТ
            </div>
            <div class="w-form">

                <?php $form = ActiveForm::begin(['id' => 'wf-form--3', 'fieldConfig' => ['options' => ['tag' => false]], 'options' => ['class' => 'form-inner']]) ?>
                    <?= $form->field($model, 'name', ['template' => "{input} {error}"])->textInput(['placeholder' => "Ваше имя", 'class' => 'textfield w-input']) ?>
                    <?= $form->field($model, 'phone', ['template' => "{input} {error}"])->textInput(['placeholder' => "Ваш телефон", 'class' => 'textfield w-input phone-mask']) ?>
                    <?= $form->field($model, 'utm', ['template' => "{input}"])->hiddenInput(['value' => $model->getUtms()]) ?>
                    <?= $form->field($model, 'product', ['template' => "{input}"])->hiddenInput(['maxlength' => true]) ?>
                    <p class="info-message">Ошибка</p>
                    <?= Html::submitButton('ЗАКАЗАТЬ', ['class' => "form-button w-button btn-disabled", 'disabled' => true]) ?>
                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>
</div>
<div class="pop-up-wrapp-success">
    <div id="lbox-kup" class="lbox-kup">
        <div class="lbox-bg"></div>
        <div class="lbox-window">
            <div class="close-but">×</div>
            <div data-param="product" class="form-head">
                Ваша заявка успешно отправлена!
            </div>
        </div>
    </div>
</div>














<!--
<div id="lbox-kup" class="lbox-kup">
    <div data-ix="close-lbox-kup" class="lbox-bg"></div>
    <div class="lbox-window">
        <div data-ix="close-lbox-kup" class="close-but">×</div>
        <div data-param="product" class="form-head">
            ПЕЧАТЬ СМАРТ
        </div>
        <div class="w-form">

            <form id="wf-form--3" name="wf-form-" data-name="Заявка с сайта" method="post" class="form-inner">
                <input type="text" id="Name-7" name="Name-3" data-name="Name 3" placeholder="Ваше имя" maxlength="256" class="textfield w-input">
                <input type="text" id="Tel-3" name="Tel-3" data-name="Tel 3" maxlength="256" required="" placeholder="Ваш телефон" class="textfield w-input">
                <input type="hidden" id="product-3" name="Product-3" data-name="Product 3" maxlength="256">
                <input type="submit" value="ЗАКАЗАТЬ" data-wait="Please wait..." class="form-button w-button">
            </form>
            <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form</div>
            </div>
        </div>
    </div>
</div>
-->
