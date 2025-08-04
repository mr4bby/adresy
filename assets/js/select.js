document.addEventListener('DOMContentLoaded', function () {
    const $ = jQuery;

    const $modal = $('#adresy-modal');

    const commonOpts = {
        width: '100%',
        containerCssClass: 'adresy-s2-min',
        dropdownCssClass: 'adresy-s2-min-dropdown',
        dropdownParent: $modal.length ? $modal : $(document.body),
        dropdownPosition: 'below',
        dir: $('html').attr('dir') === 'rtl' ? 'rtl' : 'ltr',
    };

    $('.adresy-modal-middle-select-state').select2($.extend({}, commonOpts, {
        placeholder: 'Choose City'
    }));

    $('.adresy-modal-bottom-select-country').select2($.extend({}, commonOpts, {
        placeholder: 'Choose Country'
    }));

});

document.addEventListener('DOMContentLoaded', function () {
    const $ = jQuery;

    const $modalMobile = $('#adresy-modal-mobile');
    const $dropdownParent = $('.adresy-modal-city-mobile').length ? $('.adresy-modal-city-mobile') : $(document.body);
  
    const mobileOpts = {
        width: '100%',
        containerCssClass: 'adresy-s2-min-mob',
        dropdownCssClass: 'adresy-s2-min-dropdown-mob',
        dropdownParent: $modalMobile.length ? $modalMobile : $(document.body),
        dropdownPosition: 'below',
        dir: $('html').attr('dir') === 'rtl' ? 'rtl' : 'ltr',
    };

    $('.adresy-modal-middle-select-state-mobile').select2($.extend({}, mobileOpts, {
        placeholder: 'Select City',
        dropdownParent: $dropdownParent
    }));


});

