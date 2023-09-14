<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/hoadon.php";
    include "header.php";

    //controller
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
                //loại hàng
            case 'adddm':
                //kiểm tra user đã click vào hay chưa
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm mới thành công!";
                }
                include "danhmuc/add.php";
                break;

            case 'listdm':
                $listdm = list_danhmuc();
                include "danhmuc/list.php";
                break;
            
            case 'deldm':
                if(isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)){                  
                    delete_danhmuc($_GET['ma_loai']);
                }
                $listdm = list_danhmuc();
                include "danhmuc/list.php";
                break;
            
            case 'suadm':
                if(isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)){ 
                    $dm = loadone_danhmuc($_GET['ma_loai']);
                }
                include "danhmuc/update.php";
                break;

            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $maloai = $_POST['maloai'];
                    update_danhmuc($maloai,$tenloai);
                    $thongbao = "Cập nhật thành công!";
                }
                $listdm = list_danhmuc();
                include "danhmuc/list.php";
                break;
//////////////////////////////////////////////////////////////////////////////////////////////////////////
                //sản phẩm
            case 'addsp':
                //kiểm tra user đã click vào hay chưa
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm = $_POST['iddm'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $detail = $_POST['detail'];
                    $image = $_FILES['image']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //thông báo nếu upload file hình thành công
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        //thông báo nếu upload ko thành công
                        // echo "Sorry, there was an error uploading your file.";
                    }

                    insert_sanpham($name,$price,$iamge,$detail,$iddm);
                    $thongbao = "Thêm mới thành công!";
                }
                $listdm = list_danhmuc();
                include "sanpham/add.php";
                break;

            case 'listsp':
                if(isset($_POST['timkiemsp'])&&($_POST['timkiemsp'])){ 
                    $keyword=$_POST['keyword'];
                    $iddm=$_POST['iddm'];
                }else{
                    $keyword='';
                    $iddm=0;
                }
                $listdm = list_danhmuc();
                $listsp = list_sanpham($keyword,$iddm);
                include "sanpham/list.php";
                break;
            
            case 'delsp':
                if(isset($_GET['ma_hh'])&&($_GET['ma_hh']>0)){                  
                    delete_sanpham($_GET['ma_hh']);
                }
                $listsp = list_sanpham("",0);
                include "sanpham/list.php";
                break;
            
            case 'suasp':
                if(isset($_GET['ma_hh'])&&($_GET['ma_hh']>0)){ 
                $sanpham = loadone_sanpham($_GET['ma_hh']);
                }
                $listdm = list_danhmuc();
                include "sanpham/update.php";
                break;

            case 'updatesp':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $iddm = $_POST['iddm'];
                    $mahh = $_POST['ma_hh'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinhsp = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //thông báo nếu upload file hình thành công
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        //thông báo nếu upload ko thành công
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    
                    // var_dump($hinh);
                    update_sanpham($mahh,$tensp,$giasp,$hinhsp,$mota,$iddm);
                    $thongbao = "Cập nhật thành công!";
                }
                $listdm = list_danhmuc();
                $listsp = list_sanpham("",0);
                include "sanpham/list.php";
                break;
//////////////////////////////////////////////////////////////////////////////////////////////////////////
                //khách hàng
                case 'dskh':
                    $listtaikhoan = list_taikhoan();
                    include "taikhoan/list.php";
                    break;
    
                case 'suatk':
                    if(isset($_GET['id'])&&($_GET['id']>0)){ 
                        $id=$_GET['id'];
                        $taikhoan = loadone_taikhoan($id);
                    }
                    $listtaikhoan = list_taikhoan();
                    include "taikhoan/update.php";
                    break;
                case 'updatetk':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id=$_POST['id'];
                        $user=$_POST['user'];
                        $email=$_POST['email'];
                        $pass=$_POST['pass'];
                        $vaitro=$_POST['vaitro'];
                        update_taikhoan($id,$user,$pass,$email,$vaitro);
                    }
                    $listtaikhoan = list_taikhoan();
                    include "taikhoan/list.php";
                    break;
    
                case 'deltk':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_taikhoan($_GET['id']);
                    }
                    $listtaikhoan = list_taikhoan();
                    include "taikhoan/list.php";
                    break;
//////////////////////////////////////////////////////////////////////////////////////////////////////////
                //đơn hàng
                case 'dshd':
                    $listdonhang = list_donhang();
                    $listkhachhang = list_taikhoan();
                    include "hddathang/list.php";
                    break;
        
                case 'delhd':
                    if(isset($_GET['ma_hoadon'])&&($_GET['ma_hoadon']>0)){                  
                        delete_hoadonchitiet($_GET['ma_hoadon']);
                    }
                    $listhoadon = list_hoadonchitiet();
                    include "hdchitiet/list.php";
                    break;
        
//////////////////////////////////////////////////////////////////////////////////////////////////////////
                //hóa đơn chi tiết
                case 'dshdct':
                    $listdonhang = list_hoadonchitiet();
                    include "hdchitiet/list.php";
                    break;
        
                case 'delhdct':
                    if(isset($_GET['ma_hoadon'])&&($_GET['ma_hoadon']>0)){                  
                        delete_hoadonchitiet($_GET['ma_hoadon']);
                    }
                    $listhoadon = list_hoadonchitiet();
                    include "hdchitiet/list.php";
                    break;  





            default:
                include "home.php";
            break;
        }
    }else{
        include "home.php";
    }


    include "footer.php";

?>