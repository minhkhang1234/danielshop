<?php
    function insert_binhluan($idpro,$hovaten,$noidung,$ngaybinhluan){
        $sql="insert into binhluan(ma_hh,ten_kh,noi_dung,ngay_binhluan) values('$idpro','$hovaten','$noidung','$ngaybinhluan')";
        pdo_execute($sql);
    }

    function list_binhluan($idpro){
        $sql="select * from binhluan where 1";
        if($idpro>0){
            $sql.=" and ma_hh='".$idpro."'";
        }
        $sql.=" order by ma_BinhLuan";
        $listbl = pdo_query($sql);
        return $listbl;
    }
    
    function delete_binhluan($id){
        $sql="delete from binhluan where ma_bl=".$id;
        pdo_execute($sql);
    }

    function loadone_binhluan($id){
        $sql = "select * from binhluan where ma_bl=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function update_binhluan($id,$noidung,$mahh,$makh){
        $sql = "update binhluan set noi_dung='".$noidung."', ma_kh='".$makh."', ma_hh='".$mahh."' where ma_bl=".$id;
        pdo_execute($sql);
    }

    function get_time()
    {
        return date('d-m-Y');
    }
?>