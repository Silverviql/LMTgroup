<html>
	<head>
		<title>Оформление заказа</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="ru">
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="page">

		<div id="header">
		<a class="gg-logo" href="//LMTgroup/"><img alt="LMTgroup.ru - интернет магазин игр на PC" 		class="small_logo" src="css/logo.png"> LMTgroup </a>

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
		<div id="menu" style="margin: 0px;">
		<h4>
		<p><a href="action.html">Экшен</a></p>
		<p><a href="rpg.html">RPG</a></p>
		<p><a href="strat.html">Стратегии</a></p>
		</h4>
</div>
	<div id="content" style="margin: 5px;">  
		<table>
			<tr>
				<td  style="width:0px">
				</td>
				<td>
					<div style="text-align: center; margin-left:-20; margin-top:25px; padding-right:0; background: #ffffff">
					<table>
						<tr>

						
	<?php


	if ($_POST) //Условие будет выполнено, если произведен POST-запрос к скрипту. 
	{ 
	$f_name = trim ($_POST['f_name' ]); 
	$surname = trim ($_POST['surname' ]); 
	$l_name  = trim ($_POST['l_name' ]); 
	$address  = trim ($_POST['address' ]);
	$gender  = trim ($_POST['gender' ]);
	$email = trim ($_POST['email' ]); 
	$product_name = trim ($_POST['product_name' ]); 
	$category = trim ($_POST['category' ]); 
	$price = trim ($_POST['price' ]); 
		
	echo " <br> данные: $f_name, $surname, $l_name, $address, $gender, $email, $product_name, $price. <br>"   ;	
		
	$error = false ;//Создаем переменную, контролирующую ошибки регистрации.	
	$errortext  = "<p><b><font color='red'><h3>При регистрации на сайте произошли следующие ошибки:</h3></font></p><ul>"	;
	if (empty ($f_name )) 
	{ 
	$error = true ; 
    $errortext  .= "<li><font color='red'>Вы не заполнели поле Имя!</font></li>"	;
	} else { 
	if (!preg_match("/^[a-zA-Z]{2,30}$/iu",$f_name)) 
	{ 
	$error = true; 
	$errortext .= "<li><font color='red'>Убедитесь что Имя содержит от 2 до 30 латинских символов и не содержит цифр</font></li>"; 
	}
	} 
	if (empty ($surname )) 
	{ 
	$error = true ; 
    $errortext  .= "<li><font color='red'>Вы не заполнели поле Фамилия!</font></li>"	;
	} else { 
	if (!preg_match("/^[a-zA-Z]{2,30}$/iu",$surname)) 
	{ 
	$error = true; 
	$errortext .= "<li><font color='red'>Убедитесь что Фамилия содержит от 2 до 30 латинских символов и не содержит цифр</font></li>"; 
	}
	}
	if (empty ($l_name )) 
	{ 
	$error = true ; 
    $errortext  .= "<li><font color='red'>Вы не заполнели поле Отчество!</font></li>"	;
	} else { 
	if (!preg_match("/^[a-zA-Z]{2,30}$/iu",$l_name)) 
	{ 
	$error = true; 
	$errortext .= "<li><font color='red'>Убедитесь что Отчество содержит от 2 до 30 латинских символов и не содержит цифр</font></li>"; 
	}
	} 
	if (empty ($address )) 
	{ 
	$error = true ; 
  $errortext  .= "<li><font color='red'>Вы не заполнели поле Адрес!</font></li>"	;
	} else { 
	if (!preg_match ("/^[a-zA-Z0-9]{2,20}$/i"  ,$address )) 
	{ 
	$error = true ; 
	$errortext  .= "<li><font color='red'>Убедитесь что Адрес содержит от 2 до 20 символов, и состоит из латинских символов и цифр 
</font></li>" ; 
	} 
	} 
	if (empty ($gender )) 
	{ 
	$error = true ; 
	$errortext  .= "<li><font color='red'>Вы не заполнели поле Пол!</font></li>"	;
	}

 
	} 
	if (empty ($email )) 
	{ 
	$error = true ; 
  $errortext  .= "<li><font color='red'>Вы не заполнили поле E-Mail</font></li>"	;
	} else { 
	if (!preg_match ("/^[-0-9a-z_\.]+@[-0-9a-z^\.]+\.[a-z]{2,4}$/i"  ,$email )) 
	{ 
	$error = true ; 
	$errortext .= "<li><font color='red'>Не правильно заполнено поле E-Mail. E-mail должен иметь вид user@somehost.com</font></li >" ; 
	} 
	} 
	$errortext  .= "</ul></b>" ; 
	if ($error ) 
	{ 
	echo ($errortext );//Выводим текст ошибок. 
	} else { 
	//Подключаемся к базе данных. 
	$dbcon = mysql_connect ("localhost"  , "root" , "" ); 
	mysql_select_db ("gamestore_ru" , $dbcon ); 
	if (!$dbcon ) 
	{ 
	echo "<p>Произошла ошибка при подсоединении к MySQL!</p>"	.mysql_error (); exit ();
	} else { 
	if (!mysql_select_db ("gamestore_ru" , $dbcon )) 
	{ 
	echo ("<p>Выбранной базы данных не существует!</p>"	);
	} 
	} 
	/* проверка на существование пользователя с таким же логином. 
	$result = mysql_query ("SELECT id FROM registered_users WHERE login='$login'"    ,$dbcon ); 
	$myrow = mysql_fetch_array ($result ); 
	if (!empty ($myrow ["id" ])) { 
	exit ("Извините, введённый вами логин уже зарегистрирован.<a href='forma_reg.php'> Введите другой логин</a>."	);
	} */
	//Выполняем SQL-запрос записывающий данные пользователя в таблицу. 
	$sql = mysql_query ("INSERT INTO reg_orders (`f_name`, `surname`, `l_name`, `address`, `gender`, `email`, `product_name`, `category`, `price`) 
	Values ('".$_POST['f_name']."','".$_POST['surname']."','".$_POST['l_name']."', '".$_POST['address']."', '".$_POST['gender']."','".$_POST['email']."','".$_POST['product_name']."','".$_POST['category']."','".$_POST['price']."')"); 
	if (!$sql ) {echo "Запрос не прошел. Попробуйте еще раз."   ;} 
	if ($sql ) 
	{ 
	//Выводим сообщение об успешной регистрации. 
	//exit ('<div align="center"><br/><br/><br/> 
	echo "<h3> Вы успешно зарегистрированы на сайте! Можете добавить еще 1 пользователя</h3>"	;
	} 
	mysql_close ($dbcon );//Закрываем соединение MySQL. 
	} 
	

	if (($_POST && $error ) || !$_POST) 
	{ 
	} 

 ?>
					
 </body> 
</html>
		