<?php
$sql = "INSERT INTO `users`(`useremail`, `userpassword`, `userfullname`, `useravatar`, `userbirthday`, `usergender`, `userphone`, `useraddress`, `notes`, `userlevel`, `userstatus`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])";
?>
<div class="container">
    <div class="account">
        <h2 class="account-in">Tạo tài khoản</h2>
        <form method="POST" enctype="multipart/form-data" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
        <div>
            <div class="col-sm-2">
                <label>Họ tên</label>
            </div>
            <div class="col-sm-10">
                <input style="width: 100%;" type="text" class="form-control" name="productname"/>
            </div>
        </div> 
        <div>
            <div class="col-sm-2">
                <label>Avatar</label>
            </div>
            <div class="col-sm-10">
                <input style="width: 100%;" type="file" name="productimage" class="form-control">
            </div>
        </div>
        <div>
            <div class="col-sm-2">
                <label>Email</label>
            </div>
            <div class="col-sm-10">
                <input style="width: 100%;" name="productprice" class="form-control" type="text"/>
            </div>
        </div>
        <div>
            <div class="col-sm-2">
                <label>Số điện thoại</label>
            </div>
            <div class="col-sm-10">
                <input style="width: 100%;" name="productprice" class="form-control" type="text"/>
            </div>
        </div>
        <div>
            <div class="col-sm-2">
                <label>Giới tính</label>
            </div>
            <div class="col-sm-10">
                <input style="width: 100%;" name="productprice" class="form-control" type="text"/>
            </div>
        </div> 
        <div>
            <div class="col-sm-2">
                <label>Mật khẩu</label>
            </div>
            <div class="col-sm-10">
                <input style="width: 100%;" name="productsale" class="form-control" type="number"/>
            </div>
        </div>

        <div>
            <div class="col-sm-2">
                <label>Tỉnh-Thành</label>
            </div>
            <?php 
                $provinces = $conn->prepare("SELECT * FROM `provinces`"); 
                $provinces->execute();
                $provinces =  $provinces->fetchAll(PDO::FETCH_OBJ);
            ?>
            <div class="col-sm-10">
                <select name="catid" id="provinces" class="form-control">
                    <option value="">--Chọn tỉnh/thành--</option>
                    <?php foreach ($provinces as $province) {?>
                    <?php
                        $typeareas = $conn->prepare("SELECT * FROM `typeareas` WHERE typeareaid =".$province->typeareaid); 
                        $typeareas->execute();
                        $typeareas =  $typeareas->fetch(PDO::FETCH_OBJ);
                    ?>
                    <option value="<?php echo $province->provinceid.'- '.$typeareas->typeareaname.' '.$province->provincename; ?>"><?php echo $typeareas->typeareaname.' '.$province->provincename; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div> 

        <div>
            <div class="col-sm-2">
                <label>Quận-Huyện</label>
            </div>
            <div class="col-sm-10">
                <select name="catid" id="districts" class="form-control">
                    <option value="">--Chọn quận/huyện--</option>
                </select>
            </div>
        </div> 

        <div>
            <div class="col-sm-2">
                <label>Phường-Xã</label>
            </div>
            <div class="col-sm-10">
                <select name="catid" id="wards" class="form-control">
                    <option value="">--Chọn xã/phường--</option>
                </select>
            </div>
        </div> 

        <div>
            <div class="col-sm-2">
                <label>Địa chỉ (Ngõ,Ngách,..)</label>
            </div>
            <div class="col-sm-10">
                <input style="width: 100%;" name="producttotal" class="form-control" type="text"/>
            </div>
        </div>
        <div>
            <div class="col-sm-10 text-center">
                <button type="submit" name="addproduct" class="btn btn-primary">Thêm mới</button>
                <button type="reset" class="btn btn-danger">Xóa</button>
            </div>
        </div>
        </form>
    </div>
</div>
