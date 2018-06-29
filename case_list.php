<?php 
include("header.php"); 
include("./ucantseeme/mysql_connect.php");
?>
      <div class="content-wrapper">
    <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">(╯✧∇✧)╯ 接單列表</h3>
                </div>
                <div class="box-body" style="overflow: auto;">
                <div class="row"></div>
                  <table id="example1" class="table table-bordered table-striped">
                  <?php 
                      $total = 0;
                      $case =0;
                      $sql = "SELECT * FROM csie_computer";
                      $result = mysqli_query($link,$sql);
                      ?>
                    <thead>
                      <tr>
                        <th width="10px">ID</th>
                        <th width="50px">姓名</th>
                        <th width="50px">系級</th>
                        <th width="50px">學號</th>
                        <th width="50px">電話</th>
                        <th width="50px">接單內容</th>
                        <th width="50px">收件金額</th>
                        <th width="50px">接單人</th>
                        <th width="50px">備註</th>
                        <th width="50px">狀態</th>
                        <th width="50px">建單時間</th>
                        <th width="50px">最後修改時間</th>
                        <th width="50px">最後修改人</th>
                        <th width="10px"></th>
                        <th width="10px"></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($row = mysqli_fetch_row($result)){
                    ?>
                      <tr>
                        <td width="10px" style= "word-break:break-all; ">
                        <?php echo "$row[0]" ?>
                        </td>
                        <td width="80px" style= "word-break:break-all; ">
                        <?php echo "$row[1]" ?>
                        </td>
                        <td width="100px" style= "word-break:break-all; ">
                        <?php echo "$row[2]" ?>
                        </td>
                        <td width="100px" style= "word-break:break-all; ">
                        <?php echo "$row[3]" ?>
                        </td>
                        <td width="100px" style= "word-break:break-all; ">
                        <?php 
                        if($row[9]=="未完成" || $_SESSION['username'] == "johnson"){
                          echo "$row[4]";
                          }
                        ?>
                        </td>
                        <td width="100px" style= "word-break:break-all; ">
                        <?php echo "$row[5]" ?>
                        </td>
                        <td width="100px" style= "word-break:break-all; ">
                        <?php echo "$row[6]" ;
                              $total+=$row[6]; 
                              $case+=1;
                        ?>
                        </td>
                        <td width="100px" style= "word-break:break-all; ">
                        <?php echo "$row[7]";?>
                        </td>
                        <td width="100px" style= "word-break:break-all; ">
                        <?php echo "$row[8]" ?>
                        </td>
                        <td width="100px" style= "word-break:break-all; ">
                        <?php echo "$row[9]" ?>
                        </td>
                        <td width="100px" style= "word-break:break-all; ">
                        <?php echo "$row[11]" ?>
                        </td>
                        <td width="100px" style= "word-break:break-all; ">
                        <?php echo "$row[10]" ?>
                        </td>
                        <td width="100px" style= "word-break:break-all; ">
                        <?php echo "$row[12]" ?>
                        </td>
                        <td width="10px" style= "word-break:break-all; ">
                        <form name="form" method="post" action="edit_case_2.php">
                          <?php echo "<input type='hidden' class='form-control' placeholder='單子ID' name='id' value='$row[0]'>" ?>
                          <input type="submit" name="button" value="修改" class="btn btn-block btn-success">
                        </form>
                        </td>
                        <td width="10px" style= "word-break:break-all; ">
                        <form name="form" method="post" action="finish_case_finish.php">
                          <?php echo "<input type='hidden' class='form-control' placeholder='單子ID' name='id' value='$row[0]'>" ?>
                          <input type="submit" name="button" value="完成" class="btn btn-block btn-success">
                        </form>
                        </td>
                      </tr>
                    <?php
                    }
                  
                    ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th width="10px">ID</th>
                        <th width="50px">姓名</th>
                        <th width="50px">系級</th>
                        <th width="50px">學號</th>
                        <th width="50px">電話</th>
                        <th width="50px">接單內容</th>
                        <th width="50px">收件金額</th>
                        <th width="50px">接單人</th>
                        <th width="50px">備註</th>
                        <th width="50px">狀態</th>
                        <th width="50px">建單時間</th>
                        <th width="50px">最後修改時間</th>
                        <th width="50px">最後修改人</th>
                        <th width="10px"></th>
                        <th width="10px"></th>
                      </tr>
                    </tfoot>
                  </table>
                  <p style="font-size: 5em;">
                (๑´ㅁ`)<br />
                  <a href="#">
                  <b><?php  
                  echo "總金額:".$total."$<br />";
                  echo "單子數量:".$case;
                  ?></b>
                  </a>
                </p>
                  
                </div>
              </div>
            </div>
    </div>
<?php 
include("footer.php"); 
?>
