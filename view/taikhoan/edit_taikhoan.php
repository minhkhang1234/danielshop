<div class="dangky">
    <?php
        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
            extract($_SESSION['user']);
        
    ?>
    <form action="index.php?act=edit_taikhoan" id="thanhvien" method="post">
        <h1 class="title">UPDATE ACCOUNT</h1>
        <p>
            <label>Username:</label><br>
            <input type="text" name="user" value="<?=$ten_dang_nhap?>">
        </p>
        <p>
            <label>Email:</label><br>
            <input type="text" name="email" value="<?=$email?>">   
        </p>
        <p>
            <label>Password:</label><br>
            <input type="text" name="pass" value="<?=$mat_khau?>">
        </p>                     
        <p>
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" value="Update" class="button" name="capnhat">
        </p>
        <?php
            }
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
        ?>
    </form>   
</div>