<div class="row mb ">
    <div class="boxtrai mr ">
        <div class="row mb">
            <div class="boxtitle">
                ĐĂNG KÍ THÀNH VIÊN
            </div>
            <div class="row boxcontent">
                <form action="index.php?act=dangky" class=" formtk" method="post">
                    <div class="row mb10">
                        <label for="">Tên đăng nhập:</label>
                        <input type="text" name="user">
                    </div>
                    <div class="row mb10">
                        <label for="">Mật khẩu:</label>
                        <input type="password" name="pass">
                    </div>
                    <div class="row mb10">
                        <label for="">Email:</label>
                        <input type="email" name="email">
                    </div>
                    <input type="submit" value="Đăng ký" name="dangky">
                    <input type="reset" value="Nhập lại">
                </form>
                <h2 class="thongbao">
                <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
                ?>
                </h2>
            </div>
        </div>

    </div>

    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>
</div>