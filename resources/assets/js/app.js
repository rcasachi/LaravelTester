require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';

Vue.use(Buefy);

// var app = new Vue({
//     el: '#app',
//     data: {}
// });

$(document).ready(function(){
  $('button.dropdown').hover(function(){
    $(this).toggleClass('is-open');
  });
});
