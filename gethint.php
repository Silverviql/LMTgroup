<?php
ini_set('default_charset', 'windows-1251');


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

#ini_set('default_charset', 'utf-8');
    $db = mysql_connect("localhost","root","");
    mysql_select_db("gamestore_ru",$db);
    mysql_query("SET NAMES 'cp1251'");
    mysql_query("SET CHARACTER SET 'cp1251'");
    
    $q .= "%";
    $sql = "SELECT `f_name` FROM `name` WHERE `f_name` LIKE  '$q%' LIMIT 0 , 30";
    $result = mysql_query($sql);

    if($result){   
        while ($row = mysql_fetch_row($result)) {
?>	
	<td>
	<? echo $row[0]; ?>
	</td>
<?	
        }
    } 	
	else {
        echo $hint === "" ? "<br />no results found" : $hint;
    }
    


mysql_close($db);
?> 