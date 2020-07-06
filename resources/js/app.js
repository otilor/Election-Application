/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue'


import Example from './components/ExampleComponent'
import Welcome from './components/Welcome'
import Polls from './components/Polls'


require('./bootstrap');


$(document).ready(function() {
    $("#home a:contains('Home')").parent().addClass('active');
    $("#about a:contains('Polls')").parent().addClass('active');
    $('ul.nav li.dropdown').hover(function() {
        $('.dropdown-menu', this).fadeIn();
    }, function() {
        $('.dropdown-menu', this).fadeOut('fast');
    })
})
window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('polls', require('./components/Polls.vue').default);
Vue.component('welcome', require('./components/Welcome.vue').default);
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//Vue.config.productionTip = false;
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

new Vue({
    el : '#app',
    components: {Welcome, Polls}
});
