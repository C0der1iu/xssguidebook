<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<html>
<head>
<title>GUEST BOOK ，HELLO LOSER</title>
</head>
<body>
<br />
<br />
<h2>留言板<h2>

<form action="chc_index.php" method="post">
info:<textarea id='uid' name="desc"></textarea>
<br>
<br>
user:<input type="text" name="user"/><br>
<input type="submit" value="GO!" onclick='loction="chc_index.php"'/>
</form>
<?php
if(isset($_POST['user'])&&isset($_POST['desc'])){
$log=fopen("sql.txt","a");
function convertScript($string)
{
return str_replace("<script>", "", $string);
}
fwrite($log,filter_var($_POST['user'], FILTER_CALLBACK, array("options"=>"convertScript"))."\r\n");
fwrite($log,filter_var($_POST['desc'], FILTER_CALLBACK, array("options"=>"convertScript"))."\r\n");
fclose($log);
}

if(file_exists("sql.txt"))
{
$read= fopen("sql.txt",'r');
while(!feof($read))
{
	echo fgets($read)."</br>";
}
fclose($read);
}
?>
</body>
</html>