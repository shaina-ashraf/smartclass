$(function(){
    if ((document.location.host.indexOf('.dev') > -1) || (document.location.host.indexOf('modernui') > -1) ) {
        $("<script/>").attr('src', 'js/smartclassroom/smartclassroom-loader.js').appendTo($('head'));
    } else {
        $("<script/>").attr('src', 'js/smartclassroom.min.js').appendTo($('head'));
    }
})