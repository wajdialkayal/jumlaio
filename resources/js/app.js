/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import 'bootstrap-vue/dist/bootstrap-vue.css'
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)



Vue.component('pageposts-component', require('./components/PagePostsComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
/* ================================================================================================================================================================== */
/* ==================[all]================== */
$("#wrapper").addClass(localStorage.getItem("sidbarClass"))

 // top bar loader
 topbar.config({
    autoRun      : true,
    barThickness : 5,
    barColors    : {
        '0'      : 'rgba(236, 29, 37)',
        '.25'    : 'rgba(236, 29, 37)',
        '.50'    : 'rgba(236, 29, 37)',
        '.75'    : 'rgba(236, 29, 37)',
        '1.0'    : 'rgba(236, 29, 37)'
    },
    shadowBlur   : 10,
    shadowColor  : 'rgba(0,   0,   0,   .6)'
});
topbar.show();

$(document).ready(function() {
    topbar.hide();
    $('[data-toggle="tooltip"]').tooltip({ trigger: "hover" });
    $('[data-toggle="tab"]').tooltip({ trigger: "hover" });
});
var t = $(window).height() / 2;
$(window).on("scroll", function() {
    $(this).scrollTop() > t ? $("#back_to_top").css("display", "flex") : $("#back_to_top").css(
        "display", "none")
}), $("#back_to_top").on("click", function() {
    $("html, body").animate({
        scrollTop: 0
    }, 0);
});



$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    let val =  $("#wrapper").hasClass('toggled') ? 'toggled' : ' ';
    // Set the localStorage
    localStorage.setItem('sidbarClass', val);
});