$(document).ready(function() {
    $(".owl-carousel").owlCarousel();
});
const Hours = document.getElementById('hours');
const TDC = document.getElementById('TDC');
const MPDC = document.getElementById('MPDC');
const PDC = document.getElementById('PDC');
const PC = document.getElementById('PC');

if (TDC) {
    Hours.value = " 15Hours";
}
if (MPDC) {
    Hours.value = " 8Hours";
}
if (PDC) {
    Hours.value = " 8Hours";
}
if (PC) {
    Hours.value = " 8Hours";
}

$('.alert').alert()