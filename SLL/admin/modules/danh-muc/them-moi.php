<?php
  if(isset($_POST['addcategory']))
  {
    $categoryname = $_POST['categoryname'];
    $sql = 'INSERT INTO `categorys`(`categoryname`) VALUES ("'.$categoryname.'")';
      $conn->exec($sql);
      echo "<script>alert('Thêm mới thành công');window.location.href='index.php?controller=danh-muc';</script>";
    }
?>
<!--Basic forms-->
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default panel-border-color panel-border-color-primary">
      <div class="panel-heading panel-heading-divider">Thêm mới danh mục</div>
      <div class="panel-body">
        <form method="POST">
          <div class="form-group xs-pt-10">
            <label>Nhập danh mục cần thêm</label>
            <input type="text" name="categoryname" placeholder="Nhập danh mục" class="form-control">
          </div>
              <p class="text-right">
                <button type="submit" name="addcategory" class="btn btn-space btn-primary" >Thêm</button>
                <button class="btn btn-space btn-default">Hủy</button>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--Basic Elements-->