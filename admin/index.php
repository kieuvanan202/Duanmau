<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "header.php";
//controler
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        /*controller danh muc */

        case 'adddm':
            //kiem tra nguoi dung co an vao nut add hay khong
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST["tenloai"];
                insert__danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;

        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
                $thongbao = "Xóa thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $tenloai = $_POST["tenloai"];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập nhập thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/update.php";
            break;

        /*controller san pham */

        case 'addsp':
            //kiem tra nguoi dung co an vao nut add hay khong
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST["iddm"];
                $tensp = $_POST["tensp"];
                $giasp = $_POST["giasp"];
                $mota = $_POST["mota"];

                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;

        case 'listsp':
            if (isset($_POST['listok'])) {
                $kyw = $_POST['kyw'] ?? "";
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
                $thongbao = "Xóa thành công";
            }
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;

        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;

        case 'updatesp':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id = $_POST['id'];
                $iddm = $_POST["iddm"];
                $tensp = $_POST["tensp"];
                $giasp = $_POST["giasp"];
                $mota = $_POST["mota"];


                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);

                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập nhập thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;


        /*controller khach hang */

        case 'dskh':

            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

        /*controller binh luan */

        case 'dsbl':

            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;


        /*controller thong ke vs bieu do */

        case 'thongke':

            $listthongke = loadall_thongke();
            include "thongke/list.php";
            break;

        case 'bieudo':

            $listthongke = loadall_thongke();
            include "thongke/bieudo.php";
            break;

        default:
            include "home.php";
            break;

            case 'dangxuat':
                session_unset();
                header('Location:../index.php');
                
                break;
    }

} else {
    include "home.php";
}

include "footer.php";

?>