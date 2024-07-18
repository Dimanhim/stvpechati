<?php

use yii\helpers\Html;

$this->title = 'ИЗГОТОВЛЕНИЕ ПЕЧАТЕЙ, ШТАМПОВ, ФАКСИМИЛЕ И ЭЦП В СТАВРОПОЛЕ';

?>

<div class="main-screen">
    <div class="div-block-11"><a href="/ecp" class="page-link">Электронная подпись (ЭЦП)</a><a href="/registration"
                                                                                               class="page-link">Регистрация
            ИП/ООО</a></div>
    <h1 class="head1">
        <?= Html::encode($this->title) ?>
    </h1>
    <div class="subhead">
        С ДОСТАВКОЙ ДО ВАШЕГО ОФИСА ИЛИ ДОМА
    </div>
    <div class="head-print w-clearfix">
        <div class="form-fwrapper">
            <div class="akcia">АКЦИЯ!</div>
            <div class="ostavte">Оставьте заявку и получите<br><strong>БЕСПЛАТНУЮ ДОСТАВКУ!</strong><br><span
                        class="small">при заказе от 1500 руб</span></div>
            <div class="form w-form">
                <form id="wf-form-" name="wf-form-" data-name="Верхняя форма">
                    <input type="text" id="name" name="name" data-name="Name" placeholder="Ваше имя" maxlength="256"
                           class="textfield w-input">
                    <input type="text" id="telephone" name="telephone" data-name="telephone" maxlength="256" required=""
                           placeholder="Ваш телефон" class="textfield w-input">
                    <input type="submit" value="оставить заявку" data-wait="Please wait..."
                           class="form-button w-button"></form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form</div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div data-animation="slide" data-duration="500" data-infinite="1" class="slider w-slider">
            <div class="mask w-slider-mask">
                <div class="w-slide">
                    <div class="slide"><img src="/img/111.jpg" loading="lazy" alt="" class="slider-img" title=""></div>
                </div>
                <div class="w-slide">
                    <div class="slide"><img src="/img/222.jpg" loading="lazy" alt="" class="slider-img" title=""></div>
                </div>
                <div class="w-slide">
                    <div class="slide"><img src="/img/333.jpg" loading="lazy" alt="" class="slider-img" title=""></div>
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
</div>
<div class="banner">
    <div class="text-block-3">Получите печать БЕСПЛАТНО<br>при открытии счета в нашем банке-партнере</div>
    <img src="/img/5cd04fcac4495633f5509195_sb0.png" alt="" class="image">
    <div class="div-block-3">
        <a href="https://form.dasreda.ru/rko?utm_source=43pechati&partnerID=4a483107a231195694873b87eb907337"
           target="_blank" class="link-2">ОТкрыть счет в банке</a>
        <a href="#" class="link-2" data-ix="open-lbox-3">получить печать бесплатно</a>
    </div>
</div>
<div class="etapi dover">
    <h2>
        Информация о печатях </h2>
    <div class="dubl-text polez">
        <p>Компания «Trafaret.» изготавливает штампы, печати, факсимиле и ЭЦП в городе Ставрополе. Для изготовления
            печатей используется фотополимерная и лазерная технологии, также изготавливаем металлические печати
            (пломбиры).</p>
        <p>Индивидуальный подход к каждому клиенту, от разработки дизайна до готовой печати.</p>
        <p>Если Вы цените свое время и любите качественно выполненную работу &#8212; обратитесь к нам.</p>
    </div>
    <div class="pr-2h h2-polez">
        Какую оснастку выбрать?
    </div>
    <div class="polez-row w-row">
        <div class="column-5 w-col w-col-4 w-col-stack">
            <div class="osnast-img1" style="background-image:url('/img/58189968322f605c2447bcc7_gerb.jpg');"></div>
            <div class="osnast-h">
                Оснастка ручная
            </div>
            <div class="osnast-txt">
                Ручные оснастки для печатей и штампов используются совместно со штемпельной подушкой. Их используют в
                тех случаях, если редко проставляются оттиски печати. Естественно, весь процесс производится вручную.
            </div>
        </div>
        <div class="column-5 w-col w-col-4 w-col-stack">
            <div class="osnast-img1" style="background-image:url('/img/colop-r40.jpg');"></div>
            <div class="osnast-h">
                Оснастка автоматическая
            </div>
            <div class="osnast-txt">
                Автоматические печати оснащены поворотными деталями, которые не требуют использования отдельной
                настольной подушки.
                Помимо удобной и быстрой работы, автоматические оснастки позволяют делать очень четкие оттиски. В
                результате они всегда ровные и читабельные, что важно для репутации большой, известной компании.
            </div>
        </div>
        <div class="column-5 w-col w-col-4 w-col-stack">
            <div class="osnast-img1"
                 style="background-image:url('/img/77871.970.jpg');"></div>
            <div class="osnast-h">
                Оснастка карманная
            </div>
            <div class="osnast-txt">
                В том случае, если работа с документами не проходит непосредственно в офисе,
                Мы можем предложить печать диаметром до 50 миллиметров с мобильной оснасткой компактного вида.
                Эта печать легко транспортируется и дает отменные результаты в работе.
            </div>
        </div>
    </div>
</div>
<div id="price" class="production">
    <h2 class="h2">
        наша продукция
    </h2>
    <div class="klishe">
        В цену включено изготовление клише!
    </div>

    <?php if($categories) : ?>
        <div class="tovars">
            <?php foreach($categories as $category) : ?>
            <div class="tovar-cat">
                <div class="text-block-6">
                    <?= $category->name ?>
                </div>
                <?php if($productStamps = $category->stamps) : ?>
                <div class="prod-block">
                    <?php foreach($productStamps as $productStamp) : ?>
                    <div class="product">
                        <div class="img-wrap">
                            <img src="<?= $productStamp->imagePath ?>" alt="<?= $productStamp->name ?>" class="prod-img" title="<?= $productStamp->name ?>">
                        </div>
                        <div class="stamp-name">
                            <?= $productStamp->name ?>
                        </div>
                        <div data-delay="0" data-hover="" class="more w-dropdown">
                            <div class="more-toogle w-dropdown-toggle">
                                <div class="more-txt">подробнее</div>
                            </div>
                            <nav class="more-block w-dropdown-list">
                                <div class="more-desc">
                                    <?= strip_tags($productStamp->description) ?>
                                </div>
                            </nav>
                        </div>
                        <div class="price">
                            <?= $productStamp->price ?>
                        </div>
                        <div data-show-lbox="lbox-kup" data-product="<?= $productStamp->short_name ?>" data-ix="open-lbox" class="form-button orange-butt fix">
                            заказать сейчас!
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="prod-block h">
        <div class="product">
            <div class="img-wrap">
                <img src="/img/58189db8322f605c2447c5de_brelok.jpg" alt="" class="prod-img"></div>
            <div class="stamp-name">Печать <br>"Карина"</div>
            <div data-delay="0" data-hover="1" class="more w-dropdown">
                <div class="more-toogle w-dropdown-toggle">
                    <div class="more-txt">подробнее</div>
                </div>
                <nav class="more-block w-dropdown-list">
                    <div class="more-desc">Приятная на ощупь металлическая оснастка. Удобна при ношении в кармане. Перед
                        использованием требует промакивания в штемпельную подушку.
                    </div>
                </nav>
            </div>
            <div class="price">800 руб</div>
            <div data-show-lbox="lbox-kup" data-product="Металлическая Брелок" data-ix="open-lbox" class="form-button orange-butt">
                заказать сейчас!
            </div>
        </div>
        <div class="product">
            <div class="img-wrap">
                <img src="/img/58189db8322f605c2447c5dd_evro1.jpg" alt="" class="prod-img">
            </div>
            <div class="stamp-name">Печать <br>"Евро-1"</div>
            <div data-delay="0" data-hover="1" class="more w-dropdown">
                <div class="more-toogle w-dropdown-toggle">
                    <div class="more-txt">подробнее</div>
                </div>
                <nav class="more-block w-dropdown-list">
                    <div class="more-desc">Печать с удобной рукояткой и встроенной кнопкой. Внутри имеется штемпельная
                        подушка. Качественное гальваническое покрытие.
                    </div>
                </nav>
            </div>
            <div class="price">1200 руб</div>
            <div data-show-lbox="lbox-kup" data-product="Металлическая Евро-1" data-ix="open-lbox" class="form-button orange-butt">
                заказать сейчас!
            </div>
        </div>
        <div class="product">
            <div class="img-wrap">
                <img src="/img/58189db8e8bbf0826d961d74_evro2.jpg" alt="" class="prod-img">
            </div>
            <div class="stamp-name">Печать <br>"Евро-2"</div>
            <div data-delay="0" data-hover="1" class="more w-dropdown">
                <div class="more-toogle w-dropdown-toggle">
                    <div class="more-txt">подробнее</div>
                </div>
                <nav class="more-block w-dropdown-list">
                    <div class="more-desc">Эксклюзивная металлическая печать со встроенной подушкой внутри. Как и у всех
                        полуавтоматов достаточно лишь перед использованием один раз нажать на кнопку сверху, снять крышку и
                        поставить печать на бумаге. Изготавливается из сплавов цветных металлов с высококачественными
                        гальваническими покрытиями и отличается высочайшим качеством. Радости от пользования этой печатью
                        будет не меньше, чем от присоединения Крыма к России
                    </div>
                </nav>
            </div>
            <div class="price">1300 руб</div>
            <div data-show-lbox="lbox-kup" data-product="Металлическая Евро-2" data-ix="open-lbox" class="form-button orange-butt">
                заказать сейчас!
            </div>
        </div>
        <div class="product">
            <div class="img-wrap">
                <img src="/img/58189db8a49bac756d8ea873_etalon.jpg" alt="" class="prod-img"></div>
            <div class="stamp-name">Печать <br>Автомат "Эталон"</div>
            <div data-delay="0" data-hover="1" class="more w-dropdown">
                <div class="more-toogle w-dropdown-toggle">
                    <div class="more-txt">подробнее</div>
                </div>
                <nav class="more-block w-dropdown-list">
                    <div class="more-desc">Полностью металлическая оснастка идеально подходит для «конвейерного» и
                        беспрерывного штампования документов. «Неубиваемая» оснастка в любых руках.
                    </div>
                </nav>
            </div>
            <div class="price">1900 руб</div>
            <div data-show-lbox="lbox-kup" data-product="Печать автомат Эталон" data-ix="open-lbox" class="form-button orange-butt">
                заказать сейчас!
            </div>
        </div>
    </div>
</div>
<div class="ottisk-block">
    <div class="dubl-row w-row">
        <div class="column w-col w-col-7">
            <h2 class="heading">
                ВОССТАНОВЛЕНИЕ ПЕЧАТЕЙ И ШТАМПОВ ПО ОТТИСКУ (КОПИЯ СУЩЕСТВУЮЩЕЙ ПЕЧАТИ) </h2>
            <div class="dubl-text">
                <p>Печать по оттиску — это точная копия вашей печати, для изготовления которой нужен ее оттиск на
                    бумаге.</p>
            </div>
        </div>
        <div class="w-col w-col-5">
            <img src="/img/58198789ae44d80070b3782e_ottisk1.jpg" alt="" class="dubl-img">
        </div>
    </div>
    <div class="dubl-text w-richtext">
        <p class="dubl-text">Если печать вашей фирмы утеряна, можно пойти по традиционному пути — сообщить об этом в
            соответствующие органы, аннулировать печать,заказать новую, зарегистрировать ее.</p>
        <p class="dubl-text">При этом, неизвестно, сколько времени понадобится на все это, и на протяжении всего срока
            работа фирмы будет парализована. Чем это чревато, объяснять не нужно.</p>
        <p class="dubl-text">Говоря об изготовлении печатей по оттиску, нужно отметить, что в этом деле крайне важна
            точность.</p>
        <p>Если вам предлагают изготовление печати за скромную сумму, то, скорее всего, вам изготовят похожую печать. То
            есть, визуально, если особо не вглядываться, эта печать неотличима от вашей. Но на самом деле отличия
            составляют более 20%.</p>
        <h2 class="heading _2">ПОЧЕМУ СТОИТ ВЫБРАТЬ НАШУ КОМПАНИЮ ?</h2>
        <div class="dubl-text">В отличие от других организаций, предоставляющих данную услугу в Ставрополе:</div>
        <ul class="ul-txt">
            <li>
                <div>Мы делаем не просто похожую печать, а копию с точностью 99-100%<br/>
                    Подбираем идентичные шрифты, размеры, интервалы, выявляем малозаметные элементы и другие нюансы.
                </div>
            </li>
            <li>
                <div>Более 5 лет в сфере изготовления печатей.</div>
            </li>
            <li>
                <div>Наша компания имеет огромный опыт и своих профессиональных дизайнеров, что гарантирует качественное
                    выполнение работы в кратчайшие сроки.
                </div>
            </li>
            <li>
                <div>Индивидуальный подход к каждому клиенту.</div>
            </li>
        </ul>
    </div>
    <div class="div-block-2">
        <div data-show-lbox="lbox-kup" data-product="Печать по оттиску" data-ix="open-lbox"
             class="form-button-copy orange-butt faxi">заказать печать по оттиску!
        </div>
    </div>
    <div class="dubl-row w-row">
        <div class="column w-col w-col-7">
            <div class="dubl-text w-richtext">
                <h2 class="heading _2">ФАКСИМИЛЬНАЯ ПЕЧАТЬ</h2>
                <div>Это точное воспроизведение собственноручной подписи конкретного лица.</div>
                <div></div>
                <div>Руководители организаций каждый день подписывают десятки и даже сотни бумаг: договоры, акты,
                    служебные записки. При этом 50-70% времени они вынуждены отсутствовать на рабочем месте. Отсутствие
                    подписи руководителя на важных документах приводит к заморозке рабочего процесса.<br/>
                    Что делать простым исполнителям? Вот тут на помощь приходит полезный штамп – факсимиле.<br/>
                    Пока директора нет на месте, поставить нужный автограф на документе может другое доверенное лицо.
                </div>
            </div>
        </div>
        <div class="column-4 w-col w-col-5">
            <div class="div-block-4"></div>
            <div data-show-lbox="lbox-kup" data-product="Факсимиле" data-ix="open-lbox"
                 class="form-button-copy orange-butt faxi">заказать ФАКСИМИЛЕ
            </div>
        </div>
    </div>
</div>
<div id="kakzakazat" class="kakzakaz">
    <div>
        <h2>Как сделать заказ?</h2>
        <div class="pr-2h etai">Вы можете воспользоваться любым из 4-х способов:</div>
    </div>
    <ul role="list" class="kak-ul w-list-unstyled">
        <li class="li w-clearfix">
            <div class="kaz-dig">
                1
            </div>
            <div class="kak-txt">
                Приехать лично в офис.
            </div>
        </li>
        <li class="li w-clearfix">
            <div class="kaz-dig">
                2
            </div>
            <div class="kak-txt">
                Под интересующим Вас товаром нажать кнопку «Заказать сейчас». Оставьте свои контактные данные, и наш
                менеджер перезвонит вам.
            </div>
        </li>
        <li class="li w-clearfix">
            <div class="kaz-dig">
                3
            </div>
            <div class="kak-txt">
                Отправить документы и техническое задание на электронную почту: stv-pechati@mail.ru
            </div>
        </li>
        <li class="li w-clearfix">
            <div class="kaz-dig">
                4
            </div>
            <div class="kak-txt">
                Позвонить или написать в Viber/WhatsApp/Telegram по номеру телефона: +7 [8652] 58 90 05
            </div>
        </li>
    </ul>
</div>
<div id="kakrabotaem" class="etapi">
    <h2>
        Этапы работы с нами </h2>
    <div class="pr-2h etai">
        Стать нашим клиентом очень легко
    </div>
    <div class="prod-block etapi-block">
        <div class="product _1etap">
            <div class="img-wrap etap-wrap">
                <img src="/img/58198b57ae44d80070b37da1_request_live_demo-crop-u36853.jpg" alt="" class="etap-img" title="">
            </div>
            <div class="shag-name">
                ШАГ 1
            </div>
            <div class="shag-desc">
                Вы оставляете заявку или звоните нам
            </div>
        </div>
        <div class="product _1etap">
            <div class="img-wrap etap-wrap">
                <img src="/img/58198c9e3556aa8e19d090b4_qualities_of_a_good_manager-crop-u36855.jpg" alt="" class="etap-img" title="">
            </div>
            <div class="shag-name">
                ШАГ 2
            </div>
            <div class="shag-desc">
                Наш лучший менеджер консультирует Вас
            </div>
        </div>
        <div class="product _1etap">
            <div class="img-wrap etap-wrap">
                <img src="/img/58198ca8c5fddf0f70ab6952_4.jpg" alt="" class="etap-img" title=""></div>
            <div class="shag-name">
                ШАГ 3
            </div>
            <div class="shag-desc">
                Вы присылаете заявку на e-mail или передаете лично
            </div>
        </div>
        <div class="product _1etap">
            <div class="img-wrap etap-wrap">
                <img src="/img/58198d06a80ffea74d8ac385_grm_46042_hummer.jpg" alt="" class="etap-img" title="">
            </div>
            <div class="shag-name">
                ШАГ 4
            </div>
            <div class="shag-desc">
                Мы изготавливаем печать высокого качества
            </div>
        </div>
        <div class="product _1etap">
            <div class="img-wrap etap-wrap">
                <img src="/img/58198d06a80ffea74d8ac386_kyrier.jpg" alt="" class="etap-img" title=""></div>
            <div class="shag-name">
                ШАГ 5
            </div>
            <div class="shag-desc">
                Вы забираете ее лично или доставкой и оплачиваете при получении
            </div>
        </div>
    </div>
</div>
<div class="pochemu">
    <h2 class="heading-2"><span class="text-span">Мы не просто изготавливаем качественные печати и штампы,</span><br>МЫ
        ПРЕДОСТАВЛЯЕМ СЕРВИС!<br><br></h2>
    <div class="row-pochemy w-row">
        <div class="w-col w-col-6">
            <div class="dubl-text w-richtext">
                <h3>Удобство и сервис</h3>
                <p>Для своих клиентов мы стремимся предоставить лучший сервис на российском рынке производства печатей и
                    штампов-от самого информативного удобного сайта, до слаженной и грамотной работы наших менеджеров
                    офиса и сотрудников производства.</p>
            </div>
            <img src="/img/58198f4da80ffea74d8ac47f_website-u49558.png" alt="" class="we-img">
            <img src="/img/58198f4dae44d80070b383da_manager-u49562.png" alt="" class="we-img">
            <img src="/img/58198f4d3556aa8e19d09460_checking-u49560.png" alt="" class="we-img"></div>
        <div class="why-col w-col w-col-6">
            <div class="dubl-text w-richtext">
                <ul>
                    <li>Время изготовления срочной печати &#8212; от 20 минут</li>
                    <li>Большой выбор макетов без отдельных доплат</li>
                    <li>Юридическое консультирование по применению печатей &#8212; БЕСПЛАТНО</li>
                    <li>Разработаем дизайн Вашей печати «с нуля»</li>
                    <li>Помощь в открытии Р/С (Партнерство с 10+ банками)</li>
                </ul>
            </div>
        </div>
    </div>
    <h2><span class="orange">10</span> причин почему <span class="orange">90%</span> клиентов <br> обращаются к нам
        повторно<span class="orange"></span></h2>
    <div class="row-90pr w-row">
        <div class="w-col w-col-6">
            <div class="prich w-clearfix">
                <div class="prich-img">
                    <img src="/img/58199078c5fddf0f70ab6aab_hand210-u52935.png" alt="" class="prich-pic" title=""></div>
                <div class="prich-txt">
                    <p><strong>Изготавливаем гербовые печати</strong> по ГОСТ Р 51511-2001</p>
                </div>
            </div>
            <div class="prich w-clearfix">
                <div class="prich-img">
                    <img src="/img/581991dfae44d80070b387d9_officematerial19-u52961.png" alt="" class="prich-pic" title=""></div>
                <div class="prich-txt">
                    <p><strong>Срок </strong>выполнения <strong>срочного заказа</strong> – до <strong>30 минут</strong>
                    </p>
                </div>
            </div>
            <div class="prich w-clearfix">
                <div class="prich-img">
                    <img src="/img/581991f5d2a44a8119f35396_verification5-u52969.png" alt="" class="prich-pic" title=""></div>
                <div class="prich-txt">
                    <p>Мы предоставляем <strong>максимально удобный сервис</strong>, и не требуем лишних документов</p>
                </div>
            </div>
            <div class="prich w-clearfix">
                <div class="prich-img">
                    <img src="/img/58199205ae44d80070b387e4_call37-u52951.png" alt="" class="prich-pic" title=""></div>
                <div class="prich-txt">
                    <p><strong>БЕСПЛАТНАЯ юридическая консультация</strong> по вопросам использования печатей <strong>24/7</strong>
                    </p>
                </div>
            </div>
            <div class="prich w-clearfix">
                <div class="prich-img">
                    <img src="/img/58199214ae44d80070b38afa_discount2-u52953.png" alt="" class="prich-pic" title="">
                </div>
                <div class="prich-txt">
                    <p><strong>Программа лояльности</strong> для постоянных клиентов</p>
                </div>
            </div>
        </div>
        <div class="w-col w-col-6">
            <div class="prich w-clearfix">
                <div class="prich-img">
                    <img src="/img/58199220ae44d80070b38afc_student70-u52967.png" alt="" class="prich-pic" title="">
                </div>
                <div class="prich-txt">
                    <p>В нашей команде работают исключительно профессионалы, способные <strong>восстановить печать по
                            оттиску любой сложности</strong></p>
                </div>
            </div>
            <div class="prich w-clearfix">
                <div class="prich-img">
                    <img src="/img/5819922da4bfa69a4dedc33d_businessman254-u52949.png" alt="" class="prich-pic" title="">
                </div>
                <div class="prich-txt">
                    <p><strong>Более 5 лет на рынке</strong> печатной продукции</p>
                </div>
            </div>
            <div class="prich w-clearfix">
                <div class="prich-img">
                    <img src="/img/58199239a4bfa69a4dedc340_sticker3-u52965.png" alt="" class="prich-pic" title="">
                </div>
                <div class="prich-txt">
                    <p>Мы используем <strong>расходные материалы премиум класса</strong> от ведущих мировых
                        производителей</p>
                </div>
            </div>
            <div class="prich w-clearfix">
                <div class="prich-img">
                    <img src="/img/58199257d2a44a8119f353f4_wax-u52971.png" alt="" class="prich-pic" title="">
                </div>
                <div class="prich-txt">
                    <p>Предоставляем <strong>гарантию </strong>на продукцию до <strong>2 лет</strong></p>
                </div>
            </div>
            <div class="prich w-clearfix">
                <div class="prich-img">
                    <img src="/img/5d9f6ec988029a56eeecf760_img9.png" alt="" class="prich-pic" title="">
                </div>
                <div class="prich-txt">
                    <p><strong>Наличный </strong>и <strong>безналичный </strong>расчет</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-block">
    <div class="form-obolocj">
        <div class="form-hor-hear">Рассчитать стоимость печати с эксклюзивным макетом!</div>
        <div class="form-hor-wrapp w-form">
            <form id="wf-form--2" name="wf-form-" data-name="Горизонтальная менюха" class="form-hor">
                <input type="text" id="name-4" name="name" data-name="Name 4" maxlength="256" placeholder="Ваше имя"
                       class="textfield-hor w-input">
                <input type="text" id="telephone-2" name="telephone" data-name="telephone" maxlength="256" required=""
                       placeholder="Ваш телефон" class="textfield-hor w-input">
                <input type="submit" value="рассчитать" data-wait="Пожалуйста, подождите..."
                       class="form-button button-hor w-button"></form>
            <div class="success-message w-form-done">
                <div>Форма успешно отправлена, спасибо!<br>Мы свяжемся с вами в ближайшее время.</div>
            </div>
            <div class="w-form-fail">
                <div class="text-block-4">Произошла ошибка! Пожалуйста повторите попытку позже. Спасибо.</div>
            </div>
        </div>
        <div class="nospam">Ваши данные не будут переданы третьим лицам</div>
    </div>
</div>
<div id="dostavka" class="dostavka-block">
    <h2>
        Доставка </h2>
    <div class="dostavka-row w-row">
        <div class="w-col w-col-4 w-col-small-small-stack">
            <div class="dost1">
                <div class="dost-ins">
                    <div class="div-block-5 w-clearfix">
                        <img src="/img/581a0c553556aa8e19d1ddc9_delivery23-u84020.png" alt="" class="dost-img" title="">
                        <div class="dost-txt">
                            <p><strong>Бесплатная доставка</strong> на следующий день.<br/>
                                При заказе <strong>от 1500 руб.</strong></p>
                        </div>
                    </div>
                </div>
                <div class="dost-head">
                    Бесплатная доставка
                </div>
            </div>
        </div>
        <div class="w-col w-col-4 w-col-small-small-stack">
            <div class="dost1">
                <div class="dost-ins">
                    <div class="div-block-5 w-clearfix">
                        <img src="/img/581a0d93d2a44a8119f4b5a6_delivery25-u84022.png" alt="" class="dost-img" title="">
                        <div class="dost-txt">
                            <p>Доставка <strong>в день</strong> заказа &#8212; 350 руб.</p>
                        </div>
                    </div>
                </div>
                <div class="dost-head">
                    ОБЫЧНАЯ ДОСТАВКА
                </div>
            </div>
        </div>
        <div class="w-col w-col-4 w-col-small-small-stack">
            <div class="dost1">
                <div class="dost-ins">
                    <div class="div-block-5 w-clearfix">
                        <img src="/img/581a0d9cd2a44a8119f4b5a9_delivery50-u84024.png" alt="" class="dost-img" title="">
                        <div class="dost-txt">
                            <p>Доставка в течении <strong>2 часов</strong> от <strong>800 руб.</strong></p>
                        </div>
                    </div>
                </div>
                <div class="dost-head">
                    ДОСТАВКА-МОЛНИЯ
                </div>
            </div>
        </div>
    </div>
    <div class="dost-row2 w-row">
        <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
            <img src="/img/581a0dfbae44d80070b4f353_delivery-man-300.png" width="197" alt=""></div>
        <div class="w-col w-col-9 w-col-small-9 w-col-tiny-9">
            <div class="dost-big-txt">
                Закажите печать и наша собственная курьерская служба доставит Вам ее в любой район города в тот же день!
            </div>
        </div>
    </div>
</div>


