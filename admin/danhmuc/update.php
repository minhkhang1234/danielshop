<!-- <?php
// var_dump($dm);
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">CẬP NHẬT DANH MỤC</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12" style="text-align:center;margin:auto">
                <form action="index.php?act=updatedm" class="tm-edit-product-form" method="post" enctype="multipart/form-data">
                  <div class="form-group mb-3">
                    <label for="name">
                    TÊN LOẠI
                    </label>
                    <input type="text" name="tenloai" id=""  class="form-control validate"value="<?php if(isset($ten_loai)&&($ten_loai!="")) echo $ten_loai; ?>" ><br>
                  </div>
              </div>
              <div class="col-12">
              <input type="hidden" name="maloai" value="<?php if(isset($ma_loai)&&($ma_loai>0)) echo $ma_loai; ?>">
                <input type="submit" value="Cập nhật" class="btn btn-primary btn-block text-uppercase" name="capnhat">
                <input type="reset" value="Nhập lại" class="btn btn-primary btn-block text-uppercase">
                <button class="btn btn-primary btn-block text-uppercase" ><a href="index.php?act=listdm">Danh sách</button></a>
              </div>
            </form>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>
            </div>
          </div>
        </div>
      </div>
    </div> -->


    <?php
    if(is_array($dm)){
        extract($dm);
    }
?>

<div class="hreaf">
    <ul>
        <li><a href="index.php?act=adddm">Add category</a></li>
        <li><a href="index.php?act=listdm">List category</a></li>
    </ul>
</div>

<div class="container">
  <article> 
   <form action="index.php?act=updatedm" method="post">
        <div class="row">
            <label for="">Mã Loại:</label><br>
            <input type="text" name="maloai" disabled>
        </div>

        <div class="row">
             <label for="">Tên Loại:</label><br>
             <input type="text" name="tenloai" value="<?php if(isset($ten_loai)&&($ten_loai!="")) echo $ten_loai; ?>">
        </div>
        <br>
        <input type="hidden" name="maloai" value="<?php if(isset($ma_loai)&&($ma_loai>0)) echo $ma_loai; ?>">
        <input type="submit" value="Cập nhật" name="capnhat">
        <input type="reset" value="reset" name="reset">

        <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>
   </form>

  </article>
  <?php
    include "aside.php"
  ?>
   
   
</div>