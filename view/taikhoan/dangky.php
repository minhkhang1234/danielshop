<div class="dangky">
    <form action="index.php?act=dangky" id="thanhvien" method="post" style="border:1px solid black; width:600px;margin-left:500px;justify-content: center;background-color:white;border:none;">
        <h1 class="title" style="background-color:#33b5e5; text-transform: uppercase;color:white;font-size:32px;text-align:center;height:60px;margin-top:100px;">ĐĂNG KÝ TÀI KHOẢN</h1>
        <p>
            <br>
            <input type="text" name="user" style="height:55px; text-align:center;width:600px" placeholder="Tên đăng ký">
        </p>
        <p>
            <br>
            <input type="text" name="email" style="height:55px; text-align:center;width:600px" placeholder="Email" >   
        </p>
        <p>
            <br>
            <input type="password" name="pass" style="height:55px; text-align:center;width:600px" placeholder="Mật khẩu">
        </p>           
        <p>
            <input type="submit" value="Đăng Ký" class="button" name="dangky" style="width:100%;margin-left:0%;background-color:#ef4d4d;color:white;height:50px;margin-top:30px;border:none;">
        </p>
        <a href="index.php?act=dangnhap" class="register" style="text-align:center;"><h1 style="color:#33b5e5;font-size:25px;font-weight:500;text-decoration:none;margin-top:31px;border: 1px solid black;height=100px">ĐĂNG NHẬP</h1></a><br>
        <?php
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
        ?>
    </form>   
</div>