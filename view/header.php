<?php
      if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $checkuser = checkuser($user,$pass);
        if(is_array($checkuser)){
            $_SESSION['user']=$checkuser;
            header('location: index.php');
            // $thongbao="Đã đăng nhập thành công!!";
        }else{
            $thongbao="Account does not exist !!";
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home daniel</title>
    <link rel="shortcut icon" href=".view/images/logo.png"> 
    <link rel="stylesheet" href="./view/css/style-sp.css">
    <link rel="stylesheet" href="./view/themify-icons/themify-icons.css">
    <style>
        #myDIV{
        position: absolute;
        right: 19%;
        padding: 10px;
        top:10%;
        width: 150px;
        height: 100px;
        background-color: white;
        border-radius: 5px;
        display: none;
       
        }

        
        #myDIV UL{
        list-style: none;
        }
        

        #myDIV UL li{
        margin-bottom: 6px;
        }

        #myDIV UL li a{
        color: #000000;
        text-decoration: none;
        }

        </style>
</head>
<body>
    <div class="boxcenter">
        <header >
        <div class="top-left">
                <ul>
                    <li><a href="#">Dịch vụ khách hàng</a></li>
                    <li><a href="#">Định vị cửa hàng</a></li>
                    <li><a href="#">Bản tin</a></li>
                </ul>
            </div>
            <div class="top-right">
            <?php
        if(isset($_SESSION['user'])){
            extract($_SESSION['user']);
    ?>      
          
                    <ul>
                    <li><a href="#"  onclick="myFunction()"><i class="ti-user"></i> Tài khoản</a></li>
                    <li><a href="index.php?act=thoat"><i class="ti-heart"></i> Yêu thích</a></li>
                    <li><a href="index.php?act=viewcart"><i class="ti-shopping-cart"></i> Giỏ hàng ( <?php if(isset($_SESSION['cart']))count($_SESSION['cart'])?> )</a></li>
                    </ul>
                    
        
            
    <?php
        }else{
    ?>
  
                    <ul>
                    <li><a href="#" onclick="document.getElementById('dangnhap').style.display='block'"><i class="ti-user"></i> Đăng nhập</a></li>
                    <li><a href="#"><i class="ti-heart"></i> Yêu thích</a></li>
                    <li><a href="index.php?act=viewcart"><i class="ti-shopping-cart"></i> Giỏ hàng ( 0 )</a></li>
                    </ul>
                    


           
    <?php
        }
    ?>
        </div>
            
            <div class="logo">
                <a href="#"><img src="./view/images/logo.png" alt=""> </a>
            </div>

            <nav>
                <ul>
                    <li><a href="index.php?act=">Trang chủ</a></li>
                    <li><a href="index.php?act=showsanpham">Sản phẩm</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Bài viết</a></li>
                    <li><a href="#">Liên hệ</a></li>
                    <li><a href="#">Tạp chí</a></li>
                </ul>

                <div class="search-button">
                    <i class="ti-search"></i>
                    <input type="text" placeholder="Search product">
                    
                </div>
            </nav>

            <div id="myDIV">
                <ul>
                    <li><a href="">Cập nhật tài khoản</a></li>
                    <li><a href="index.php?act=thoat">Đăng xuất</a></li>
                    <li><a href="">Đăng nhập ADMIN</a></li>
                </ul>
            </div>

          
        </header>


        <div class="modal" id="dangnhap">
        <div class="logo-form">
            <img src="./view/images/logo-white.png" alt="">
        </div>
        
        <div class="container-dangnhap" >
            <a href="#" class="close" onclick="document.getElementById('dangnhap').style.display='none'"> &times;</a>
            <form action="index.php?act=dangnhap" method="post" class="animate">
                <h1>Đăng nhập</h1>
                <div class="container">
                    <label for="uname"><b>Tên Đăng Nhập:</b></label>
                    <input type="text" placeholder="Nhập tên đăng nhập" name="user" required> <br>
              
                    <label for="psw"><b>Mật khẩu:</b></label>
                    <input type="password" placeholder="Nhập mật khẩu" name="pass" required><br>
                    <input type="submit" value="đăng nhập" name="dangnhap">
                    <button type="submit" name="dangnhap">Đăng nhập</button>
                    <label>
                      <input type="checkbox" checked="checked" name="remember"> Nhớ mật khẩu
                    </label>
                  </div>
                  <div class="footer-iccon-login">
                    <ul>
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#"><i class="ti-themify-favicon"></i></a></li>
                        <li><a href="#"><i class="ti-youtube"></i></a></li>
                    </ul>
                </div> 
                
                <a href="#">Quên mật khẩu</a>
            </form>
        </div>

         
      </div>    