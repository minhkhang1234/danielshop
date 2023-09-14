<!-- 
<div class="container mt-5">
      <div class="row tm-content-row" style="width:1800px">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">MÃ TÀI KHOẢN</th>
                    <th scope="col">TÊN ĐĂNG NHẬP</th>
                    <th scope="col">MẬT KHẨU</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">KÍCH HOẠT</th>
                    <th scope="col">VAI TRÒ</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
               
                </tbody>
              </table>
            </div>
           table container -->
          </div>
        </div>
        <script>
          function confirmation(){
            var result = confirm("Bạn chắc chắn muốn xóa nó ?");
            if(result){
              console.log("Xóa")
            }
          }
        </script> 


<div class="hreaf">
    
</div>

<div class="container">
  <article> 
    <table>
        <tr>
            <th></th>
            <th>id</th>
            <th>Name</th>
            <th>Opption</th>
        </tr>
        
        <?php 
        foreach ($listtaikhoan as $khachhang) {
            extract($khachhang);
            $deltk = "index.php?act=deltk&id=".$id;
            $suatk = "index.php?act=suatk&id=".$id;
           
            echo '  <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$ten_dang_nhap.'</td>
                        <td>'.$mat_khau.'</td>
                        <td>'.$email.'</td>
                        <td>'.$kich_hoat.'</td>
                        <td>'.$vai_tro.'</td>
                        <td><a href="'.$suatk.'"><input type="button" style="background-color:#6c757d; color:blue;height:35px;width:40px" value="Sửa"></a>   <a href="'.$deltk.'"><input  onclick="confirmation()" type="button" style="background-color:#6c757d; color:red;height:35px;width:40px" value="Xóa"></a></td>
                    </tr> ';
        }
    ?>
        
        
    </table>

  </article>
  <?php
    include "aside.php"
  ?>
   
   
</div>