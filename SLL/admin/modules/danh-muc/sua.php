<?php
  $categoryid = $_GET['Ma_dm'];
    $sql = "SELECT * FROM categorys where categoryid=".$categoryid;
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    $category =  $stmt->fetch(PDO::FETCH_OBJ);

    if(isset($_POST['editcategoryname']))
      {
        $editcategoryname = $_POST['editcategoryname'];
         $sql = 'UPDATE categorys SET categoryname="'.$editcategoryname.'" WHERE categoryid="'.$category->categoryid.'"';
          $conn->exec($sql);
          echo "<script>alert('sửa thành công');window.location.href='index.php?controller=danh-muc';</script>";      
        }
?>
<!--Basic forms-->
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default panel-border-color panel-border-color-primary">
      <div class="panel-heading panel-heading-divider">Chỉnh sửa danh mục</div>
      <div class="panel-body">
        <form method="POST">
          <div class="form-group xs-pt-10">
            <input type="text" name="editcategoryname" placeholder="Nhập danh mục" class="form-control" value="<?php echo $category->categoryname;?>">
          </div>
              <p class="text-right">
                <button type="submit" class="btn btn-space btn-primary" onclick="confirm('Bạn có muốn sửa danh mục: '+'<?php echo $category->categoryname;?>')">Sửa</button>
                <button class="btn btn-space btn-default">Hủy</button>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
