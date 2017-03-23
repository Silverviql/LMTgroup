



<html>
<head>
<title>LMTgroup</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<meta http-equiv="Content-Language" content="ru">
<link href="css/style.css" rel="stylesheet" type="text/css">

<script type="text/javascript">

function validate_form ( )
{
	valid = true;

        if ( document.register_form.rname.value == "" )
        {
                alert ( "Пожалуйста заполните поле 'Ваше имя'." );
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
				<li><a href="ajax.php"><span>Работа с БД</span></a></li>
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
		<p></p>
    <form id="register_form" name="register_form" method="post" action="scripts/register.php" onsubmit="return validate_form ( );" >
	<table width="350" height="315" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFF">
	<tr>
	<td align="right">
	<b>ФИО:</b> <input type="text" name="rname" id="rname" /> 
	</td>
	</tr>
	<tr>
	<td align="center">
    <p>Укажите город:
     <p><select name="select" size="1">
    <option selected value="s1">Казань</option>
    <option value="s2">Москва</option>
    <option value="s3">Питер</option>
    <option value="s4">Астрахань</option>
   </select>
   </p> 
   </td>
   </tr>  
   
    <tr>
	<td align="center">
    <input type="radio" name="answer" value="male">М<Br>
  
  <input type="radio" name="answer" value="female">Ж<Br>
  	</td>
    
	</tr>
  
    <tr>  
	<td align="right">
	<b>Логин:</b> <input type="text"  onkeyup="showHint(this.value)" name="rlogin" id="rlogin" />
	</td>
	</tr>
	<tr>
	<td align="right"><b>Пароль:</b> <input type="password" name="rpass" id="rpass" />
	</td>
	</tr>
	<tr>
	<td align="right"><b>Повторите пароль:</b> <input type="password" name="rpass_r" id="rpass_r" />
	</td>
	</tr>
	<tr>
	<td align="right"><b>E-Mail:</b> <input type="text" name="email" id="email" />
	</td>
	</tr>
	<tr>
	<td colspan="2" align="center">
	<input type="reset" value="Очистить" /> <input type="submit" name="reg_button" id="reg_button" value="Готово" />
	</td>
	</tr>
	</table>
</form>
        
<p>Советы: <span id="txtHint"></span></p>
    
</div>
</body>

</html>