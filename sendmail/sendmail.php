<html>
<head>
<title>Контакты</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<meta http-equiv="Content-Language" content="ru">
<link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="page_text2">

	<div id="header">
		<a class="gg-logo" href="//GameStore/"><img alt="GameStore.ru - интернет магазин игр на PC" 		class="small_logo" src="css/logo.png"> GameStore </a>
		</div>
	<div id="tabs">
			<h3>
				<li><a href="info.html"><span>О нас</span></a></li>
				<li><a href="news.html"><span>Новости</span></a></li>
				<li><a href="faq.html"><span>Как купить?</span></a></li>
				<li><a href="send.html"><span>Доставка</span></a></li>
				<li><a href="grant.html"><span>Гарантии</span></a></li>
				<li><a href="cont.html"><span>Контакты</span></a></li>
				<li><a href="product_sh.php"><span>Товары</span></a></li>
				</h3>
		</div>
		
		<div id="menu" style="margin: 5px;">
		<h4>
		<p><a href="action.html">Экшен</a></p>
		<p><a href="rpg.html">RPG</a></p>
		<p><a href="strat.html">Стратегии</a></p>
		</h4>
</div>
		<div id="content" style="margin: 0;">	 
<div class="text__content" style="margin: 10px;"> &nbsp; &nbsp; Наши сотрудники работают в то время, в которое основная часть населения отдыхает и играет, таким образом после своего рабочего дня вы всегда сможете с нами связаться в случае проблем. Мы работаем с обеда и до полуночи. 
<div> 
  <br>
 
  <div>Для связи можно использовать:</div>
 
  <div>
    <ul>
      <li><b>ICQ:</b> 460069369</li>
    
      <li><b>Email:</b>&nbsp;<a href="mailto:Help@gamestore.ru" title="Help@gamestore.ru">Help@gamestore.ru</a></li>
    
      <li><b>Телефон:</b>&nbsp;+7 937 614 74 36</li>
    </ul>
  </div>
   </div>


<?
$kuda='crafty5@mail.ru';//куда отправлять почту?
$zagolovok='сообщение с сайта';
$headers='Content-type: text; charset="utf-8"';

if (isset($_POST['ok'])){
	//если существует переменная, значит начнем получать информацию из формы
	$fio=$_POST['fio'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$text=$_POST['text'];

	$messages=$text."\n".$email."\n".$tel."\n".$fio;

	if (mail($kuda,$zagolovok,$messages,$headers)){echo "Ваше сообщение доставлено.";}
	
	}


?>

</div>
</div>
</div>
</body>
</html>
