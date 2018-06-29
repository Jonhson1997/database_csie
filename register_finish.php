<!DOCTYPE html>
<html>
<?php session_start(); 
?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("./ucantseeme/mysql_connect.php");
include("method.php");
$name = $_POST['name'];
$user = $_POST['user'];
$pw = $_POST['passwd'];

//搜尋資料庫資料

$sql = "SELECT * FROM admin where name = '$name'";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);

	if(empty(register_filter($name)) == 1 || empty(register_filter($user)) == 1 || empty(register_filter($pw)) == 1){
		echo '註冊失敗!  欄位不能為空!';
		echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
	}else{

		//判斷帳號與密碼是否為空白
		//以及MySQL資料庫裡是否有這個會員
		if($row[1] == null)
		{
			$sql = "SELECT * FROM admin where user = '$user'";
			$result = mysql_query($sql);
			$row = mysql_fetch_row($result);
			if($row[2] == null && $pw != null){
		        //將帳號寫入session，方便驗證使用者身份
		        $sql = "INSERT INTO admin (name, user, passwd)
				VALUES ('$name','$user','$pw')";
				$result = mysql_query($sql);
				$row = @mysql_fetch_row($result);
				$sql2 = "INSERT INTO pic (name, url)
				VALUES ('$user','http://johnson97312.ddns.net/database_csie/dist/img/user2-160x160.jpg')";
				$result2 = mysql_query($sql2);
		        echo '註冊成功!';
		        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
		    }else if ($row[2]==$user){
				echo '註冊失敗!  該帳號已被註冊!';
		        echo '<meta http-equiv=REFRESH CONTENT=3;url=index.html>';
			}else if ($pw ==null){
				echo '註冊失敗!  密碼不能為空!';
		        echo '<meta http-equiv=REFRESH CONTENT=3;url=index.html>';
			}
		}
		else if($row[1] !=null)
		{
		        echo '註冊失敗!  該使用者已經註冊過帳號!';
		        echo '<meta http-equiv=REFRESH CONTENT=3;url=index.html>';
		}
	}
?>

</html>