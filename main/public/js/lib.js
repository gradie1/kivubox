//This file holds the classes and function that can be reused
//Need jquery to be called
var Effect = {
	//scroll to section smoothly
	smooth_scroll : function(delay){
		$('a[href^="#"]').click(function(e) {
			$('html,body').animate({ scrollTop: $(this.hash).offset().top}, delay);
			return false;
			e.preventDefault();
		});
	},
	//Hide and show side menu
	side_menu_toggle : function(menu,content,slide){
		$(menu).click(function(){
			if(slide)
				$(content).toggle();
			else
				$(content).slideToggle();
		});
		$('section').click(function(){
			if(slide)
				$(content).hide();
			else
				$(content).slideUp();
		});
	},
	//Stop loading page if the page is loaded
	page_loaded : function(app){
		$(window).on('load',function(){
			$('.loading').fadeOut();
			$(app).fadeIn();
		});
	},
	//Count input characters
	input_count : function(input, target, txt){
		var a = 0;
		$(input).keyup(function(){
			a = $(input).val().length;
			$(target).html(a+' '+txt);
		});

	}
}
//Effect Object for page effects
var e = Effect;
//Side menu toggle
	e.side_menu_toggle('.btn-menu','.side-menu',false);