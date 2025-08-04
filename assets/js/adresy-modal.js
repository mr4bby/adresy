document.addEventListener('DOMContentLoaded', function () {
    const desktop_trigger = document.querySelector('.desktop-only .adresy-open-modal');
    const desktop_modal = document.querySelector('.adresy-modal');
    const close = document.querySelector('.adresy-close-modal');
    const backdrop = document.querySelector('.adresy-modal-backdrop');
    const selectcitymanual = document.getElementById('adresy-submit-selected-city');
    const selectstate = document.getElementById('adresy-select-city-manualy');
    const selectCountry = document.getElementById('adresy-select-country-manualy');
    const shippingAddress = document.querySelector('.desktop-only .adresy-modal-after .adresy-shipping-address');
    const activeAddress = document.querySelector('.adresy-modal-after .adresy-shipping-address.active');
    const line1_p = document.querySelector('.desktop-only .adresy-modal-ingress-block .adresy-line-1 p');
    const line2 = document.querySelector('.desktop-only .adresy-modal-ingress-block .adresy-line-2');
    let isProgrammaticChange = false;


    if (window.innerWidth >= 768) {

        desktop_trigger.addEventListener('click', function (e) {
            e.preventDefault();
            desktop_modal.classList.add('active');
        });
        [close, backdrop].forEach(el => {
            if (el) {
                el.addEventListener('click', function () {
                    desktop_modal.classList.remove('active');

                });
            }
        });



    if (selectcitymanual) {
        selectcitymanual.addEventListener('click', function (e) {
            e.preventDefault();
            const state = selectstate.value;


            if (activeAddress) {
                activeAddress.classList.remove('active');
            }
            fetch(adresy_ajax.ajax_url, {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({
                    action: 'adresy_save_state_location',
                    nonce: adresy_ajax.nonce,
                    state: state
                })
            })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        if (line2) {
                            if (line1_p) {
                                line1_p.textContent = '';
                            }
                            if (selectCountry) {
                                isProgrammaticChange = true;
                                jQuery(selectCountry).val('').trigger('change');
                            }
                            line2.textContent = '';
                            line2.textContent = data.data;

                        }
                        desktop_modal.classList.remove('active');
                    } else {

                        const targetDiv = document.querySelector('.adresy-modal-middle-select');
                        const errorText = document.createElement('div');
                        errorText.className = 'adresy-error-message';
                        errorText.style.color = 'red';
                        errorText.textContent = data.data;
                        const oldError = targetDiv.querySelector('.adresy-error-message');
                        if (oldError) oldError.remove();
                        targetDiv.appendChild(errorText);
                    }
                });
        });
    }

    if (selectCountry) {
        jQuery(document).ready(function ($) {
            $('.adresy-modal-bottom-select-country').on('change', function () {
                if (isProgrammaticChange) {
                    isProgrammaticChange = false;
                    return;
                }

                var country = $(this).val();
                if (activeAddress) {
                    activeAddress.classList.remove('active');
                }

                fetch(adresy_ajax.ajax_url, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: new URLSearchParams({
                        action: 'adresy_save_country_location',
                        nonce: adresy_ajax.nonce,
                        country: country
                    })
                })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            if (line2) {
                                if (line1_p) {
                                    line1_p.textContent = '';
                                }

                                if (selectstate) {
                                    $(selectstate).val('').trigger('change');
                                }
                                line2.textContent = '';
                                line2.textContent = data.data;

                            }
                            desktop_modal.classList.remove('active');
                        } else {
                            alert('error: ' + data.data);
                        }
                    });

            });
        });
    }
    if (shippingAddress) {
        shippingAddress.addEventListener('click', function () {
            fetch(adresy_ajax.ajax_url, {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({
                    action: 'adresy_save_shipping_location',
                    nonce: adresy_ajax.nonce,
                })
            })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        if (line1_p) {
                            line1_p.textContent = data.data.line1;
                        }

                        if (line2) {
                            line2.textContent = data.data.line2;
                        }

                        shippingAddress.classList.add('active');
                        desktop_modal.classList.remove('active');
                    } else {
                        console.log('error: ' + data.data);
                    }
                });
        });
    }
}   
});
