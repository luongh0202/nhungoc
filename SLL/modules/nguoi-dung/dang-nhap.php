<?php
$sql = "INSERT INTO `users`(`useremail`, `userpassword`, `userfullname`, `useravatar`, `userbirthday`, `usergender`, `userphone`, `useraddress`, `notes`, `userlevel`, `userstatus`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])";
?>
<div class="container">
    <div class="account">
        <h2 class="account-in">Tạo tài khoản</h2>
        <form method="POST" enctype="multipart/form-data" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
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
                <label>Mật khẩu</label>
            </div>
            <div class="col-sm-10">
                <input style="width: 100%;" name="productsale" class="form-control" type="number"/>
            </div>
        </div>
        <div>
            <div class="col-sm-10 text-center">
                <button type="submit" name="addproduct" class="btn btn-primary">Đăng nhập</button>
            </div>
        </div>
        </form>
    </div>
</div>