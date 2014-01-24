$(document).ready(function (){
	$('[class*="_button"]').on('click',function(e){
		e.preventDefault();
		$('#order_form_bg').fadeIn(200);

		var left = $(window).width()/2 - 275;
		var top = $(window).height()/2 - 214;
		console.log(left, top);
		$('#order_form').css({'left':left,'top':top}).fadeIn(200);
		$(window).resize(function(){
			var left = $(window).width()/2 - 275;
			var top = $(window).height()/2 - 214;
			console.log(left, top);
			$('#order_form').css({'left':left,'top':top}).fadeIn(200);
		});
	});
	$('#order_form_bg').on('click',function(){
		$(this).fadeOut();
		$('#order_form').fadeOut();
	});

	$("#order_form form").validate({

       rules:{

            name:{
                required: true,
                minlength: 2,
                maxlength: 16,
            },

            email:{
                required: true,
            	email: true
            },
            phone:{
            	required: true,
            	minlength: 6,
                maxlength: 11,
                digits: true
            }
       },

       messages:{

            name:{
                required: "Это поле обязательно для заполнения",
                minlength: "Имя должно быть минимум 2 символа",
                maxlength: "Максимальное число символов - 16",
            },

            email:{
                required: "Это поле обязательно для заполнения",
                email: "Неверно заполнено поле электронной почты"
            },
            phone:{
                required: "Это поле обязательно для заполнения",
                minlength: "Телефон должен быть минимум 6 символов",
                maxlength: "Телефон должен быть максимум 11 символов",
                digits: "Только цифры"
            },

       }

    });
	$('#submit_button').on('click', function(){
		if ($("#order_form form").validate()) {
			$("#order_form form").submit();
		}
	});
	var left1 = $(window).width()/2 - 275;
		var top1 = $(window).height()/2 - 86;
		$('#success_submit').css({'left':left1, 'top':top1});
	$(window).resize(function(){
		var left1 = $(window).width()/2 - 275;
		var top1 = $(window).height()/2 - 86;
		$('#success_submit').css({'left':left1, 'top':top1});
	});
});