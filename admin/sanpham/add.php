<!-- <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Thêm Sản Phẩm</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12" style="text-align:center;margin:auto">
                <form action="index.php?act=addsp" class="tm-edit-product-form" method="post" enctype="multipart/form-data">
                <p style="color:white;">Danh Mục</p>
                <select class="custom-select tm-select-accounts" id="" name="iddm" >
              
                    </select>
                  <div class="form-group mb-3">
                    <label for="id">
                      Mã Sản Phẩm
                    </label>
                    <input type="text"  class="form-control validate" name="name" id="" disabled><br>
                  </div>
                  <div class="form-group mb-3">
                    <label for="name">
                    Tên Sản Phẩm
                    </label>
                    <input type="text" name="tensp" id=""  class="form-control validate" ><br>
                  </div>
                  <div class="form-group mb-3">
                    <label for="price">
                    Giá Sản Phẩm
                    </label>
                    <input type="text"  class="form-control validate" name="price" id=""><br>
                    </div>
                  <div class="form-group mb-3">
                    <label for="description">Mô tả</label>
                    <textarea name="detail" class="form-control validate" rows="3"></textarea>
                  </div>
                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="custom-file mt-3 mb-3">
                  <input type="file"   class="btn btn-primary btn-block mx-auto"  name="hinh" value="Tải Hình Ảnh" onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <input type="submit" value="Thêm mới" class="btn btn-primary btn-block text-uppercase" name="themmoi">
                <input type="reset" value="Nhập lại" class="btn btn-primary btn-block text-uppercase">
                <button class="btn btn-primary btn-block text-uppercase" ><a href="index.php?act=listsp">Danh sách</button></a>
              </div>
            </form>
           
            </div>
          </div>
        </div>
      </div>
    </div>
 -->



 <div class="hreaf">
    <ul>
        <li><a href="index.php?act=addsp">Add products</a></li>
        <li><a href="index.php?act=listsp">List products</a></li>
    </ul>
</div>


<div class="container">
  <article> 
    <div class="boxcenter">
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <div class="row">
            <label for="">Danh mục:</label><br>
            <select name="iddm" >
            <?php
                  foreach ($listdm as $dm) {
                  extract($dm);
                  echo' <option value="'.$ma_loai.'">'.$ten_loai.'</option>';
                            }
                        ?>
              
            </select>
        </div>

        <div class="row">
             <label for="">Tên Sản Phẩm:</label><br>
             <input type="text" name="tensp">
        </div>

        <div class="row">
            <label for="">Giá Sản Phẩm:</label><br>
            <input type="text" name="price" >
        </div>

        <div class="row">
            <label for="">Hình:</label><br>
           <input type="file" name="image" >
        </div>

        <div class="row">
            <label for="">Chi tiết:</label><br>
            <textarea name="detail" cols="30" rows="10"></textarea>
        </div>

        
        <input type="submit" value="Thêm" name="themmoi">
        <input type="reset" value="reset" name="reset">

        <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>


   </form>
    </div>
  

  </article>
  <?php
    include "aside.php"
  ?>
   
   
</div>
