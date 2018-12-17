$(function() {
  var body = $('body');
  var backgrounds = ['/img/head/6.jpg', '/img/head/7.jpg', '/img/head/8.jpg', '/img/head/9.jpg', '/img/head/10.jpg', '/img/head/11.jpg', '/img/head/14.jpg'];
var current = 0;

function nextBackground() {
  body.css(
   'background-image',
    backgrounds[current = ++current % backgrounds.length]
 );

 setTimeout(nextBackground, 5000);
 }
 setTimeout(nextBackground, 5000);
   body.css('background-image', backgrounds[0]);
 });
