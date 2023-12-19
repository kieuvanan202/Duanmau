<?php

if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='100px'>";
} else {
    $hinh = "Không có hình";
}
?>

<div class="row">
    <div class="row formtitle">
        <h1>CẬP NHẬP LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <label for="">Danh mục:</label> <br>
                <select name="iddm">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        if ($iddm == $danhmuc['id'])
                            $s = "selected";
                        else
                            $s = "";
                        echo '<option value="' . $danhmuc['id'] . '"' . $s . '>' . $danhmuc['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                <label for="">Tên sản phẩm:</label> <br>
                <input type="text" name="tensp" value="<?= $name ?>" required>
            </div>
            <div class="row mb10">
                <label for="">Giá:</label> <br>
                <input type="text" name="giasp" value="<?= $price ?>" required>
            </div>
            <div class="row mb10">
                <label for="">Hình:</label> <br>
                <input type="file" name="hinh">
                <br>
                <?= $hinh ?>
            </div>
            <div class="row mb10">
                <label for="">Mô tả:</label> <br>
                <textarea name="mota" id="" cols="30" rows="10"><?= $mota ?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhap" value="CẬP NHẬP">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>

            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;

            ?>
        </form>
    </div>
</div>
</div>