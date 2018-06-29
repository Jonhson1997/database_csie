<!DOCTYPE html>
<html>
<?php 
session_start(); 
if($_SESSION['username']!=null){
?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	//連接資料庫
	//只要此頁面上有用到連接MySQL就要include它
	include("./ucantseeme/mysql_connect.php");
	include("method.php");
	$id = $_POST['id'];
	$name = $_POST['name'];
	$number = $_POST['number'];
	$phone = $_POST['phone'];
	$content = $_POST['content'];
	$price = $_POST['price'];
	$user = $_POST['user'];
	$remark = $_POST['remark'];
	$lastadmin = $_POST['lastadmin'];
	$grade = $_POST['grade'];
	//搜尋資料庫資料

	if(content_filter($name)&&content_filter($number)&&content_filter($phone)&&content_filter($price)&&content_filter($user)&&content_filter($content)&&content_filter($remark)&&content_filter($grade)){
	$sql = "update csie_computer set  name='{$name}',grade ='{$grade}',number='{$number}',phone='{$phone}',content='{$content}',price='{$price}',user='{$user}',remark='{$remark}',lastadmin='{$lastadmin}',grade ='{$grade}' WHERE id='{$id}'";
	$result = mysql_query($sql);

	        echo '修改成功!';
	        echo '<meta http-equiv=REFRESH CONTENT=1;url=case_list.php>';
	}else{
		 echo '<meta http-equiv=REFRESH CONTENT=0;url=fail_page.php>';
	}
}else{
  echo "請先登入!";
  echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
};
?>
</html>