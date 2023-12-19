<?php

if(isset($dm) && is_array($dm)){
    extract($dm);
} 
?>

<div class="row">
    <div class="row formtitle">
        <h1>CẬP NHẬP LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatedm" method="post">
            <div class="row mb10">
                <label for="">Mã loại:</label> <br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row mb10">
                <label for="">Tên loại:</label> <br>
                <input type="text" name="tenloai" value="<?= isset($name) && $name != "" ? $name : ""; ?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= isset($id) && $id >0 ? $id : ""; ?>">
                <input type="submit" name="capnhap" value="CẬP NHẬP">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
                    if(isset($thongbao)&&($thongbao!=""))  echo $thongbao;
                   
                    ?>
        </form>
    </div>
</div>
</div>