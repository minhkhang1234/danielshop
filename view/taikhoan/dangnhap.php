
<div class="dangnhap">
    <?php
        if(isset($_SESSION['user'])){
            extract($_SESSION['user']);
    ?>      
            <div class="chedouser" style="text-align:center;">
            <img src="upload/av.png" alt="" width="200" height="200">
                <p style="text-transform: uppercase; color:red;font-weight:900;">Hello: <?=$ten_dang_nhap?></p><br>   
                <!-- <a href="index.php?act=quenmk">Forgot password</a><br>   -->
                <a href="index.php?act=edit_taikhoan">Cập nhập tài khoản</a><br>
                <?php 
                    if($vai_tro==1){
                ?>
                <a href="admin/index.php">Đăng nhập quản trị</a><br>
                <?php
                    }
                ?>
                <a href="index.php?act=thoat">Thoát tài khoản</a><br>
            </div>
    <?php
        }else{
    ?>
        <form action="" method="post" style="border:1px solid black; width:600px;margin-left:500px;justify-content: center;background-color:white;border:none;" >
            <h1 style="background-color:#33b5e5; text-transform: uppercase;color:white;font-size:32px;text-align:center;height:60px;margin-top:100px;">Đăng nhập hệ thống</h1>
            <label for=""></label> <br>
            <input type="text" name="user" id="" placeholder="Tên đăng nhập" style="height:55px; text-align:center;width:600px"> <br>
            <label for=""></label> <br>
            <input type="password" name="pass" id="" placeholder="Mật khẩu" style="height:55px; text-align:center;width:600px"> <br>
            <input type="submit" name="dangnhap" value="Đăng nhập " class="button" style="width:100%;margin-left:0%;background-color:#ef4d4d;color:white;height:50px;margin-top:30px;border:none;"><br>
            <a href="index.php?act=dangky" class="register" style="text-align:center;"><h1 style="color:#33b5e5;font-size:25px;font-weight:500;text-decoration:none;margin-top:31px;border: 1px solid black;height=100px">ĐĂNG KÝ</h1></a><br>
           
            <?php if(isset($thongbao)&&($thongbao!="")) echo $thongbao?>
        </form>
    <?php
        }
    ?>
    
    
</div>
