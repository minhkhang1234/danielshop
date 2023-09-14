<?php
    function list_hanghoa(){
        $sql="select * from hanghoa";
        $listhh = pdo_query($sql);
        return $listhh;
    }
    function list_sanpham_home(){
        $sql="select * from hanghoa where 1 order by rand(ma_hh) ";
        $listsp = pdo_query($sql);
        return $listsp;
    }

    function list_sanpham($keyword){
        $sql="select * from hanghoa where 1";
        if($keyword!=""){
            $sql.=" and ten_hh like '%".$keyword."%'";
        }
        $listsp = pdo_query($sql);
        return $listsp;
    }

    function list_sanpham_cungloai($ma_hh,$iddm){
        $sql="select * from hanghoa where ma_loaihang='".$iddm."' order by ma_hh limit 0,8";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    
    function list_sanpham_index($keyword){
        $sql="select * from hanghoa where 1";
        if($keyword!=""){
            $sql.=" and ten_hh like '%".$keyword."%'";
        }
        //nối chuỗi phải có dấu cách, nếu ko sẽ bị lỗi dính chùm cú pháp
        $sql.=" order by ma_hh";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    
    function loadone_sanpham($ma_hh){
        $sql = "select * from hanghoa where ma_hh=".$ma_hh;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    
    function insert_sanpham($tensp,$giasp,$hinhsp,$mota,$iddm){
        $sql="insert into hanghoa(ten_hh,don_gia,hinh,mo_ta,ma_loaihang) values('$tensp','$giasp','$hinhsp','$mota','$iddm')";
        pdo_execute($sql);
    }

    function update_sanpham($ma_hh,$tensp,$giasp,$hinhsp,$mota,$iddm){
        if($hinhsp!="")
            $sql = "update hanghoa set ten_hh='".$tensp."',don_gia='".$giasp."',hinh='".$hinhsp."',mo_ta='".$mota."',ma_loaihang='".$iddm."' where ma_hh=".$ma_hh;
        else
            $sql = "update hanghoa set ten_hh='".$tensp."',don_gia='".$giasp."',                   mo_ta='".$mota."',ma_loaihang='".$iddm."' where ma_hh=".$ma_hh;
        pdo_execute($sql);
    }

    function delete_sanpham($ma_hh){
        $sql="delete from hanghoa where ma_hh=".$ma_hh;
        pdo_execute($sql);
    }

    function list_sanpham_danhmuc($iddm){
        $sql="select * from hanghoa where ma_loaihang=".$iddm." limit 0,32";
        $listhh = pdo_query($sql);
        return $listhh;
    }

?>