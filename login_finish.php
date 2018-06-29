<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/indexbgstyle.css">
<link rel="stylesheet" href="css/progressstyle.css">
<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>  
    <div id="stars" style=""></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("./ucantseeme/mysql_connect.php");
$id = $_POST['id'];
$pw = $_POST['passwd'];

//搜尋資料庫資料

$sql = "SELECT * FROM admin where user = '$id'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);


//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[2] == $id && $row[3] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $row[2];
        $sql = "SELECT * FROM pic WHERE name='{$_SESSION['username']}'";
		$result = mysqli_query($link,$sql);
		@$row = mysqli_fetch_row($result);
		$_SESSION['pic'] = $row[2];
        echo '  <div id="loader" style="margin-left: 30%; margin-top: 15%">
                        <div class="percent-count" id="countText">100%</div>
                        <div class="progress-bar">
                          <div class="progress" id="progress"></div>
                        </div>
                </div>';
        echo '<meta http-equiv=REFRESH CONTENT=2.22;url=member.php>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=3;url=index.html>';
}
?>
</body>
<script src="js/progressindex.js"></script>
</html>