<?php 
  include("header.php"); 
  include("./ucantseeme/mysql_connect.php");
  $id = $_POST['id'];
  $sql = "SELECT * FROM csie_computer WHERE id='{$id}'";
  $result = mysql_query($sql);
  $row = mysql_fetch_row($result);
  if($row[0]==null){
    echo '<meta http-equiv=REFRESH CONTENT=0;url=searchfail_page.php>';
  }else if($row[9]=="已完成"){
    echo '<meta http-equiv=REFRESH CONTENT=0;url=fail_page.php>';
  }else {
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
                <h3 class="box-title">請勿使用特殊字元</h3>
              </div>
              <div>
              <form name="form" method="post" action="edit_case_finish.php" onsubmit="check()">
              <input class="form-control"  name="id" style="margin:10px" type="hidden" value="<?php echo $row[0] ?>">
              <input class="form-control"  name="lastadmin" style="margin:10px" type="hidden" value="<?php echo $_SESSION['username'] ?>">
              姓名：
              <input id="name" class="form-control"  name="name" style="margin:10px" value="<?php echo $row[1] ?>">
              系級：
              <input id="grade" class="form-control"  name="grade" style="margin:10px" value="<?php echo $row[2] ?>">
              學號：
              <input id="number" class="form-control"  name="number" style="margin:10px" value="<?php echo $row[3] ?>">
              電話：
              <input id="phone" class="form-control"  name="phone" style="margin:10px" value="<?php echo $row[4] ?>">
              </div>
              收件內容：
              <div class="box-body pad">
                  <textarea id="content" class="textarea"  name="content"  style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $row[5] ?></textarea>
              </div>
              收件金額：
                <input id="price" class="form-control" name="price" style="margin:10px" type="number" value="<?php echo $row[6] ?>" >
              
                <input type="hidden" class="form-control"  name="user" style="margin:10px" value="<?php echo $row[7] ?>">
              
              備註：
                <input class="form-control"  name="remark" style="margin:10px" value="<?php echo $row[8] ?>">
                   <input type="submit" name="button" value="修改" class="btn btn-block btn-success">
                    </form>
                     
                   </div>
                 </div>
                </table>
              </div>
            </div>
      </div>
<script>
      function check() {
        var name_element =document.getElementById('name').value;
        if(name_element.length<=0){
          alert("請輸入姓名");
          window.history.back();
        }
        var number_element =document.getElementById('number').value;
        if(number_element.length<=0){
          alert("請輸入學號");
          window.history.back();
        }
        var phone_element =document.getElementById('phone').value;
        if(phone_element.length<=0){
          alert("請輸入電話");
          window.history.back();
        }
        var content_element =document.getElementById('content').value;
        if(content_element.length<=0){
          alert("請輸入收件內容");
          window.history.back();
        }

        var price_element = document.getElementById('price').value;
        if(price_element.length<=0){
          alert("請輸入金額");
          window.history.back();
        }else if (price_element.length>10){
          alert("金額須為十字以內");
          window.history.back();
        }
      }
      function checkfinish(){
        alert("該單已完成");
        window.history.back();
      }
</script>

<?php 
  }; 
include("footer.php"); 
?>
