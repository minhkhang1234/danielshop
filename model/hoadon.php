<?php 

function insert_hoadondathang($ma_HDDH,$ma_kh,$ho_ten,$so_dien_thoai,$email,$dia_chi,$ngay_lap_hd,$ghi_chu_kh){
    $sql="insert into hoadondathang(ma_HDDH,ma_kh,ho_ten,so_dien_thoai,email,
    dia_chi,ngay_lap_HD,ghi_chu_kh) 
    values('$ma_HDDH','$ma_kh','$ho_ten','$so_dien_thoai','$email','$dia_chi','$ngay_lap_hd','$ghi_chu_kh')";
    pdo_execute($sql);
}

function check_ma_hddh($ma_hddh)
{
    # code...
    $sql="SELECT * FROM `hoadondathang` WHERE ma_HDDH = '$ma_hddh'";
    $result =  pdo_query_one($sql);
   return  (!$result) ?  true :  false;


}
function list_donhang()
{
    $sql = "select * from hoadondathang";
    $list = pdo_query($sql);
    return $list;
}
function list_hoadonchitiet()
{
    $sql="select hoadonchitiet.*,hoadondathang.*,taikhoan.id from hoadonchitiet
        inner join hoadondathang on hoadondathang.ma_HDDH = hoadonchitiet.id_hddh
        inner join taikhoan on hoadondathang.ma_kh = taikhoan.id ";
    $list = pdo_query($sql);
    return $list;
}

function insert_hoadonchitiet($list_hh,$tong_tien,$id_hddh){
    $sql="insert into hoadonchitiet(list_hh,tong_tien,id_hddh) 
    values('$list_hh','$tong_tien','$id_hddh')";
    pdo_execute($sql);
}


function delete_hoadonchitiet($ma_hdct){
    $sql="delete from hoadonchitiet where ma_HDCT=".$ma_hdct;
    pdo_execute($sql);
}
