$(document).ready(function(){
//Effect Object for page effects
var e = Effect;
	//Scroll smooth on link clicked
	e.smooth_scroll(1000);
	//Side menu toggle
	e.side_menu_toggle('.btn-menu','.side-menu',false);
	//Show the page if the document is loaded
	e.page_loaded(".app");
});

