<html>
	<head>
		<title>Оформление заказа</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="ru">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		
		<script type="text/javascript">

function validate_form ( )
{
	valid = true;

        if ( document.register_form.f_name.value == "" )
        {
                alert ( "Пожалуйста заполните поле 'Ваше имя'." );
                valid = false;
        }
		
		if ( document.register_form.surname.value == "" )
        {
                alert ( "Пожалуйста заполните поле 'Вашу фамилию'." );
                valid = false;
        }
		
			if ( document.register_form.l_name.value == "" )
        {
                alert ( "Пожалуйста заполните поле 'Ваше отчество'." );
                valid = false;
        }
		
			if ( document.register_form.address.value == "" )
        {
                alert ( "Пожалуйста заполните поле 'Ваш адрес'." );
                valid = false;
        }
		
			if ( document.register_form.email.value == "" )
        {
                alert ( "Пожалуйста заполните поле 'Вашу почту'." );
                valid = false;
        }
        return valid;
}
</script>
	
<script>
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
		</head>
		
	<body>
	<div id="page">
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
	<div id="content" style="margin: 5px;">  
		
		<div style="text-align: center;">
			<br>
			<form id="register_form"  name="register_form" method="post" action="reg_order.php" onkeyup="showHint(this.value)" onsubmit="return validate_form ( )";>
			<table width="350" height="315" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFF">
			<tr>
				<td align="center" style="text-align: left;">
				<p><b>Имя:</b>
				  <input id="f_name" type="text" onkeyup="showHint(this.value)" name="f_name" />
				</p>
			</td>
			</tr>
			
			<tr>
				<td align="center" style="text-align: left;">
				<p><b>Фамилия:</b>
				  <input id="surname" type="text" name="surname" />
				</p>
			</td>
			
			<tr>
				<td align="center" style="text-align: left;">
				<p><b>Отчество:</b>
				  <input id="l_name" type="text" name="l_name" />
				</p>
				</td>
			</tr>
			<tr>
				<td align="center" style="text-align: left;">
				<p><b>Введите адрес:</b>
				  <input id="address" type="text" name="address" />
				</p>
				</td>
			</tr>
			<tr>
				<td>
					<p><b>Пол:</b>
						<input id="gender" type="radio" name="gender" value="male">M</label>
						<input id="gender" type="radio" name="gender" value="female">Ж</label><br></p>
				</td>
			</tr>
			<tr>
				<td align="right" style="text-align: left;">
				<b>E-Mail:</b> <input type="text" name="email" id="email" />  
				</td>
			</tr>
			<tr>
				<p><td align="right" style="text-align: left;"><b>Категория:</b> <input type="text" name="category" id="category" value="Strategy" readonly />  </p></td>
			</tr>
			<tr>
				<p><td align="right" style="text-align: left;"><b>Название товара:</b> <input type="text" name="product_name" id="product_name" value="Total War: WARHAMMER" readonly />  </p></td>
			</tr>
			<tr>
				<p><td align="right" style="text-align: left;"><b>Цена:</b> <input type="text" name="price" id="price" value="1799" readonly />  </p></td>
			</tr>
			<tr>
				<td colspan="" align="center">
					<input type="submit" name="reg_button" id="reg_button" value="Готово" /> <input type="reset" value="Очистить" />  </td>
			</tr>
			</table>
		</form>
		</div>
		
		<p>Советы: <span id="txtHint"></span></p>
		
		
	</body> 
</html>
			