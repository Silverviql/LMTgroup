<html>
	<head>
		<title>Товары</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf8">
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
	<div id="content" style="margin: 0px;">  

		<table>
			<tr>
				<td  style="width:100px">
				</td>
				<td>
					<div style="text-align: center; margin-left:0px; margin-right:50px; background: #ffffff">
						<?php 
							// определяем начальные данные
							$db_host = 'localhost';
							$db_name = 'gamestore_ru';
							$db_username = 'root';
							$db_password = '';
							$db_table_to_show = 'products';

							// соединяемся с сервером базы данных
							$connect_to_db = mysql_connect($db_host, $db_username, $db_password)
							or die("Could not connect: " . mysql_error());

							// подключаемся к базе данных
							mysql_select_db($db_name, $connect_to_db)
							or die("Could not select DB: " . mysql_error());
							//SET NAMES кодировка
							mysql_query("SET NAMES 'utf8_general_ci'" . $db_table_to_show);
							// выбираем все значения из таблицы
							$qr_result = mysql_query("select * from " . $db_table_to_show)
							or die(mysql_error());

							// выводим на страницу сайта заголовки HTML-таблицы
							echo '<table border="1" style="margin-top:30px; margin-left:0px">';
							echo '<thead>';
							echo '<tr>';
							echo '<th>id</th>';
							echo '<th>Наименование</th>';
							echo '<th>Издатель</th>';
							echo '<th>Жанр</th>';
							echo '<th>Язык</th>';
							echo '<th>Дата выхода</th>';
							echo '<th>Цена</th>';
							echo '</tr>';
							echo '</thead>';
							echo '<tbody>';
			  
							// выводим в HTML-таблицу все данные клиентов из таблицы MySQL 
							while($data = mysql_fetch_array($qr_result)){ 
								echo '<tr>';
								echo '<td style="text-align: center;">' . $data['id'] . '</td>';
								echo '<td style="text-align: center;">' . $data['name'] . '</td>';
								echo '<td style="text-align: center;">' . $data['issuer'] . '</td>';
								echo '<td style="text-align: center;">' . $data['genre'] . '</td>';
								echo '<td style="text-align: center;">' . $data['language'] . '</td>';
								echo '<td style="text-align: center;">' . $data['date'] . '</td>';
								echo '<td style="text-align: center;">' . $data['price'] . '</td>';
								echo '</tr>';
							}

							echo '</tbody>';
							echo '</table>';

							// закрываем соединение с сервером  базы данных
							mysql_close($connect_to_db);
						?>	

<?php
 $table='<table border=1>'; //цикл фор
for ($i=1; $i<10; $i++) {
	$table.='<tr>';
	
	for ($j=1; $j<10; $j++) {
		$table.='<td>'.$i*$j.'</td>';
	}
	$table.='</tr>';
}
$table.='</table>';
echo $table;
?>

		</div>
	</body> 
</html>