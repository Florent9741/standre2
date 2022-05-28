require('./bootstrap');
import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.start()

var stopVideo = function ( element ) {
    console.log('stop-ok');
	var iframe = element.querySelector( 'iframe');
	var video = element.querySelector( 'video' );
	if ( iframe ) {
		var iframeSrc = iframe.src;
		iframe.src = iframeSrc;
	}
	if ( video ) {
		video.pause();
	}
};
