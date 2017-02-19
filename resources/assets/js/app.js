
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

$("#gallery").flickrGallery({
    Key: 'dd7e89c7f0c07a951c30b34d7a013486',
    Secret: 'd792124bcd9f09bb',
    User: '77604748@N07',
    PhotoSet: '72157665083778055',
    Speed   : 400,    //Speed of animations
    navigation  : 1,    //(true) <a href="http://www.jqueryscript.net/tags.php?/Navigation/">Navigation</a> (arrows)
    keyboard  : 1,    //(true) Keyboard navigation
    numberEl  : 1     //(true) Number elements,
});

$('.bxslider').bxSlider({
    captions:true,
    auto:true,
    pause:6000
});