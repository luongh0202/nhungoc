<?php   
    $categoryid = $_GET['Ma_dm'];
    $sql = "DELETE FROM categorys where categoryid=".$categoryid;
    $conn->exec($sql);
    echo "<script>alert('xóa thành công');window.location.href='index.php?controller=danh-muc';</script>";
    