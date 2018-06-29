<?php 
include("header.php"); 
include("./ucantseeme/mysql_connect.php");
?>
      <div class="content-wrapper">
    <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">(・∀・)つ⑩  完成了一張單子</h3>
                </div>
                <div class="box-body">
                <div class="row"></div>
                  <table id="example1" class="table table-bordered table-striped">
                             <div class="box">
            <div class="box-header">
              <h3 class="box-title">完成單子</h3>
            </div>
            <div>
            <form id="form_finish" name="form" method="post" action="finish_case_finish.php" onsubmit="confirmSubmit()">
            <input class="form-control" placeholder="單子ID" name="id">
              <br>
              <br>
                 <input type="submit" name="button" value="OK" class="btn btn-block btn-success" >
                  </form>
                   </div>
                 </div>
               </div>
          
              </table>
            </div>
          </div>
    </div>
<script>
      function confirmSubmit() {
        if (confirm("確定要完成該張單子嗎?")) {
          document.getElementById("form_finish").submit();
        }else{
        window.history.back();
        }
      }
</script>
<?php 
include("footer.php"); 
?>
