<div class="row mb ">
    <div class="boxtrai mr ">
        <div class="row mb">
            <div class="boxtitle">
                QUÊN MẬT KHẨU
            </div>
            <div class="row boxcontent">
                <form action="index.php?act=quenmk" class=" formtk" method="post">
                   
                    <div class="row mb">
                        <label for="">Email:</label>
                        <input type="email" name="email">
                    </div>
                    <input type="submit" value="Lấy lại mật khẩu" name="quenmk">
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