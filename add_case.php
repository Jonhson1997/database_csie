
<?php 
include("header.php"); 
 include("./ucantseeme/mysql_connect.php");
?>
      <div class="content-wrapper">
    <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">(｡◕∀◕｡) 有新單子</h3>
                </div>
                <div class="box-body">
                <div class="row"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <div class="box">
            <div class="box-header">
              <h3 class="box-title">請勿使用特殊字元</h3>
            </div>
            <div>
            <form name="form" method="post" action="add_case_finish.php" onsubmit="check()">
            姓名：
            <input id="name" class="form-control" name="name" style="margin:10px" maxlength="30" placeholder="30字以內">
            系級：
            <input id="grade" class="form-control" name="grade" style="margin:10px" maxlength="30" placeholder="30字以內">
            學號：
            <input id="number" class="form-control" name="number" style="margin:10px" maxlength="10" placeholder="10字以內">
            電話：
            <input id="phone" class="form-control" name="phone" style="margin:10px" maxlength="10" placeholder="10字以內">
            </div>
            收件內容：
            <div class="box-body pad">
                <textarea id="content" class="textarea" name="content"  style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" maxlength="300" placeholder="300字以內"></textarea>
            </div>
            收件金額：
              <input id="price" class="form-control" name="price" style="margin:10px" type="number" placeholder="10字以內">
              <input class="form-control" name="user" style="margin:10px" type="hidden" value="<?php echo $_SESSION['username'] ?>" maxlength="30" >
            備註：
              <input class="form-control" name="remark" style="margin:10px" maxlength="300" placeholder="300字以內">
                 <input type="submit" name="button" value="OK" class="btn btn-block btn-success">
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
</script>
<?php 
include("footer.php"); 
?>