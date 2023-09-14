<!-- 
    <div class="container mt-5">
      <div class="row tm-content-row" style="width:1800px">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">MÃ SẢN PHẨM</th>
                    <th scope="col">TÊN SẢN PHẨM</th>
                    <th scope="col">GIÁ SẢN PHẨM</th>
                    <th scope="col">HÌNH ẢNH</th>
                    <th scope="col">MÔ TẢ</th>
                    <th scope="col">MÃ LOẠI HÀNG</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                 
                </tbody>
              </table>
            </div>
            table container
             <a
              href="index.php?act=addsp"class="btn btn-primary btn-block text-uppercase mb-3">Nhập thêm sản phẩm</a>
          </div>
        </div> -->
        



<div class="hreaf">
    <ul>
        <li><a href="index.php?act=addsp">Add Products</a></li>
        <li><a href="index.php?act=listsp">List Products</a></li>
    </ul>
</div>

<div class="container">
  <article> 
    <table>
        <tr>
            <th>đ</th>
            <th>id</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Hình</th>
            <th>mô tả</th>
            <th>mã loại hàng</th>
            <th>Chức năng</th>
        </tr>
        
        <?php 
                        foreach ($listsp as $sanpham) {
                            extract($sanpham);
                            $delsp = "index.php?act=delsp&ma_hh=".$ma_hh;
                            $suasp = "index.php?act=suasp&ma_hh=".$ma_hh;
                            $hinhpath ="../upload/".$hinh;
                            if(is_file($hinhpath)){
                                $hinhsp="<img src='".$hinhpath."' height='50px'>";
                            }else{
                                $hinhsp="no img";
                            }
                            echo '  <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$ma_hh.'</td>
                                        <td>'.$ten_hh.'</td>
                                        <td>'.$don_gia.'</td>
                                        <td>'.$hinhsp.'</td>
                                        <td>'.$mo_ta.'</td>
                                        <td>'.$ma_loaihang.'</td>
                                        <td><a href="'.$suasp.'"><input type="button" " value="Sửa"></a> <a href="'.$delsp.'"><input onclick="confirmation()" type="button"  value="Xóa"></a></td>
                                    </tr> ';
                        }
                    ?>
        
        
    </table>

  </article>
  <?php
    include "aside.php"
  ?>
   
   
</div>

<script>
          function confirmation(){
            var result = confirm("Bạn chắc chắn muốn xóa nó ?");
            if(result){
              console.log("Xóa")
            }
          }
        </script> 