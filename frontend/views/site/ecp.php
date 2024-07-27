<?php

$this->title = 'Электронная подпись (ЭЦП)';

?>

<div class="wrapper ecp">
    <h1 class="head1 ecp">
        Электронная подпись (ЭЦП) </h1>
    <div>
        <div data-animation="slide" data-duration="500" data-infinite="1" class="slider w-slider">
            <div class="mask w-slider-mask">
                <div class="w-slide">
                    <div class="slide">
                        <img src="/img/111.jpg" loading="lazy" alt=""
                                            class="slider-img" title=""></div>
                </div>
                <div class="w-slide">
                    <div class="slide">
                        <img src="/img/222.jpg" loading="lazy" alt=""
                                            class="slider-img" title=""></div>
                </div>
                <div class="w-slide">
                    <div class="slide">
                        <img src="/img/333.jpg" loading="lazy" alt=""
                                            class="slider-img" title=""></div>
                </div>
            </div>
            <div class="w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
            </div>
            <div class="w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
            </div>
            <div class="w-slider-nav w-round"></div>
        </div>
    </div>
    <div class="txt w-richtext">
        <p>Электронная подпись &#8212; это реквизит электронного документа, предназначенный для защиты данного
            электронного документа от подделки, полученный в результате криптографического преобразования информации с
            использованием закрытого ключа электронной цифровой подписи и позволяющий идентифицировать владельца
            сертификата ключа подписи, а также установить отсутствие искажения информации в электронном документе.</p>
        <p>Участие в торгах, работа на госпорталах, декларирование информации, бухгалтерская отчетность и получение
            государственных услуг</p>
    </div>
    <?php if($products and count($products) >= 2 ) : ?>
    <div class="ecp-wrapper">
        <div class="div-block-6">
            <?php for($i = 0; $i < 2; $i++) : ?>
                <div class="ecp-item">
                    <div>
                        <div class="ecp-header">
                            <?= $products[$i]->name ?>
                        </div>
                        <div class="txt ecp w-richtext">
                            <?= $products[$i]->description ?>
                        </div>
                    </div>
                    <div>
                        <div class="price ecpt">
                            <?= $products[$i]->price ?> руб
                        </div>
                        <div data-product="<?= $products[$i]->short_name ?>"
                             class="form-button-copy orange-butt ecp popup-form">заказать
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <?php if(isset($products[2])) : ?>
        <div class="ecp-item wide">

            <div>
                <div class="ecp-header">
                    <?= $products[2]->name ?>
                </div>
                <div class="txt ecp w-richtext">
                    <?= $products[2]->description ?>
                </div>
            </div>
            <div>
                <div class="price ecpt">
                    <?= $products[2]->price ?> руб
                </div>
                <div data-product="<?= $products[2]->short_name ?>"
                     class="form-button-copy orange-butt ecp popup-form">заказать
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    <div class="dubl-text ecp w-richtext">
        <h2>Почему стоит выбрать компанию Печать и подпись?</h2>
        <p><strong>*Удаленный заказ</strong></p>
        <p>Заказать ЭЦП Вы можете без посещения нашего офиса – от Вас необходимо прислать все документы, мы сделаем и
            привезем все сами</p>
        <p><strong>*Доступ более чем к 200 системам и площадкам</strong></p>
        <p>Участвуйте в электронных торгах на 5 федеральных, более чем 150 коммерческих площадках страны и используйте
            50+ систем</p>
        <p><strong>*Самая низкая цена</strong></p>
        <p>Мы предоставляем гарантию самой низкой цены в регионе, найдете дешевле? Сделаем скидку 5% от той цены, что Вы
            нашли.</p>
        <p><strong>* Индивидуальный подход к каждому клиенту</strong></p>
    </div>
    <div data-product="Заказать ЭЦП"
         class="form-button-copy orange-butt faxi popup-form">заказать ЭЦП
    </div>
    <div>
        <h2 class="h2-ecp">
            Как сделать заказ? </h2>
        <div class="pr-2h ecp">
            Вы можете воспользоваться любым из 3-х способов:
        </div>
    </div>
    <div class="etaps">
        <div class="etap-step">
            <img src="/img/etapi-ecp-1.png" loading="lazy" alt=""
                                    class="image-2" title="Etapi ECP 1">
            <div class="shag-name-ecp">
                ШАГ 1
            </div>
            <div class="text-block-7">
                Оставить заявку на сайте
            </div>
        </div>
        <div class="divider">
            <img
                    src="/img/5f4bf3772bd5b944952cc57c_arrow-devider.png"
                    loading="lazy" alt="" class="dvdr"></div>
        <div class="etap-step"><img src="/img/etapi-ecp-2.png" loading="lazy" alt=""
                                    class="image-2" title="Etapi ECP 2">
            <div class="shag-name-ecp">
                ШАГ 2
            </div>
            <div class="text-block-7">
                Подготовить и отправить документы
            </div>
        </div>
        <div class="divider">
            <img
                    src="/img/5f4bf3772bd5b944952cc57c_arrow-devider.png"
                    loading="lazy" alt="" class="dvdr"></div>
        <div class="etap-step">
            <img src="/img/etapi-ecp-3.png" loading="lazy" alt=""
                                    class="image-2" title="Etapi ECP 3">
            <div class="shag-name-ecp">
                ШАГ 3
            </div>
            <div class="text-block-7">
                Получить подпись в нашем офисе
            </div>
        </div>
    </div>
</div>
<div class="form-block _2">
    <div>
        <h2 class="h2-ecp">
            Регистрируйтесь с нами </h2>
        <div class="wrapper reg">
            <div class="form-block-2 w-form">
                <form id="email-form" name="email-form" data-name="Email Form" class="form-2">
                    <div class="text-block-9">
                        Просто оставьте ваш телефон,чтобы оставить заявку на ЭЦП и мы обязательно вам перезвоним
                    </div>
                    <div class="div-block-8">
                        <label for="Tel" class="field-label">Ваш телефон:</label>
                        <input type="tel" class="text-field w-input" maxlength="256" name="Tel" data-name="Tel"
                               placeholder="+7 000 000 00 00" id="Tel"></div>
                    <input type="submit" value="Оставить заявку" data-wait="Please wait..."
                           class="form-button-copy _22 w-button">
                    <div class="text-block-10">Оставляя заявку, вы соглашаетесь на <a href="/politics">обработку
                            персональных данных</a></div>
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </div>
</div>



