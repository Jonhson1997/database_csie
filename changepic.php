
<?php 
include("header.php"); 
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-yellow" style="font-size: 4em;"><b>上傳頭貼</b></h2>

        <div class="error-content" style="padding-left: 10%;padding-top: 3%">
          <h3 ><i class="fa text-yellow"></i> 貼上圖片位址</h3>
          <form name="form" method="post" action="./changepic2.php">
              <input class="form-control" name="url" style="margin:10px" placeholder="圖片位址">
              <td>
            <button type="submit" class="btn btn-block btn-warning btn-lg">確定</button>
          </td>
          </form>
          <p>
          </p>
          
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
  </div>
<?php 
include("footer.php"); 
?>
