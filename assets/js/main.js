(function($, window, undefined){
	

	var menuSubs = $('.flyOut');


	/* functions
	========================================= */
	
	//Set up layouts that require JS
	function layout(){
		//matching heights for nav elements
		$('.initiatives ul').each(function() {
			cols = $(this).find('a');
			cols.height('');
			
			var heights = cols.map(function (){
				return $(this).height();
			}).get(),
			
			maxHeight = Math.max.apply(null, heights);
			cols.height(maxHeight);
		});
		
		//show nav if not mobile
		if( breakPoint() != 'mobile'){
			$('.initiatives').show();
		}
		
	}
	
	//Return responsive breakPoint
	function breakPoint(){
		//getComputedStyle not supported by <ie9, but that doesn't matter because neither is ":after"
		var size = window.getComputedStyle(document.body,':after').getPropertyValue('content').replace( /"/g, '' ).replace( /'/g, '' );
		return size;
	}


	/* Doc ready
	========================================= */
	$(document).ready(function() {
		
			//Setup layout
			layout();
		
		
			//Mobile menu toggle
			$('#menuToggle').click(function(){
				$('.banner nav, .initiatives').slideToggle();
			});

		
			//collapsible container
			$('.collapsible-heading-toggle').click(function(){

				container = $(this).closest('.collapsible-container');
				content = container.find('.collapsible-content');
				comment = $(this).children('.visuallyhidden');
				me = $(this)
				
				if( container.hasClass('open') ){
					content.slideUp(
						"300", function() {
							container.removeClass('open');
							content.attr("aria-hidden","true");
							comment.html('show');
							me.attr("title","show more");
					});
				}
				else{
					content.slideDown(
						"300", function() {
							container.addClass('open');
							content.attr("aria-hidden","false");
							comment.html('hide');
							me.attr("title","hide");
					});
				}
				return false;
			});
		
		
			//Flyout (subnav) controls
			$('.initiatives a, .navButton').click(function(){
				
				flyoutS = '#'+$(this).attr('aria-controls');
				flyout = $(flyoutS);
			
				menuSubs.not(flyout).fadeOut(300).removeClass('open').attr('aria-hidden','true');
				
					if( flyout.hasClass('open')) {
						flyout.fadeOut(300);
						flyout.removeClass('open').attr('aria-hidden','true');
						$(this).removeClass('active').trigger('blur');
					}else{
						flyout.fadeIn(300,function(){
							flyout.find('.spacer').attr("tabindex","-1").focus();
						});
						flyout.addClass('open').attr('aria-hidden','false');
						$(this).addClass('active');
					}
					
					if( breakPoint() == 'mobile' ){
						/*Nav offset*/	navO = $(this).offset().top;
						/*Nav height*/	navH = $(this).outerHeight();
						/*Calc */		navT = (navO + navH);
						$('.flyOut').css('top',navT);
					}else{
						/*Nav offset*/	navO = $('.initiatives ul').offset().top;
						/*Nav height*/	navH = $('.initiatives ul').outerHeight();
						/*Calc */		navT = (navO + navH - 30);
						$('.flyOut').css('top',navT);
					}
				
				return false;
			});
		
	
	});
	
	
	/* Resize
	========================================= */
		window.onresize = function(event) {
			layout();
		};
	
	
	
	/* Click outside for nav close
	========================================= */
	
	$(document).mouseup(function (e)
	{
		var container = $(".initiatives ul, .flyOut .spacer");
	
		if (!container.is(e.target) // if the target of the click isn't the container...
			&& container.has(e.target).length === 0) // ... nor a descendant of the container
		{
			menuSubs.fadeOut(300);
			menuSubs.removeClass('open').attr('aria-hidden','true');
		}
	});

})(jQuery, window);