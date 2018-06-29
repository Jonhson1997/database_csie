<?php 
include("header.php"); 
include("./ucantseeme/mysql_connect.php");
?>
      <div class="content-wrapper">
    <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">( ˘･з･) 資料需要編輯</h3>
                </div>
                <div class="box-body">
                <div class="row"></div>
                  <table id="example1" class="table table-bordered table-striped">
                             <div class="box">
            <div class="box-header">
              <h3 class="box-title">編輯單子</h3>
            </div>
            <div>
            <form name="form" method="post" action="edit_case_2.php">
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
