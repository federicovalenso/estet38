
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
const WOW = require('wowjs');
window.wow = new WOW.WOW({ live: false }).init();

$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#adminSidebar').toggleClass('active');
        $(this).toggleClass('active');
    });
});

Vue.component('example-component', require('./components/ExampleComponent.vue'));
const app = new Vue({
    el: '#app'
});

