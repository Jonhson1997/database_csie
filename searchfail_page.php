
<?php 
include("header.php"); 
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <div class="error-page">
        <h2 class="headline text-red"  style="font-size: 5em;"><b>失敗</b></h2>

        <div class="error-content"  style="padding-left: 10%;padding-top: 3%">
          <h3><i class="fa fa-warning text-red" ></i> 查詢不到此筆單子</h3>

          <p>
            請檢查單子ID是否正確!
          </p>
          <td>
            <button type="button" class="btn btn-block btn-danger btn-lg"   onclick="location.href='member.php'">返回</button>
          </td>
        </div>
      </div>
      <!-- /.error-page -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
include("footer.php"); 
?>