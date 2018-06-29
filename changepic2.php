<!DOCTYPE html>
<html>
<?php session_start();  
if ($_SESSION['username']!=null){
?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("./ucantseeme/mysql_connect.php");
include("method.php");
$url = $_POST['url'];
//搜尋資料庫資料

	$sql = "update pic set  url='{$url}' WHERE name='{$_SESSION['username']}'";
	$result = mysql_query($sql);
	echo '<meta http-equiv=REFRESH CONTENT=0;url=changepic_finish.php>';

}else{
	echo "請先登入!";
	echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
};



?>


</html>