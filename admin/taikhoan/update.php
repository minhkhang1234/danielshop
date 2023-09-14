
        <?php
            if(is_array($taikhoan)){
                extract($taikhoan);
            
        ?>
<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">CẬP NHẬT TÀI KHOẢN</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12" style="text-align:center;margin:auto">
                <form action="index.php?act=updatetk" class="tm-edit-product-form" method="post" enctype="multipart/form-data">
                  <div class="form-group mb-3">
                    <label for="id">
                      MÃ ĐĂNG NHẬP
                    </label>
                    <input type="text"  class="form-control validate" name="id" id=""><br>
                  </div>
                  <div class="form-group mb-3">
                    <label for="name">
                    TÊN TÀI KHOẢN
                    </label>
                    <input type="text" name="user" value="<?=$ten_dang_nhap?>" id=""  class="form-control validate" ><br>
                  </div>
                  <div class="form-group mb-3">
                    <label for="price">
                    EMAIL
                    </label>
                    <input type="text"  class="form-control validate"  name="email" value="<?=$email?>" id=""><br>
                    </div>
                  <div class="form-group mb-3">
                    <label for="description">MẬT KHẨU</label>
                    <input type="text"  class="form-control validate"  name="pass" value="<?=$mat_khau?>" id=""><br>
                  </div>
                  <div class="form-group mb-3">
                    <label for="description">VAI TRÒ</label>
                    <input type="number"  class="form-control validate" name="vaitro" value="<?=$vai_tro?>" id=""><br>
                  </div>
                  </div>
                  
              </div>
              <div class="col-12">
              <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" value="Cập Nhật" class="btn btn-primary btn-block text-uppercase" name="capnhat">
                <input type="reset" value="Nhập lại" class="btn btn-primary btn-block text-uppercase">
              </div>
            </form>
            <?php
                }
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>
