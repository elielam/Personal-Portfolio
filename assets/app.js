// ### VENDORS
import 'bootstrap';
import './fontawesome-free-5.0.6/js/fontawesome-all.min';
import 'particles.js';

// ### SCSS
require('./app.scss');

// ### COMPONENTS
require('./js/security');
require('./js/dashboard');
require('./js/portfolio');

// ### POPPER JS
$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});

// ### PARTICLES JS LOAD
particlesJS.load('particles-js', '~node_modules/particle.js/demo/particles.json', function() {
    console.log('callback - particles.js config loaded');
});

