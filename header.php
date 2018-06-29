  <?php session_start(); 
    include("method.php"); 
    if(!isset($_SESSION['username'])){
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
    };
    include("./ucantseeme/mysql_connect.php");
  ?>
<!DOCTYPE html>
<html>
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ASIA - CSIE | 首頁</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <a href="member.php" class="logo">
          <span class="logo-mini"><b>Asia</b></span>
          <span class="logo-lg"><b>Asia</b>Csie</span>
        </a>
        <nav class="navbar navbar-static-top">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <h3><b><center>_(:3 」∠ )_web maker - Asia_H304_Johnson</center></b></h3>

        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
           <?php echo '<img src="'.$_SESSION['pic'].'" class="img-circle" alt="User Image" />' ?>
            </div>
            <div class="pull-left info">
             <a href="./changepic.php""> <?php echo $_SESSION['username']  ?></a>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>功能選單</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="member.php"><i class="fa  fa-home"></i> 首頁</a></li>
                <li><a href="coolpc.php"><i class="fa  fa-cart-plus"></i> 原價屋</a></li>
                <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> 登出</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa  fa-desktop"></i> <span>電腦健檢</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="computer_Index.php"><i class="fa fa-bullhorn"></i> 電腦健檢公告</a></li>
                <li><a href="adobe.php"><i class="fa fa-buysellads"></i> Adobe系列</a></li>
                <li><a href="case_list.php"><i class="fa fa-list-ol"></i> 接單列表</a></li>
                <li><a href="add_case.php"><i class="fa  fa-plus-square"></i> 新增單子</a></li>
                <!-- <li><a href="edit_case.php"><i class="fa  fa-edit"></i> 編輯單子</a></li> 
                <li><a href="finish_case.php"><i class="fa  fa-check-square-o"></i> 完成單子</a></li>-->
                <li><a href='delete_case.php'><i class='fa fa-minus-square'></i> 刪除單子</a></li>
               </ul>
            </li>
            <li class="treeview">
               <a href="#">
                <i class="fa  fa-calendar"></i> <span>雜物測試區</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="music/index.html" target="_blank"><i class="fa  fa-music"></i> 音樂播放器</a></li>
                <li><a href="file" target="_blank"><i class="fa  fa-folder"></i> 檔案夾</a></li>
                <li><a href="game_1.html" target="_blank"><i class="fa  fa-gamepad"></i> 遊戲_01</a></li>
                <li><a href="game_2.html" target="_blank"><i class="fa  fa-gamepad"></i> 遊戲_02</a></li>
                <li><a href="game_3.html" target="_blank"><i class="fa  fa-gamepad"></i> 遊戲_03</a></li>
               </ul>
            </li>
          </ul>
      </aside>

     