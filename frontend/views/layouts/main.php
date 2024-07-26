<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({google: {families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]}});</script>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"
            type="text/javascript"></script><![endif]-->
    <script type="text/javascript">!function (o, c) {
            var n = c.documentElement, t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);</script>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name='robots' content='noindex,nofollow'/>

    <!-- All in One SEO 4.6.6 - aioseo.com -->
    <meta name="robots" content="noindex, nofollow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="<?= Url::home(true) ?>"/>
    <meta property="og:locale" content="ru_RU"/>
    <meta property="og:site_name" content="<?= Html::encode($this->title) ?> |"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="<?= Html::encode($this->title) ?>"/>
    <meta property="og:url" content="<?= Url::home(true) ?>"/>

    <!-- All in One SEO -->

    <link rel='stylesheet' id='dashicons-css' href='/css/dashicons.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='to-top-css' href='/css/to-top-public.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='admin-styles-css' href='/css/admin.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='main-css' href='/css/main.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='jquery-lazyloadxt-spinner-css-css' href='/css/jquery.lazyloadxt.spinner.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='a3a3_lazy_load-css' href='/css/a3_lazy_load.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/styles.css?v=<?= mt_rand(1000,10000) ?>' type='text/css' media='all'/>
    <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' id='jquery-core-js'></script>
    <script type='text/javascript' id='to-top-js-extra'>
        /* <![CDATA[ */
        var to_top_options = {
            "scroll_offset": "100",
            "icon_opacity": "50",
            "style": "icon",
            "icon_type": "dashicons-arrow-up-alt2",
            "icon_color": "#ffffff",
            "icon_bg_color": "#000000",
            "icon_size": "32",
            "border_radius": "5",
            "image": "https:\/\/stvpechati.ru\/wp-content\/plugins\/to-top\/admin\/images\/default.png",
            "image_width": "65",
            "image_alt": "",
            "location": "bottom-right",
            "margin_x": "20",
            "margin_y": "20",
            "show_on_admin": "0",
            "enable_autohide": "0",
            "autohide_time": "2",
            "enable_hide_small_device": "0",
            "small_device_max_width": "640",
            "reset": "0"
        };
        /* ]]> */
    </script>
    <script async type='text/javascript' src='/js/to-top-public.js' id='to-top-js'></script>
    <style>.pseudo-clearfy-link {
            color: #008acf;
            cursor: pointer;
        }

        .pseudo-clearfy-link:hover {
            text-decoration: none;
        }
    </style>
    <link rel="icon" href="/img/cropped-001-seal-32x32.png" sizes="32x32"/>
    <link rel="icon" href="/img/cropped-001-seal-192x192.png" sizes="192x192"/>
    <link rel="apple-touch-icon" href="/img/cropped-001-seal-180x180.png"/>
    <meta name="msapplication-TileImage" content="/img/cropped-001-seal-270x270.png"/>
    <script type="text/javascript">
        $(function () {
            $('[data-show-lbox]').click(function (event) {
                lbox_id = '#' + $(this).attr('data-show-lbox');
                $(lbox_id).find('[data-param=product]').text($(this).attr('data-product'));
                $(lbox_id).find('form').attr('data-name', $(this).attr('data-product'));
            });
        });
    </script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<script id="query_vars">
    var query_vars = 'a:63:{s:5:"error";s:0:"";s:1:"m";s:0:"";s:1:"p";s:1:"2";s:11:"post_parent";s:0:"";s:7:"subpost";s:0:"";s:10:"subpost_id";s:0:"";s:10:"attachment";s:0:"";s:13:"attachment_id";i:0;s:4:"name";s:0:"";s:8:"pagename";s:0:"";s:7:"page_id";s:1:"2";s:6:"second";s:0:"";s:6:"minute";s:0:"";s:4:"hour";s:0:"";s:3:"day";i:0;s:8:"monthnum";i:0;s:4:"year";i:0;s:1:"w";i:0;s:13:"category_name";s:0:"";s:3:"tag";s:0:"";s:3:"cat";s:0:"";s:6:"tag_id";s:0:"";s:6:"author";s:0:"";s:11:"author_name";s:0:"";s:4:"feed";s:0:"";s:2:"tb";s:0:"";s:5:"paged";i:0;s:8:"meta_key";s:0:"";s:10:"meta_value";s:0:"";s:7:"preview";s:0:"";s:1:"s";s:0:"";s:8:"sentence";s:0:"";s:5:"title";s:0:"";s:6:"fields";s:0:"";s:10:"menu_order";s:0:"";s:5:"embed";s:0:"";s:12:"category__in";a:0:{}s:16:"category__not_in";a:0:{}s:13:"category__and";a:0:{}s:8:"post__in";a:0:{}s:12:"post__not_in";a:0:{}s:13:"post_name__in";a:0:{}s:7:"tag__in";a:0:{}s:11:"tag__not_in";a:0:{}s:8:"tag__and";a:0:{}s:12:"tag_slug__in";a:0:{}s:13:"tag_slug__and";a:0:{}s:15:"post_parent__in";a:0:{}s:19:"post_parent__not_in";a:0:{}s:10:"author__in";a:0:{}s:14:"author__not_in";a:0:{}s:19:"ignore_sticky_posts";b:0;s:16:"suppress_filters";b:0;s:13:"cache_results";b:1;s:22:"update_post_term_cache";b:1;s:19:"lazy_load_term_meta";b:1;s:22:"update_post_meta_cache";b:1;s:9:"post_type";s:0:"";s:14:"posts_per_page";i:10;s:8:"nopaging";b:0;s:17:"comments_per_page";s:2:"50";s:13:"no_found_rows";b:0;s:5:"order";s:4:"DESC";}';
</script>
<div class="div-block-10">

    <?= $this->render('_form') ?>

    <div class="lbox-eskizi">
        <div data-ix="close-lbox-kup-2" class="lbox-bg2 lbox-eskizi"></div>
        <div class="window">
            <h2 class="pr-2h lbox-h2">
                Эскизы
            </h2>
            <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
                <div class="tab-menu w-tab-menu">
                    <a data-w-tab="Tab 1" class="w-inline-block w-tab-link w--current">
                        <div>Для ООО</div>
                    </a>
                    <a data-w-tab="Tab 2" class="w-inline-block w-tab-link">
                        <div>Для ИП</div>
                    </a>
                </div>
                <div class="tab-cont w-tab-content">
                    <div class="w-tab-pane w--tab-active">
                        <img src="/img/5d9f4e2f78c7182fcd60bd74_ooo20(1).jpg" alt="" class="tab-img">
                    </div>
                    <div data-w-tab="Tab 2" class="w-tab-pane">
                        <img src="/img/5d9f4eb678c718ac7160c0d4_ip20(1).jpg" alt="" class="tab-img">
                    </div>
                </div>
            </div>
            <div data-ix="close-lbox-kup-2" class="close-but eskiz-close">×</div>
        </div>
    </div>
</div>
<div id="up" class="header">
    <div class="head-plaw">
        <a href="/#kakrabotaem" class="top-link">
            Схема работы
        </a>
        <a href="/#" class="top-link">
            Эскизы печатей
        </a>
        <a href="/#kontakta" class="top-link">
            Офисы
        </a>
    </div>
    <div class="header-row w-row">
        <div class="h-col1 w-col w-col-3">
            <a href="#" class="logo-link w-inline-block">
                <img src="/img/traf.jpg" alt="" class="logo" title="">
            </a>
        </div>
        <div class="h-col2 w-col w-col-6">
            <div class="adres-head">
                <p>г. <span id="u7988-2">Ставрополь</span>, ул. Тухачевского 26/5, 4 подъезд, цокольный эт., офис 1<br/>
                    <a href="#kontakta">
                        <strong>
                            + точки приема заказов в Ставрополе
                        </strong>
                    </a>
                    <br/>
                    Часы работы: Ежедневно, 09:00-20:00
                </p>
            </div>
        </div>
        <div class="h-col3 w-col w-col-3">
            <div class="contact w-clearfix">
                <a href="https://vk.com/stvpechati" target="_blank" class="vk w-inline-block">
                    <img src="/img/58188287a49bac756d8e7008_b-u4648.png" alt="">
                </a>
                <a href="tel:+78652661465" class="link-block-2 w-inline-block">
                    <div class="tel">+7 [8652] 66 14 65</div>
                </a>
                <div class="tel">
                    <a href="https://wa.me/79383019005" target=_blank>+7 [968] 266 14 65</a>
                </div>
            </div>
            <a href="" target="_blank" class="email">stvpechati@mail.ru</a>
        </div>
    </div>
    <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
        <div class="nav-cont w-container">
            <nav role="navigation" class="nav-menu w-nav-menu">
                <a class="nav-link w-nav-link" title="" target="_self" href="/#price">
                    Цены на печати
                </a>
                <a class="nav-link w-nav-link" title="" target="_self" href="/#dostavka">
                    Доставка
                </a>
                <div data-ix="" class="w-dropdown">
                    <div class="nav-link w-dropdown-toggle">
                        <div>Услуги</div>
                        <div class="icon-2 w-icon-dropdown-toggle"></div>
                    </div>
                    <nav class="dropdown-list w-dropdown-list">
                        <a class="dd-link w-dropdown-link w--current" title="" target="_self" href="/">
                            Печати и штампы
                        </a>
                        <a class="dd-link w-dropdown-link" title="" target="_self" href="/ecp">
                            Электронная подпись
                        </a>
                        <a class="dd-link w-dropdown-link" title="" target="_self" href="/registration">
                            Регистрация ИП/ООО
                        </a>
                    </nav>
                </div>
                <a class="nav-link w-nav-link" title="" target="_self" href="/#kakzakazat">
                    Как заказать
                </a>
                <a class="nav-link w-nav-link" title="" target="_self" href="/#kontakta">
                    Контакты
                </a>
            </nav>
            <div data-product="Обратный звонок" class="button popup-form">
                ОБРАТНЫЙ ЗВОНОК
            </div>
            <div class="menu-but w-nav-button">
                <div class="icon w-icon-nav-menu"></div>
            </div>
        </div>
    </div>
</div>

<?= $content ?>

<div id="kontakta" class="footer">
    <h2 class="footer-h2">Контакты</h2>
    <div class="footer-tel">
        <a href="tel:78652589005" target=_blank>
            <span style="color: #f1f1f1; font-size: 27px">+7 [8652] 66 14 65</span>
        </a>
    </div>
    <div class="footer-tel viber">
        <a href="https://wa.me/79383019005" target=_blank>
            <span style="color: #f1f1f1; font-size: 27px; margin-left: 20px;">+7 968 266 14 65</span>
        </a>
    </div>
    <div class="footer-tel footer-email">
        stvpechati@mail.ru
    </div>
    <div class="main-addre">
        <p>
            <strong>Адреса:</strong>
        </p>
        <p id="u7988-4" class="ts2">г. <span id="u7988-2">Ставрополь</span>, ул. Тухачевского 26/5, 4 подъезд, цокольный этаж, офис 1</p>
    </div>
    <div id="ofisi" class="addr-block">
        <div class="adress">
            <div class="addr-head">
                Пункт приема заказа
            </div>
            <div class="addr-txt">
                <p>&nbsp;</p>
                <p>
                    Адрес: г. Ставрополь, ул. Дзержинского 159
                    <br/>
                    Телефон: +7 [8652] 66 14 65
                </p>
                <p>&nbsp;</p>
                <div id="u3340-15" class="zagol clearfix grpelem" data-muse-uid="U3340" data-muse-type="txt_frame">
                    <p id="u3340-13">
                </div>
                <div id="u3449-4" class="we_txt clearfix grpelem" data-muse-uid="U3449"
                     data-muse-type="txt_frame"></div>
                <p>&nbsp;</p>
            </div>
        </div>
        <div class="adress">
            <div class="addr-head">
                Пункт приема заказа
            </div>
            <div class="addr-txt">
                <p>&nbsp;</p>
                <p>
                    Адрес: г. Ставрополь, пр. Кулакова 27/2
                    <br/>
                    Телефон: +7 [8652] 66 14 65
                </p>
            </div>
        </div>
        <div class="adress">
            <div class="addr-head">
                Пункт приема заказа
            </div>
            <div class="addr-txt">
                <p>г. Ставрополь, ул. 50 лет ВЛКСМ 16/1</p>
                <p>Телефон: +7 [8652] 66 14 65</p>
            </div>
        </div>
    </div>
    <div wd_file="map.html">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aaf2b0f5a67814ef7319f698d36ed89a0512d2ac8d7264554315b20742a9a7505&width=100%25&height=400&lang=ru_UA&scroll=true">

        </script>
    </div>
    <div class="footer-tel credit">
    </div>
    <div class="text-block">
        <a href="/politics" class="link">Политика конфиденциальности</a>
    </div>
    <div class="text-block-2">
        ИП Секушина Зинаида Модестовна ИНН: 263503761233 ОГРНИП: 318265100037942
    </div>
    <div class="metrika"></div>
</div>
<!--[if lte IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->

<script>
    var pseudo_links = document.querySelectorAll(".pseudo-clearfy-link");
    for (var i = 0; i < pseudo_links.length; i++) {
        pseudo_links[i].addEventListener("click", function (e) {
            window.open(e.target.getAttribute("data-uri"));
        });
    }
</script>
<span aria-hidden="true" id="to_top_scrollup" class="dashicons dashicons-arrow-up-alt2">
    <span class="screen-reader-text">Прокрутка вверх</span>
</span>
<script type='text/javascript' src='/js/core.min.js' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='/js/widget.min.js' id='jquery-ui-widget-js'></script>
<script type='text/javascript' src='/js/mouse.min.js' id='jquery-ui-mouse-js'></script>
<script type='text/javascript' src='/js/slider.min.js' id='jquery-ui-slider-js'></script>
<script type='text/javascript' id='jquery-lazyloadxt-js-extra'>
    /* <![CDATA[ */
    var a3_lazyload_params = {"apply_images": "1", "apply_videos": "1"};
    /* ]]> */
</script>
<script type='text/javascript' src='/js/jquery.lazyloadxt.extra.min.js' id='jquery-lazyloadxt-js'></script>
<script type='text/javascript' src='/js/jquery.lazyloadxt.srcset.min.js' id='jquery-lazyloadxt-srcset-js'></script>
<script type='text/javascript' id='jquery-lazyloadxt-extend-js-extra'>
    /* <![CDATA[ */
    var a3_lazyload_extend_params = {"edgeY": "0", "horizontal_container_classnames": ""};
    /* ]]> */
</script>
<script type='text/javascript' src='/js/jquery.lazyloadxt.extend.js' id='jquery-lazyloadxt-extend-js'></script>

<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/inputmask.js"></script>
<script type="text/javascript" src="/js/jquery.inputmask.js"></script>
<script type="text/javascript" src="/js/main.js?v=<?= mt_rand(1000,10000) ?>"></script>
<script type="text/javascript" src="/js/front.js"></script>
<script type="text/javascript" src="/js/common.js?v=<?= mt_rand(1000,10000) ?>"></script>

<script id="mailer" type="text/javascript">


/*
    jQuery(document).ready(function ($) {

        $('.w-form form[action = "/"]').submit(function (e) {

            e.preventDefault();

            action =
                'https://stvpechati.ru/wp-content/themes/pechpodp/mailer.php';
            cur_id = '#' + $(this).attr('id');

            $(cur_id).parent().find('.w-form-done,.w-form-fail').hide();

            cur_action = $(cur_id).attr('action');
            if (cur_action !== '/') {
                action = cur_action;
            }

            submit_input = $(cur_id).find('[type = submit]');
            submit_label = submit_input.val();
            if (submit_input.attr('data-wait') === 'Please wait...') {
                submit_input.val('Идет отправка...');
            } else {
                submit_input.val(submit_input.attr('data-wait'));
            }

            if ($(cur_id + ' [name=Форма]').is('input')) {
                $(cur_id).find('[name=Форма]').val($(cur_id).attr('data-name'));
            } else {
                $('<input type="hidden" data-name="Форма" name="Форма" value="' + $(cur_id).attr('data-name') + '">')
                    .prependTo(cur_id);
            }

            if ($(cur_id + ' [name=Запрос]').is('input')) {
                $(cur_id).find('[name=Запрос]').val(document.location.search);
            } else {
                $('<input type="hidden" data-name="Запрос" name="Запрос" value="' + document.location.search + '">')
                    .prependTo(cur_id);
            }

            if ($(cur_id + ' [name=Заголовок]').is('input')) {
                $(cur_id).find('[name=Заголовок]').val(document.title);
            } else {
                $('<input type="hidden" data-name="Заголовок" name="Заголовок" value="' + document.title + '">')
                    .prependTo(cur_id);
            }

            if ($(cur_id + ' [name=Страница]').is('input')) {
                $(cur_id).find('[name=Страница]').val(document.location.origin + document.location.pathname);
            } else {
                $('<input type="hidden" data-name="Страница" name="Страница" value="' + document.location.origin +
                    document.location.pathname + '">').prependTo(cur_id);
            }

            $('<input type="hidden" name="required_fields">').prependTo(cur_id);
            required_fields = '';

            required_fields = '';
            $(cur_id).find('[required=required]').each(function () {
                required_fields = required_fields + ',' + $(this).attr('name');
            });
            if (required_fields !== '') {
                $(cur_id).find('[name=required_fields]').val(required_fields);
            }

            var formData = new FormData($(cur_id)[0]);
            $.ajax({
                url: action,
                type: 'POST',
                processData: false,
                contentType: false,
                data: formData
            })
                .done(function (result) {

                    if (result === 'ERROR_RECAPTCHA') {
                        alert('Подтвердите, что вы не робот!');
                        submit_input.val(submit_label);
                        return;
                    }

                    if (!isJson(result)) {
                        console.log(result);
                        alert('Ошибка отправки!');
                        return;
                    }

                    result = JSON.parse(result);

                    if (result['success_msg'] != '') {
                        $(cur_id).parent().find('.w-form-done').html('<div>' + result['success_msg'] + '</div>');
                    }

                    $(cur_id).parent().find('.w-form-fail').html('<div>' + result['error_msg'] + '</div>');

                    submit_input.val(submit_label);

                    if (result['status'] == 'success') {
                        if (result['redirect'] !== '' && result['redirect'] !== '/-') {
                            if (result['redirect_new_tab']) {
                                window.open(result['redirect']);
                            } else {
                                document.location.href = result['redirect'];
                            }
                            return (true);
                        }
                        $(cur_id).siblings('.w-form-fail').hide();
                        replay_class = '.w-form-done';
                        replay_msg = result['success_msg'];
                    } else {
                        $(cur_id).siblings('.w-form-done').hide();
                        if (result['error'] === 'ERROR_REQUIRED') {
                            replay_msg = 'Не заполнено обязательное поле!'
                        } else {
                            replay_msg = result['error_msg'];
                        }
                        replay_class = '.w-form-fail';
                    }

                    replay_div = $(cur_id).siblings(replay_class);
                    replay_div.show();
                    if (result['hide']) {
                        $(cur_id).hide();
                    }

                    result['delay'] = parseInt(result['delay']);
                    if (result['delay'] !== 0) {
                        if (result['hide_lbox'] && result['status'] == 'success') {
                            $('.' + result['lbox_class'].replace(/,/g, ",.").replace(/ /g, "")).delay(result['delay'])
                                .fadeOut();
                        }
                        replay_div.delay(result['delay']).fadeOut();
                        $(cur_id).delay(result['delay'] + 1000).fadeIn();
                    }

                    if (result['status'] == 'success') {
                        $(cur_id).trigger("reset");
                        $(cur_id).find('div[for]').hide();
                    }
                });
        });

        $('label[for^=file]').each(function () {
            file_id = $(this).attr('for');
            $(this).after('<input name="file[]" type="file" id="' + file_id + '" multiple style="display:none;">');
            $(this).siblings('div[for]').hide();
            $('input#' + file_id).change(function () {
                file_name = $(this).val().replace('C:\\fakepath\\', "");
                file_text = $(this).siblings('div[for]').text().replace('%file%', file_name);
                if (file_text.trim() === '') file_text = 'Файл прикреплен';
                $(this).siblings('div[for]').text(file_text).show();
            });
        });
    });
*/
</script>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage(); ?>
