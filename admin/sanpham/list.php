<div class="row">
    <div class="row formtitle mb">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    
  
    <form class="" action="index.php?act=listsp" method="post">
               <input type="text" name="kyw">
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
                <input type="submit" name="listok" id="" value="Tìm kiếm">
                
            </form>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
           
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>LƯỢT XEM</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;

                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $img = "<img src='" . $hinhpath . "' height='100px'>";
                    } else {
                        $img = "Không có hình";
                    }

                    echo ' <tr>
                            <td><input type="checkbox"></td>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $img . '</td>
                            <td>' . $price . '</td>
                            <td>' . $luotxem . '</td>
                            <td>
                                <a href="' . $suasp . '"><input type="button" value="Sửa"></a> 
                                <a href="' . $xoasp . '"><input type="button" value="Xóa"></a>
                            </td>
                        </tr>';
                }

                ?>
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
                ?>

            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>


