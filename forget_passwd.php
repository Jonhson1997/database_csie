<!DOCTYPE html>
<html>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
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
//搜尋資料庫資料

$sql = "SELECT * FROM admin where user = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);


//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($row[3] != null)
{
        echo '<div class="login-box">';
        echo '<div class="login-box-body">';
        echo '<p class="login-box-msg">查詢密碼</p>';
        echo '<div class="form-group has-feedback">';
        echo '<center><h3>'.$id.' 的密碼為: '.$row[3].'</h3></center>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<meta http-equiv=REFRESH CONTENT=3;url=index.html>';
}
else
{
        echo '<div class="login-box">';
        echo '<div class="login-box-body">';
        echo '<p class="login-box-msg">查詢密碼</p>';
        echo '<div class="form-group has-feedback">';
        echo '<center><h3>查詢失敗!</h3></center>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<meta http-equiv=REFRESH CONTENT=1.5;url=index.html>';
}
?>
</body>
<script src="js/progressindex.js"></script>
</html>