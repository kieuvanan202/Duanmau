<div class="row mb ">
    <div class="boxtitle">TÀI KHOẢN</div>
    <div class="boxcontent formtk">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
         <div class="row mb10">
                    <label for="">Xin chào: <?=$user?></label><br>
                   
                </div>
                <div class="row mb10">
                <li>
                    <a href="index.php?act=edit_taikhoan">Cập nhập tài khoản </a>
                </li>
                <?php
                if($role==1){
                
                ?>
                <li>
                    <a href="admin/index.php">Đăng nhập Admin </a>
                </li>
            <?php } ?>
                <li>
                    <a href="index.php?act=thoat">Thoát </a>
                </li>
                </div>



            <?php
        } else {
            ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="row mb10">
                    <label for="">Tên đăng nhập:</label><br>
                    <input type="text" name="user">
                </div>
                <div class="row mb10">
                    <label for="">Mật khẩu:</label><br>
                    <input type="password" name="pass">
                </div>
                <div class="row mb10">
                    <input type="checkbox" name="" id="">Ghi nhớ tài khoản?<br>
                </div>
                <div class="row mb10">
                    <input type="submit" name="dangnhap" value="Đăng nhập">
                </div>
                <li>
                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=dangky">Đăng ký </a>
                </li>
            </form>
        <?php } ?>
    </div>
</div>
<div class="row mb ">
    <div class="boxtitle">DANH MỤC</div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '
                        <li>
                            <a href="' . $linkdm . '">' . $name . '</a>
                        </li>';
            }
            ?>

        </ul>
    </div>
    <div class="boxfooter searchbox">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw">
            <input type="submit" name="timkiem" value="Tìm kiếm">
        </form>
    </div>
</div>
<div class="row ">
    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
    <div class="row boxcontent">
        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $img_path . $img;

            echo
                '<div class="row mb10 top10">

                    <a href="' . $linksp . '"><img src="' . $img . '" alt=""></a>
                    <a href="' . $linksp . '">' . $name . '</a>

                </div>';

        }
        ?>
    </div>
</div>