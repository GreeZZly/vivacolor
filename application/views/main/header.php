<?php 
 for ($i=2;$i<7;$i++) 
{ echo "
  <style type='text/css'>
     #img".$i." 
       {background-image: url(/include/images/img".$i.".png);}  
  </style>";
}

?>




<div id="header_background">
	<div id="header" class="cb">
		<div id='logo'></div>
		<div id="phone_block">
			<div id="phone_number">8 (8352) 63-63-59</div>
			<div id="" class="link" ><a href="/main/form_php">Обратный звонок</a></div>
		</div>
	</div>
</div>

<div class="container">
<div class="row-fluid">
  <div class="black_label">Возникли сложности с выбором краски?</div>
</div>
<div class="row-fluid">
  <div class="span4">
     <div id="catalog_img"></div>
     <div id="red_figure"><div id="red_figure_text">Получите каталог сейчас бесплатно</div></div>
  </div>
  <div class="span8">
    <div id="blue_text">Скачайте бесплатно каталог лакокрасочных материалов и узнайте, какой краской лучше пользоваться!</div>
    <div class="row-fluid" id="catalog_block">
      <div>
       <div id="error_block"><?php echo validation_errors(); ?></div>
       <form action="/main/order_catalog" method="POST" id="form_catalog">
       <div class="span6">
       <div class="left">Скачайте каталог БЕСПЛАТНО!</div>
         	
				<div class="margin_top"></div>
				
					<input type="text" class="input" name="name_cat" placeholder="Как к Вам обращаться" value="<?php echo set_value('name'); ?>">
					<input type="text" class="input" name="email_cat" placeholder="E-mail (Куда выслать каталог)" value="<?php echo set_value('email'); ?>">
                <div class="margin_top"></div>
			
       </div>
       <div class="span6">
          <div class="red_str"></div>
           <!--<input type="submit" class="input" value="Отправить" id="green_button">-->
           <button type="submit" id="green_button" class="form_submit">ОТПРАВИТЬ ЗАЯВКУ</button>
       </div>
       </form>
    </div>
   </div> 
  </div>

</div>
</div>

<div class="row-fluid">
   <div class="span6" >
   	 <div class="row-fluid left_block">
   	  <div class="left_block_text">
         Все виды лакокрасочных материалов
   	  </div>
   	 </div>
   
   	 <div class="row-fluid top_bottom on_left_block"> 
      <div class="span2 kr_b">
       <div class="kr_block" id="kr_bl6"></div>
      </div>
       
       <div class="span5 kr_text">- Краски для внутренних работ</div>
      
     </div>

     <div class="row-fluid top_bottom on_left_block"> 
      <div class="span2 kr_b">
       <div class="kr_block" id="kr_bl7"></div>
      </div>
       
       <div class="span4 kr_text">- Краски Interor для стен и потолков</div>
      
     </div>


   </div>

   <div class="span6 right_block">
    
     <div class="row-fluid top_bottom"> 
      <div class="span2 kr_b">
       <div class="kr_block" id="kr_bl1"></div>
      </div>
       
       <div class="span4 kr_text">- Краски для наружних работ</div>
      
     </div>

      <div class="row-fluid top_bottom"> 
      <div class="span2 kr_b">
       <div class="kr_block" id="kr_bl2"></div>
      </div>
     
       <div class="span4 kr_text">- Лаки</div>
   
      </div>

      <div class="row-fluid top_bottom"> 
      <div class="span2 kr_b">
       <div class="kr_block" id="kr_bl3"></div>
      </div>
     
       <div class="span4 kr_text">- Шпаклевки</div>
     
      </div>

  </div>
   </div>

<!--
      <div class="row-fluid top_bottom"> 
      <div class="span2 kr_b">
       <div class="kr_block" id="kr_bl4"><div class="kr_block" id="kr_bl5"></div></div>
      </div>
     
       <div class="span4 kr_text">- Другая продукция</div>
     
      </div>

     
    
     </div>
   </div>-->

<div class="row-fluid grad_backgr">
  <div class="container">
    <div class="span6"></div>
    <div class="span6 right_block">

     <div class="row-fluid top_bottom"> 
      <div class="span4 kr_b">
       <div class="kr_block2" id="kr_bl4"><div class="kr_block2" id="kr_bl5"></div></div>
      </div>
     
       <div class="span6 kr_text2">- Другая продукция</div>
     
      </div>
     </div>

  <!------- ------>
    <div class="row-fluid">
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
       <div class="strelka"></div>
       <!-- strelka -->
      </div>
      <div class="span5 margin_top3">
      	<div id="error_block"><?php echo validation_errors(); ?></div>
		
		<form action="/main/order" method="POST" id="form_reg">
			<input type="text" class="input" name="name" placeholder="Ваше имя…" value="<?php echo set_value('name'); ?>">
			<input type="text" class="input" name="email" placeholder="Ваш email адрес…" value="<?php echo set_value('email'); ?>">
			<input type="text" class="input" name="phone" placeholder="Ваш номер телефона…" value="<?php echo set_value('phone'); ?>">
			<br>
			<input id="sub_but1" type="submit" value="ОТПРАВИТЬ ЗАЯВКУ">
			<!--<div id="submit_button" class="form_button">ОТПРАВИТЬ ЗАЯВКУ</div> -->

		</form>
      </div>
    </div>


  </div>
</div>  

<div class="container">
  <!--<div class="row-fluid">
    <div class="red_label">
          Наши клиенты
    </div>
  </div>-->

  <div class="row-fluid">
    <div class="red_label">
          Как мы работаем
    </div>
  </div>
    <div class="row-fluid">
        <div class="row-fluid">
           
           <div class="span3" id="img2"><div>Консультируем вас и помогаем с выбором красок</div></div>
           
           <div class="span3" id="img4"><div>Комплектуем материалы с собственного склада</div></div>
           
           <div class="span3" id="img6"><div>Служба внутреннего контроля проверяет качество доставки</div></div>
        </div>
        <div class="row-fluid">
          <div class="how_we_work_img"></div>
        </div>
        <div class="row-fluid">
           <div class="span3" id="img1"><div>Вы оставляете заявку - мы связываемся с вами в течении дня</div></div>
           <div class="span3" id="img3"><div>Составляем список нужных товаров</div></div>
       
           <div class="span3" id="img5"><div>Передаем материалы в службу доставки</div></div>
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
		
		<form action="/main/order" method="POST" id="form_reg2">
			<input type="text" class="input" name="name" placeholder="Ваше имя…" value="<?php echo set_value('name'); ?>">
			<input type="text" class="input" name="email" placeholder="Ваш email адрес…" value="<?php echo set_value('email'); ?>">
			<input type="text" class="input" name="phone" placeholder="Ваш номер телефона…" value="<?php echo set_value('phone'); ?>">
			<br>
			<input id="sub_but1" type="submit" value="ОТПРАВИТЬ ЗАЯВКУ">
			<!--<div id="submit_button" class="form_button">ОТПРАВИТЬ ЗАЯВКУ</div> -->

		</form>
      </div>
  </div>
</div>
 

