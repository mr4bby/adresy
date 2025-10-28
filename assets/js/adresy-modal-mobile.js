document.addEventListener('DOMContentLoaded', function () {

    const mobile_trigger = document.querySelector('.mobile-only .adresy-open-modal');
    const mobile_modal = document.querySelector('.adresy-modal-mobile');
    const mobile_conent = document.querySelector('.adresy-modal-content-mobile');
    const close_mobile = document.querySelector('.adresy-close-modal-mobile');
    const backdrop_mobile = document.querySelector('.adresy-modal-backdrop-mobile');
    const mobile_city_open_modal = document.querySelector('.adresy-select-city-mobile');
    const mobile_city_modal = document.querySelector('.adresy-modal-city-mobile');
    const close_city_modal = document.querySelector('.adresy-close-modal-mobile-city');
    const city_back_modal = document.querySelector('.adresy-modal-city-back');
    const mobile_country_open_modal = document.querySelector('.adresy-select-country-mobile');
    const mobile_country_modal = document.querySelector('.adresy-modal-country-mobile');
    const close_country_modal = document.querySelector('.adresy-close-modal-mobile-country');
    const country_back_modal = document.querySelector('.adresy-modal-country-back');
    const mobile_selectCountry = document.getElementById('adresy-select-country-manualy-mobile');
    const activeAddress = document.querySelector('.adresy-modal-top-body-mobile .adresy-modal-after .adresy-shipping-address.active');
    const line1_p = document.querySelector('.mobile-only .adresy-modal-ingress-block .adresy-line-1 p');
    const line2 = document.querySelector('.mobile-only .adresy-modal-ingress-block .adresy-line-2');
    const selectstate = document.getElementById('adresy-select-city-manualy-mobile');
    const selectcitymanual = document.getElementById('adresy-submit-selected-city-mobile');
    const selectCountry = document.getElementById('adresy-select-country-manualy-mobile');
    const shippingAddress = document.querySelector('.adresy-modal-top-body-mobile .adresy-modal-after .adresy-shipping-address');
    const geo_location = document.querySelector('.adresy-select-current-loc-mobile');

    let isProgrammaticChange = false;

    if (window.innerWidth <= 768) {


        mobile_trigger.addEventListener('click', function (e) {
            e.preventDefault();
            mobile_modal.classList.add('active');
            mobile_conent.classList.add('active');
            backdrop_mobile.classList.add('active');
        });
        [close_mobile, backdrop_mobile].forEach(el => {
            if (el) {
                el.addEventListener('click', function () {
                    mobile_conent.classList.remove('active');
                    mobile_modal.classList.remove('active');
                    backdrop_mobile.classList.remove('active');
                });
            }
        });


        mobile_city_open_modal.addEventListener('click', function (e) {
            e.preventDefault();
            mobile_city_modal.style.visibility = 'visible';
            mobile_city_modal.style.display = 'block';
        });

        close_city_modal.addEventListener('click', function (e) {
            e.preventDefault();
            mobile_city_modal.style.display = 'none';
            mobile_city_modal.style.visibility = "hidden";
            mobile_conent.classList.remove('active');
            mobile_modal.classList.remove('active');
            backdrop_mobile.classList.remove('active');
        });

        city_back_modal.addEventListener('click', function (e) {
            e.preventDefault();
            mobile_city_modal.style.visibility = "hidden";
            mobile_city_modal.style.display = 'none';
        })


        mobile_country_open_modal.addEventListener('click', function (e) {
            e.preventDefault();
            mobile_country_modal.style.visibility = 'visible';
            mobile_country_modal.style.display = 'block';
        });

        close_country_modal.addEventListener('click', function (e) {
            e.preventDefault();
            mobile_country_modal.style.display = 'none';
            mobile_country_modal.style.visibility = "hidden";
            mobile_conent.classList.remove('active');
            mobile_modal.classList.remove('active');
            backdrop_mobile.classList.remove('active');
        });

        country_back_modal.addEventListener('click', function (e) {
            e.preventDefault();
            mobile_country_modal.style.visibility = "hidden";
            mobile_country_modal.style.display = 'none';
        });



        if (mobile_selectCountry) {
            jQuery(document).ready(function ($) {
                $('.adresy-modal-bottom-select-country-list').on('change', function () {
                    if (isProgrammaticChange) {
                        isProgrammaticChange = false;
                        return;
                    }

                    var mobile_country = $('input[name="adresy_country_mobile"]:checked').val();

                    if (activeAddress) {
                        activeAddress.classList.remove('active');
                    }

                    fetch(adresy_ajax_mob.ajax_url, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                        body: new URLSearchParams({
                            action: 'adresy_save_country_location',
                            nonce: adresy_ajax.nonce,
                            country: mobile_country
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
                                    if (data.data && data.data.label) {
                                        line2.textContent = data.data.label + ' ' + (data.data.icon || '');
                                    }

                                }
                                mobile_modal.classList.remove('active');
                                mobile_conent.classList.remove('active');
                                backdrop_mobile.classList.remove('active');
                                mobile_country_modal.style.visibility = "hidden";
                                mobile_country_modal.style.display = 'none';

                            } else {
                                alert('error: ' + (data.data && data.data.message ? data.data.message : data.data));
                            }
                        });

                });
            });
        }

    }

    if (selectcitymanual) {
        selectcitymanual.addEventListener('click', function (e) {
            e.preventDefault();
            const state = selectstate.value;


            if (activeAddress) {
                activeAddress.classList.remove('active');
            }
            fetch(adresy_ajax_mob.ajax_url, {
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
                            if (data.data && data.data.label) {
                                line2.textContent = data.data.label + ' ' + (data.data.icon || '');
                            }

                        }
                        mobile_modal.classList.remove('active');
                        mobile_conent.classList.remove('active');
                        backdrop_mobile.classList.remove('active');
                        mobile_city_modal.style.visibility = "hidden";
                        mobile_city_modal.style.display = 'none';
                    } else {

                        const targetDiv = document.querySelector('.adresy-modal-middle-select');
                        const errorText = document.createElement('div');
                        errorText.className = 'adresy-error-message';
                        errorText.style.color = 'red';
                        errorText.textContent = (data.data && data.data.message) ? data.data.message : data.data;
                        const oldError = targetDiv.querySelector('.adresy-error-message');
                        if (oldError) oldError.remove();
                        targetDiv.appendChild(errorText);
                    }
                });
        });
    }
    if (shippingAddress) {
        shippingAddress.addEventListener('click', function () {
            fetch(adresy_ajax_mob.ajax_url, {
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
                            line1_p.innerHTML = data.data.line1;
                        }

                        if (line2) {
                            line2.innerHTML = data.data.line2;
                        }

                        shippingAddress.classList.add('active');
                        mobile_modal.classList.remove('active');
                        mobile_conent.classList.remove('active');
                        backdrop_mobile.classList.remove('active');
                    } else {
                        console.log('error: ' + data.data);
                    }
                });
        });
    }

    if (geo_location) {
        geo_location.addEventListener('click', function () {

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    const lat = position.coords.latitude;
                    const lng = position.coords.longitude;
                    fetch(adresy_ajax_mob.ajax_url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: new URLSearchParams({
                            action: 'adresy_find_address',
                            nonce: adresy_ajax.nonce,
                            lat: lat,
                            lang: lng
                        })
                    })
                        .then(res => res.json())
                        .then(data => {
                            console.log(data)

                            if (data.success) {
                                if (line2) {
                                    if (activeAddress) {
                                        activeAddress.classList.remove('active');
                                    }
                                    if (line1_p) {
                                        line1_p.textContent = '';
                                    }
                                    if (data.data) {
                                        var country = data.data.country || '';
                                        var state = data.data.state || '';
                                        var icon = data.data.icon || '';
                                        line2.textContent = (country + (country && state ? ', ' : '') + state + ' ' + icon).trim();
                                    }

                                }
                                mobile_modal.classList.remove('active');
                                mobile_conent.classList.remove('active');
                                backdrop_mobile.classList.remove('active');
                            } else {

                                console.log('error: ' + data.data);
                            }
                        });
                }, function (error) {
                    console.error('error:', error.message);
                });
            } else {
                console.warn('Your browser dosn`t support geo location');
            }

        });
    }

});