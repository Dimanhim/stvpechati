const common = (function() {

    function init() {
        bind();
        initPlugins()
    }
    function bind() {
        $(document).on('click', '.popup-form', function(e) {
            e.preventDefault();
            let product = $(this).attr('data-product');
            $('.form-head-o').text(product);
            $('#orderform-product').val(product)
            showModalForm();
        }).on('keyup', '.form-inner input', function() {
            let form = $(this).closest('form');
            validateForm(form)
        }).on('click', '.form-inner button[type="submit"]', function(e) {
            e.preventDefault();
            $(this).text('Идет отправка...');
            let form = $(this).closest('form');
            submitForm(form)
        }).on('click', '.modal__cross', function(e) {
            e.preventDefault();
            $('.modal').modal('hide');
        }).on('click', '.close-but, .lbox-bg', function(e) {
                e.preventDefault();
                $('.pop-up-wrapp').removeClass('open')
                $('.pop-up-wrapp-success').removeClass('open')
            });
    }

    function validateForm(form) {
        clearInfoMessages();
        let data = form.serialize();
        $.ajax({
            url: '/ajax/validate-form',
            type: 'POST',
            data: data,
            success: function (res) {
                if(res.error == 0) {
                    enableFormBtn(form)
                }
                else if(res.message != null) {
                    displayErrorMessage(res.message, form)
                    disableFormBtn(form)
                }
                else {
                    disableFormBtn(form)
                }
            },
            error: function () {
                console.log('Error!');
            }
        });
    }

    function submitForm(form) {
        let data = form.serialize();
        $.ajax({
            url: '/ajax/submit-form',
            type: 'POST',
            data: data,
            success: function (res) {
                if(res.error == 0) {
                    hideModalForm()
                    showResultModal()
                }
                else {
                    hideModalForm()
                    showResultModal('Ошибка отправки формы', 'Пожалуйста, попробуйте позднее')
                    disableFormBtn(form)
                }
            },
            error: function () {
                console.log('Error!');
            }
        });
    }



    function enableFormBtn(form) {
        let btn = form.find('button[type="submit"]')
        btn.removeAttr('disabled').removeClass('btn-disabled');
    }

    function disableFormBtn(form) {
        let btn = form.find('button[type="submit"]')
        btn.attr('disabled', true).addClass('btn-disabled');
    }

    function showModalForm() {
        $('.pop-up-wrapp').addClass('open')
    }

    function hideModalForm() {
        $('.pop-up-wrapp').removeClass('open')
    }

    function showResultModal() {
        $('.pop-up-wrapp-success').addClass('open')
    }

    function clearInfoMessages() {
        $('.info-message').text('').removeClass('error').removeClass('success');
    }
    function displayErrorMessage(message, form) {
        form.find('.info-message').addClass('error').text(message);
    }

    function initPlugins() {
        $(".phone-mask").inputmask({"mask": "+7 (999) 999-99-99"});
    }

    return {
        init: function() {
            init()
        }
    }

})()
common.init()








