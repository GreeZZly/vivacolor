$(function(){
	//ДЕВУШКА УЙДИ
	$(window).on('resize', function(e){
		var l = $('#counter').offset().left;
		console.log(l);
		$('#counter #nicegirl').css('left', l-200);
	})
	$(window).resize();
	var note = $('#note'),
		ts = new Date(2014, 0, 1),
		newYear = true;
	
	if((new Date()) > ts){
		// The new year is here! Count towards something else.
		// Notice the *1000 at the end - time must be in milliseconds
		ts = (new Date()).getTime() + 10*24*60*60*1000;
		newYear = false;
	}
		
	$('#countdown').countdown({
		timestamp	: ts,
		callback	: function(days, hours, minutes, seconds){
			
			var message = "";
			
			message += days + " day" + ( days==1 ? '':'s' ) + ", ";
			message += hours + " hour" + ( hours==1 ? '':'s' ) + ", ";
			message += minutes + " minute" + ( minutes==1 ? '':'s' ) + " and ";
			message += seconds + " second" + ( seconds==1 ? '':'s' ) + " <br />";
			
			// if(newYear){
			// 	message += "left until the new year!";
			// }
			// else {
			// 	message += "left to 10 days from now!";
			// }
			
			// note.html(message);
		}
	});
	
});

$(document).ready(function(){
	$('.consult_content_item').on('click',function(){
		var item_id = $(this).attr('itid');
		var n = $('.consult_change[itid="'+item_id+'"]').height();
		$('#consult_content_info_rel').animate({'height':n+20});
		$('.consult_content_item').removeClass('active_item');
		$(this).addClass('active_item');
		$('.consult_change').fadeOut(200);
		$('.consult_change[itid="'+item_id+'"]').delay(200).fadeIn();

		// $('.consult_change').removeClass('hidden');
		// $('.consult_change:not([itid='+item_id+'])').addClass('hidden');
	console.log(n);
	});
	$('.icon_rev_right').on('click', function(){
		$('#reviews_content').animate({"left": "+=900px"}, "slow");
	});
	$('.icon_rev_left').on('click', function(){
		$('#reviews_content').animate({"left": "-=900px"}, "slow");
	});

	$('.bxslider').bxSlider();

// ПЛАВНЫЙ ЯКОРь
   $('a[href*=#]').bind("click", function(e){
      var anchor = $(this);
      $('html, body').stop().animate({
         scrollTop: $(anchor.attr('href')).offset().top
      }, 1000);
      e.preventDefault();
   });
   return false;

	
});