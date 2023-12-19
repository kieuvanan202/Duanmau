<?php

function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function insert_taikhoan($email,$user,$pass)
{
    $sql = "insert into taikhoan(email,user,pass) values('$email','$user','$pass')";
    pdo_execute($sql);
}

function checkuser($user,$pass)
{
    $sql = "select * from taikhoan where user= '" . $user."' and pass= '" . $pass."'";
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}

function checkemail($email)
{
    $sql = "select * from taikhoan where email= '" . $email."'";
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}

function update_taikhoan($id, $user, $pass, $email, $address, $tel)
{
        $sql = "UPDATE taikhoan SET user='" . $user . "', pass='" . $pass . "',email='" . $email . "',address='" . $address . "',tel='" . $tel . "' WHERE id=" . $id;

    pdo_execute($sql);
}


?>