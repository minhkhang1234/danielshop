<?php
    function list_taikhoan(){
        $sql="select * from taikhoan";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
    function insert_taikhoan($user,$email,$pass){
        $sql="insert into taikhoan(ten_dang_nhap,email,mat_khau) values('$user','$email','$pass')";
        pdo_execute($sql);
    }
    function checkuser($user,$pass){
        $sql = "select * from taikhoan where ten_dang_nhap='".$user."' and mat_khau='".$pass."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function update_taikhoan($id,$user,$pass,$email,$vaitro){
        $sql = "update taikhoan set ten_dang_nhap='".$user."', mat_khau='".$pass."', email='".$email."', vai_tro=".$vaitro." where id=".$id;
        pdo_execute($sql);
    }
    function delete_taikhoan($id){
        $sql="delete from taikhoan where id=".$id;
        pdo_execute($sql);
    }
    function loadone_taikhoan($id){
        $sql = "select * from taikhoan where id=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }
?>