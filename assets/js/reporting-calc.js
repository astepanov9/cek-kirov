const reportingPage = () => {

    // Калькулятор Тариф для ОСНО (1 год) ИП
    const calcOsnoIP = () => {
        const selectIP = document.querySelectorAll('.reporting__item .reporting__item-buttons button.selectIP');
        let countIP = 0;

        // Прайс Тариф для ОСНО (1 год) ИП
        const priceIP = {
            price: 1200, // Выбрано что-то одно или ничего не выбрано
            priceTwo: 1500, // Выбрано больше одного
        };

        // Изначально отображаем
        reportPriceOne.innerText = 'Стоимость: ' + priceIP.price + '₽';

        for (let i = 0, length = selectIP.length; i < length; i++) {
            selectIP[i].addEventListener('click', selectIPCalc);

            function selectIPCalc() {
                if (this.classList.contains('active')) {
                    countIP--;
                } else {
                    countIP++;
                };

                if (countIP == 1 || countIP == 0) {
                    reportPriceOne.innerText = 'Стоимость: ' + priceIP.price + '₽';
                } else if (countIP > 1) {
                    reportPriceOne.innerText = 'Стоимость: ' + priceIP.priceTwo + '₽';
                }
            };
        };
    }

    calcOsnoIP();

    // Калькулятор Тариф для ОСНО (1 год) ЮЛ
    const calcOsnoUL = () => {
        const selectUL = document.querySelectorAll('.reporting__item .reporting__item-buttons button.selectUL');
        let countUL = 0;

        // Прайс Тариф для ОСНО (1 год) ЮЛ
        const priceUL = {
            price: 1300, // Выбрано что-то одно или ничего не выбрано
            priceTwo: 2400, // Выбрано 2 варианта
            priceThree: 3000, // Выбрано 3 варианта
            priceFour: 3900, // Выбрано 4 варианта
        };

        // Изначально отображаем
        reportPriceFive.innerText = 'Стоимость: ' + priceUL.price + '₽';

        for (let i = 0, length = selectUL.length; i < length; i++) {
            selectUL[i].addEventListener('click', selectULCalc);

            function selectULCalc() {
                if (this.classList.contains('active')) {
                    countUL--;
                } else {
                    countUL++;
                };

                if (countUL == 1 || countUL == 0) {
                    reportPriceFive.innerText = 'Стоимость: ' + priceUL.price + '₽';
                } else if (countUL == 2) {
                    reportPriceFive.innerText = 'Стоимость: ' + priceUL.priceTwo + '₽';
                } else if (countUL == 3) {
                    reportPriceFive.innerText = 'Стоимость: ' + priceUL.priceThree + '₽';
                } else if (countUL == 4) {
                    reportPriceFive.innerText = 'Стоимость: ' + priceUL.priceFour + '₽';
                }
            };
        };
    }

    calcOsnoUL();


    // Калькулятор на все остальное
    const reportItemBtn = document.querySelectorAll('.reporting__item .reporting__item-buttons button');

    for (let i = 0, length = reportItemBtn.length; i < length; i++) {
        reportItemBtn[i].addEventListener('click', reportCalc);

        function reportCalc() {
            if (this.classList.contains('selectIP') || this.classList.contains('selectUL')) {
                this.classList.toggle('active');
            };

            switch (true) {
                case this.hasAttribute('data-priceTwo'):
                    reportPriceTwo.innerText = 'Стоимость: ' + this.getAttribute('data-priceTwo') + '₽';
                    break;
                case this.hasAttribute('data-priceThree'):
                    reportPriceThree.innerText = 'Стоимость: ' + this.getAttribute('data-priceThree') + '₽';
                    break;
                case this.hasAttribute('data-priceFour'):
                    reportPriceFour.innerText = 'Стоимость: ' + this.getAttribute('data-priceFour') + '₽';
                    break;
                case this.hasAttribute('data-priceSix'):
                    reportPriceSix.innerText = 'Стоимость: ' + this.getAttribute('data-priceSix') + '₽';
                    break;
                case this.hasAttribute('data-priceSeven'):
                    reportPriceSeven.innerText = 'Стоимость: ' + this.getAttribute('data-priceSeven') + '₽';
                    break;
                case this.hasAttribute('data-priceEight'):
                    reportPriceEight.innerText = 'Стоимость: ' + this.getAttribute('data-priceEight') + '₽';
                    break;
                case this.hasAttribute('data-priceNine'):
                    reportPriceNine.innerText = 'Стоимость: ' + this.getAttribute('data-priceNine') + '₽';
                    break;
                case this.hasAttribute('data-priceTen'):
                    reportPriceTen.innerText = 'Стоимость: ' + this.getAttribute('data-priceTen') + '₽';
                    break;
                case this.hasAttribute('data-priceEleven'):
                    reportPriceEleven.innerText = 'Стоимость: ' + this.getAttribute('data-priceEleven') + '₽';
                    break;
                case this.hasAttribute('data-priceTwelwe'):
                    reportPriceTwelwe.innerText = 'Стоимость: ' + this.getAttribute('data-priceTwelwe') + '₽';
                    break;
                case this.hasAttribute('data-priceThirteen'):
                    reportPriceThirteen.innerText = 'Стоимость: ' + this.getAttribute('data-priceThirteen') + '₽';
                    break;
                case this.hasAttribute('data-priceFourteen'):
                    reportPriceFourteen.innerText = 'Стоимость: ' + this.getAttribute('data-priceFourteen') + '₽';
                    break;
                case this.hasAttribute('data-priceSixteen'):
                    reportPriceSixteen.innerText = 'Стоимость: ' + this.getAttribute('data-priceSixteen') + '₽';
                    break;
                case this.hasAttribute('data-priceSeventeen'):
                    reportPriceSeventeen.innerText = 'Стоимость: ' + this.getAttribute('data-priceSeventeen') + '₽';
                    break;
            };

        };
    };
};

reportingPage();