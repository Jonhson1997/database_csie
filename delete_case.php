<?php 
include("header.php"); 
include("./ucantseeme/mysql_connect.php");
?>
      <div class="content-wrapper">
    <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">_(┐ ◟;ﾟдﾟ)ノ  真的要刪除嗎?</h3>
                </div>
                <div class="box-body">
                <div class="row"></div>
                  <table id="example1" class="table table-bordered table-striped">
                             <div class="box">
            <div class="box-header">
              <h3 class="box-title">刪除單子</h3>
            </div>
            <div>
            <form name="form" method="post" action="delete_case_finish.php">
            <input class="form-control" placeholder="單子ID" name="id">
              <br>
              <br>
                 <input type="submit" name="button" value="OK" class="btn btn-block btn-success">
                  </form>
                   </div>
                 </div>
               </div>
          
              </table>
            </div>
          </div>
    </div>
<?php 
include("footer.php"); 
?>
