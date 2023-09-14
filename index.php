<?php
    session_start();
    // if(!isset($_SESSION['giohang']))$_SESSION['giohang']=[];
    include "model/pdo.php";
    include "model/taikhoan.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "model/giohang.php";
    include "model/hoadon.php";
    include "global.php";
    include "view/header.php";
    
    
    $sanphamnew = list_sanpham_home();
    $listdanhmuc = list_danhmuc();
    function get_time()
    {
        return date('d-m-Y');
    }
    
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act) {
            case 'cart':
                if(isset($_POST['dat_hang'])){
                    $ma_kh = $_SESSION['user']['id'];
                    $ho_ten = $_POST['ho_ten'];
                    $so_dien_thoai = $_POST['so_dien_thoai'];
                    $email = $_POST['email'];
                    $dia_chi = $_POST['dia_chi'];
                    $ngay_lap_hd = get_time();
                    $ghi_chu_kh = $_POST['ghi_chu_kh'];
                    if( !empty($_SESSION['cart'])){
                        $ma_hddh = rand(1,10000);
                        if(check_ma_hddh($ma_hddh)){
                            insert_hoadondathang($ma_hddh,$ma_kh,$ho_ten,$so_dien_thoai,$email,$dia_chi,$ngay_lap_hd,$ghi_chu_kh);
                            $list_ma_hh = [];    
                            $tong_tien  = 0;
                            foreach($_SESSION['cart'] as $value){
    
                                $list_ma_hh[] = [
                                    'ma_hh' => $value['id'],
                                    'so_luong' => $value['soluong'],
                                    'tong_tien' => $value['giahanghoa'] * $value['soluong'],
                                ];
                                        $tong_tien+= $value['giahanghoa'] * $value['soluong'];
                            }
                            insert_hoadonchitiet(json_encode($list_ma_hh),$tong_tien,$ma_hddh);
                            unset($_SESSION['cart']);
                        }
                        echo "<script type='text/javascript'>alert('Dat hang thanh cong!!');</script>";
                     }else{
                        $thongbao = '';
                     }
                }
                include "view/viewcart.php";
                break;
            case 'about':
                # code...
                include "view/about.php";
                break;

            case 'showsanpham':
                # code...
                include "view/showsanpham.php";
                break;

            case 'contact':
                # code...
                include "view/contact.php";
                break;

            case 'sanphamct':
                if(isset($_GET['ma_hh'])&&($_GET['ma_hh']>0)){
                    $ma_hh = $_GET['ma_hh'];
                    $onesp=loadone_sanpham($ma_hh);
                    include "control/chitiet.php";
                }else {
                    include "control/sanpham.php";
                }
                
               
                break;


            case 'timkiemspindex':
                if(isset($_POST['timkiem'])&&($_POST['timkiem'])){ 
                    $keyword=$_POST['keyword'];
                }else{
                    $keyword='';
                }
                $listdm = list_danhmuc();
                $listsp = list_sanpham($keyword);
                include "view/sanpham.php";
                break;
            
            case 'sanphamtheodm':
                // if(isset($_POST['timkiem'])&&($_POST['timkiem'])){ 
                //     $keyword=$_POST['keyword'];
                //     $iddm=$_GET['iddm'];
                // }else{
                //     $keyword='';
                //     $iddm=0;
                // }
                //     $listsp=list_sanpham($keyword,$iddm);
                //     include "control/sanpham.php";
                // break;


                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm = $_GET['iddm'];
                    $listsp = list_sanpham_danhmuc($iddm);
                    include "view/sanpham.php";
                }else{
                    $listsp = list_hanghoa();
                    include "view/sanpham.php";
                }
                break;


            case 'chitietsanpham':
                if(isset($_GET['ma_hh'])&&($_GET['ma_hh']>0)){
                    $ma_hh=$_GET['ma_hh'];
                    $iddm=$_GET['iddm'];
                    $onesp=loadone_sanpham($ma_hh);
                    $sanphamcungloai = list_sanpham_cungloai($ma_hh,$iddm);
                    include "control/chitiet.php";
                }
                else{
                    include "view/home.php";
                }
                break;

            
                
                // case 'dangnhap':
                //     if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                //         $user=$_POST['user'];
                //         $pass=$_POST['pass'];
                //         $checkuser = checkuser($user,$pass);
                //         if(is_array($checkuser)){
                //             $_SESSION['user']=$checkuser;
                //             header('location: index.php');
                //             // $thongbao="Đã đăng nhập thành công!!";
                //         }else{
                //             $thongbao="Account does not exist !!";
                //         }
                        
                //     }
                //     include "control/home.php";
                //     break;

            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    insert_taikhoan($user,$email,$pass);
                    $thongbao="Sign up successful !!";
                    
                }
                include "view/taikhoan/dangky.php";
                break;

            case 'edit_taikhoan':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $user=$_POST['user'];
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];

                    update_taikhoan($id,$user,$pass,$email);
                    $_SESSION['user']=checkuser($user,$pass);
                    header('location: index.php?act=edit_taikhoan');
                   
                 
                }
                // $thongbao="Update successful !!";
                include "view/taikhoan/edit_taikhoan.php";
                break;
            case 'cart':
                include "view/viewcart.php";
                break;
           

                case 'addtocart':
                    if(isset($_POST['addtocart'])){ 
                        $mahh = $_POST['ma_hh'];
                        $tenhanghoa = $_POST['ten_hh'];
                        $giahanghoa = $_POST['gia_hh'];
                        $hinh = $_POST['hinh_hh'];
                        themvaogiohang($mahh,$tenhanghoa,$giahanghoa,$hinh);
                    }
                    // header('location: index.php?act=cart');
                    include "view/viewcart.php";
        
                    break;

                
    
            case 'removetocart':
                    xoagiohang();        
                    // header('location: index.php?act=cart');
                    include "view/viewcart.php";
                    break;
                    
            case 'removealltocart':
                    xoatatcagiohang();       
                    // header('location: index.php?act=cart');
                    include "view/viewcart.php";
                break;
                // case 'addcart':
                //     if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                //         $ma_hh=$_POST['ma_hh'];
                //         $ten_hh=$_POST['ten_hh'];
                //         $img=$_POST['img'];
                //         $don_gia=$_POST['don_gia'];
                //         if(isset($_POST['sl'])&&($_POST['sl']>0)){
                //             $sl=$_POST['sl'];
                //         }else{
                //             $sl=1;
                //         }
                //         $fg=0;
                //         //kiemtra
                //         $i=0;
                //         foreach($_SESSION['giohang'] as $item){
                //             if($item[1]===$ten_hh){
                //                 $slnew=$sl+$item[4];   
                //                 $_SESSION['giohang'][$i][4]=$slnew;
                //                 $fg=1;
                //                 break;
                //             }
                //             $i++;
                //         }
                //         //khoi tao 1 mang con
                //         if($fg==0){
                //             $item=array($ma_hh,$ten_hh,$img,$don_gia,$sl);
                //             $_SESSION['giohang'][]=$item;
                //         }
                //         header('location:index.php?act=viewcart');
                //     }
                //     break;
                case 'delcart':
                    if(isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
                    header('location:index.php');
                    break;
                 case 'delspcart':
                    if(isset($_GET['idcart'])){                     
                        array_slice($_SESSION['giohang'],$_GET['idcart'],1);
                    }else{
                        $_SESSION['giohang']=[];
                    }
                    include "view/viewcart.php";
                    break;
                case 'viewcart':
                    # code...
                    include "view/viewcart.php";
                    break;
            
            case'thoat':
                session_unset();
                // header("location: index.php");

                include "view/home.php";
                break;

            default:
                include "view/home.php";
                break;
        }
        
    }else{
        include "view/home.php";
    }
    include "view/footer.php";

?>