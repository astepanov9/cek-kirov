(function ($) {
    "use strict";

    //Обработчик на кнопку, открывающую форму
    $('.modal-btn').on("click", function () {
        // Добавляем блок для отслеживания тарифа
        $('.wpcf7-form').append("<div id='yourClientTarrifToBitrix'></div>");
        $('#yourClientTarrifToBitrix').attr('hidden', true);
        $('#yourClientTarrifToBitrix').attr('data-buttonid', 'empty button');
        //Установка атрибута 'data-buttonid' (Идентиификатор кнопки для Битрикса)
        $('#yourClientTarrifToBitrix').attr('data-buttonid', $(this).attr('data-buttonid'));
    });

    // Ищем блок с формой, имеющий класс wpcf7 (его имеют все div с формой)
    let wpcf7Elm = document.querySelector('.wpcf7');
    // Мониторим событие wpcf7submit у выбранного блока
    wpcf7Elm.addEventListener('wpcf7mailsent', function (e) {
        //Отключаем обработку формы по умолчанию
        e.preventDefault();
        //Находим форму из которой пришел эвент
        let $formEl = jQuery(e.target).closest("form");
        let clientName = $formEl.find('#formGroupExampleInput').val();
        let clientPhone = $formEl.find('#formGroupExampleInput2').val();
        let clientComment = $formEl.find('#formGroupExampleInput3').val();
        let clientTarrif = $formEl.find('#yourClientTarrifToBitrix').attr("data-buttonid");
        //Отправляем заявку в битрикс
        createBitrixLeadRequest(clientName, clientPhone, clientComment, clientTarrif);
        console.log('sent ✔');
    }, false);

    //Отправка запроса о заявке в Битрикс
    let createBitrixLeadRequest = (clientName, clientPhone, clientComment, clientTarrif) => {
        //Отправка Лида в Битрикс
        jQuery.post(
            add_info.templateUrl + "/backend/bitrixLead.php",
            {
                NAME: clientName,
                PHONE_MOBILE: clientPhone,
                COMMENTS: clientComment,
                //Тариф - определение какая именно кнопка на была нажата
                UF_CRM_1563785863: clientTarrif,
                //Метки источника трафика
                UTM_CEK_ADV: cekUTMModule.getBitrixUTMs()
            });
    };

})(jQuery);
