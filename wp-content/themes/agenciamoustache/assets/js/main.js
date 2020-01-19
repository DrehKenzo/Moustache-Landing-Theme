$(document).ready(function() {
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 3,
        nav: false
      },
      1000: {
        items: 3,
        nav: true,
        loop: false,
        margin: 20
      }
    }
  })
})

jQuery(document).ready(function($){
  $('span.date, input.date').mask('00/00/0000');
  $('input.cep').mask('00000-000');
  $('input.phone').mask(PhoneMaskBehavior, nonoOptions);
});

var PhoneMaskBehavior = function (val) {
  return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
nonoOptions = {
  onKeyPress: function(val, e, field, options) {
      field.mask(PhoneMaskBehavior.apply({}, arguments), options);
    }
};
