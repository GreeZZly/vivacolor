$(document).ready(function(){
	var params = {
	    slideWidth: 300,
	    // adaptiveHeight: false,
	    slideHeight:200,
	    minSlides: 3,
	    maxSlides: 3,
	    moveSlides: 1,
	    slideMargin: 10,
	    preloadImages: 'all',
	    touchEnabled: true,
	    captions: true
  	};
	 var portfolio = [
		{
			"pic":"/include/images/works/mcdonalds.jpg",
			"name": "Макдональдс"
		},
		{
			"pic":"/include/images/works/dubrava.jpg",
			"name": "Гостинница 'Дубрава'"
		},
		{
			"pic":"/include/images/works/volga.jpg",
			"name": "Премиум-отель 'Волга'"
		},
		{
			"pic":"/include/images/works/luxor.jpg",
			"name": "Кинотеатр 'Луксор'"
		},
		{
			"pic":"/include/images/works/megamall.jpg",
			"name": "Мега Молл"
		},
		{
			"pic":"/include/images/works/galaxy.jpg",
			"name": "Mega Galaxy"
		},
		{
			"pic":"/include/images/works/cinema5.jpg",
			"name": "Кино-центр 'Синема 5'"
		},
		{
			"pic":"/include/images/works/mtv.jpg",
			"name": "МТВ-Центр"
		}

	]
	var html='';
	for (var i=0, l=portfolio.length; i<l; i++){
		html += '<div class="slide"><a href="'+portfolio[i].pic+'" class="zoom"><img src="'+portfolio[i].pic+'" title="'+portfolio[i].name+'"></div>'
	}
	$('#portfolio_row').html(html).bxSlider(params);
});