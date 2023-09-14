<!-- 
<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Thêm Danh Mục</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12" style="text-align:center;margin:auto">
                <form action="index.php?act=adddm" class="tm-edit-product-form" method="post">
                  <div class="form-group mb-3">
                    <label for="name">
                    Tên Danh Mục
                    </label>
                    <input type="text" name="tenloai" id=""  class="form-control validate" ><br>
                  </div>
              </div>
              <div class="col-12">
                <input type="submit" value="Thêm mới" class="btn btn-primary btn-block text-uppercase" name="themmoi">
                <input type="reset" value="Nhập lại" class="btn btn-primary btn-block text-uppercase">
                <button class="btn btn-primary btn-block text-uppercase" ><a href="index.php?act=listdm">Danh sách</button></a>
              </div>
            </form>
         
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <div class="hreaf">
    <ul>
        <li><a href="index.php?act=adddm">Add category</a></li>
        <li><a href="index.php?act=listdm">List category</a></li>
    </ul>
</div>

<div class="container">
  <article> 
    <div class="boxcenter">
    <form action="index.php?act=adddm" method="post">
        <div class="row">
            <label for="">Mã Loại:</label><br>
            <input type="text" name="maloai" disabled>
        </div>

        <div class="row">
             <label for="">Tên Loại:</label><br>
             <input type="text" name="tenloai">
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
    include "aside.php";
  ?>
   
   
</div>
