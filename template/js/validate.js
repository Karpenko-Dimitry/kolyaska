'use strict';

(function () {

    let userName = document.querySelector('.checkout-name input');
    let userPhone = document.querySelector('.checkout-phone input');
    let userError = document.querySelector('.error-name');
    let phoneError = document.querySelector('.error-phone');

    if (userName) {
        userName.addEventListener('blur', checkName);
        userPhone.addEventListener('blur', checkPhone);

        function checkName() {

            if (userName.value.length < 3) {
                userError.innerHTML = 'Ввведите правильно имя';
                userName.style.background = '#a8cefd';
                userName.focus();
            } else {
                userError.innerHTML = '';
                userName.style.background = '';
            }
        }

        function checkPhone() {
            if (userPhone.value.length < 9) {
                phoneError.innerHTML = 'Ввведите правильный телефон';
                userPhone.style.background = '#a8cefd';
                userPhone.focus();
            } else {
                phoneError.innerHTML = '';
                userPhone.style.background = '';
            }
        }
    }


})();