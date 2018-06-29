<!DOCTYPE html>
<html>
<?php session_start(); 
if($_SESSION['username']!=null){
?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("./ucantseeme/mysql_connect.php");
$id = $_POST['id'];
$sql = "SELECT * FROM csie_computer WHERE id='{$id}'";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);
	if($row[0]==null){
	  echo "查詢失敗";
	  echo '<meta http-equiv=REFRESH CONTENT=1;url=case_list.php>';
	}else{
	//搜尋資料庫資料
	$sql = "delete from csie_computer where id='{$id}'";
	$result = mysql_query($sql);
	$row = @mysql_fetch_row($result);


	        echo '刪除成功!';
	        echo '<meta http-equiv=REFRESH CONTENT=1;url=case_list.php>';

	};
}else{
  echo "請先登入!";
  echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
};
?>
</html>