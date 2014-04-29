<div id="portfolio_background">
	<div id="portfolio">
		<div id="portfolio_title">
		   <div class="red_label">	
			Наши работы
		</div>	
		</div>
		<div>
			<!-- <div class="icon_rev_left"></div> -->
			<div id="portfolio_row">
				<div class="portfolio_item">
					<div class="pitem_img">
						<img src="/include/images/works/mcdonalds.jpg">
					</div>
					<div class="pitem_name">Макодналдс</div>
				</div>
				<div class="portfolio_item">
					<div class="pitem_img"><img src="/include/images/works/dubrava.jpg"></div>
					<div class="pitem_name">Гостинница "Дубрава"</div>
				</div>
				<div class="portfolio_item">
					<div class="pitem_img"><img src="/include/images/works/volga.jpg"></div>
					<div class="pitem_name">Премиум-отель "Волга"</div>
				</div>
			</div>
			<!-- <div class="slider4">
			  <div class="slide"><img src="http://placehold.it/300x150&text=FooBar1"></div>
			  <div class="slide"><img src="http://placehold.it/300x150&text=FooBar2"></div>
			  <div class="slide"><img src="http://placehold.it/300x150&text=FooBar3"></div>
			  <div class="slide"><img src="http://placehold.it/300x150&text=FooBar4"></div>
			  <div class="slide"><img src="http://placehold.it/300x150&text=FooBar5"></div>
			  <div class="slide"><img src="http://placehold.it/300x150&text=FooBar6"></div>
			  <div class="slide"><img src="http://placehold.it/300x150&text=FooBar7"></div>
			  <div class="slide"><img src="http://placehold.it/300x150&text=FooBar8"></div>
			  <div class="slide"><img src="http://placehold.it/300x150&text=FooBar9"></div>
			  <div class="slide"><img src="http://placehold.it/300x150&text=FooBar10"></div>
			</div> 
			<!-- <div class="icon_rev_right"></div> -->
		</div>
	</div>
</div>

<!-- -->
<div class="container">
 <div class="row-fluid">
  <div class="red_label">	
			Отзывы наших клиентов
  </div>	
 </div>
 <div class="row-fluid">
   <div class="span3">
    <img src="/include/images/gradituder.png" id="gradituder_img">
    <!-- gradituder img-->
   </div>
   <div class="span9">
      <div class="gradituders_text">
         <p>Я занимаюсь ремонтами квартир. И в любой квартире приходиться красить или потолки, или стены, галтели, откосы.</p>
         <p>Раньше я работал с другой краской, из-за антирекламы не буду называть фирму. И всё время для меня было наказание малярить потолки или стены. Всё время оставались разводы от валика, что я только не пробовал: и разбавлял её, и менял валики. но разводы и подтёки всё равно были.</p>
         <p>И как-то при закупке материала в магазине не оказалось нашей краски и мы решили попробовать краску Vivacolor "3" специально разработанную для потолков. По цене она оказалась чуть дороже нашей краски.</p>
         <p>В скором времени я начал катать потолок. Вроде всё как всегда... начал наносить второй слой. И к моему удивлению потолок стал белый без единого развода и подтёка.</p>
         <p>С того времени мы используем только эту краску!</p>
      </div>
   </div>
 </div>
</div>
<!-- -->

<div class="row-fluid orange_block margin_top">
  <div class="container margin_top">
      <div class="span5">
        <div class="white_text">
      	 <div class="row-fluid big_label">
            Оставьте заявку и получите
      	 </div>
      	 <div class="row-fluid label2">
            <p>консультацию наших специалистов</p>
            <p>по всем видам</p> 
            <p>лакокрасочных материалов</p>
      	 </div>

        </div>
      </div>
      <div class="span2">
       <div class="strelka2"></div>
       <!-- strelka -->
      </div>
      <div class="span5 margin_top">
      	<div id="error_block"><?php echo validation_errors(); ?></div>
		
		<form action="/main/order" method="POST" id="form_reg_consult">
			<input type="text" class="input" name="name" placeholder="Ваше имя…" value="<?php echo set_value('name'); ?>">
			<input type="text" class="input" name="email" placeholder="Ваш email адрес…" value="<?php echo set_value('email'); ?>">
			<input type="text" class="input" name="phone" placeholder="Ваш номер телефона…" value="<?php echo set_value('phone'); ?>">
			<br>
			<!--<input type="submit" value="Отправить" class="hidden">
			<div id="submit_button" class="form_button">ОТПРАВИТЬ ЗАЯВКУ</div> -->
			<input id="sub_but1" type="submit" value="ОТПРАВИТЬ ЗАЯВКУ">

		</form>
      </div>
  </div>
</div>

<!-- -->
<div class="container">
  <div class="row-fluid">
     <div class="red_label to_left">	
			Мы находимся по адресу:
     </div>
     <div class="black_addres_text">
        Чувашская Республика, г. Чебоксары, Складской проезд, 6 (офис 116)
     </div>
  </div>
</div>
<div class="row-fluid">
  <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=YRZqbOhu-ly_3wmqtzXHwjxdq6mwUGPE&width=auto&height=400"></script>
</div>