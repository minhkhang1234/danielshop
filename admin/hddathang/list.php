<div class="container mt-5">
      <div class="row tm-content-row" style="width:1800px">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">MÃ HÓA ĐƠN ĐH</th>
                    <th scope="col">MÃ KHÁCH HÀNG</th>
                    <th scope="col">HỌ TÊN</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">ĐỊA CHỈ</th>
                    <th scope="col">TRẠNG THÁI</th>
                    <th scope="col">GHI CHÚ USER</th>
                    <th scope="col">GHI CHÚ ADMIN</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                <?php       
        foreach(list_donhang() as $item){

            extract($item);
           
            
        

          
            $delsp = "index.php?act=delhd&ma_hoadon=".$ma_HDDH;
            $suasp = "index.php?act=suahd&ma_hoadon=".$ma_HDDH;
            
           
            
    ?>

            <tr>
                <td><?=$ma_HDDH?></td>

                <td><?=$ma_kh?></td>
                <td><?=$ho_ten?></td>
                <td><?=$email?></td>
                <td><?=$dia_chi?></td>
                <td><?=$trang_thai?></td>
                <td><?=$ghi_chu_kh?></td>
                <td><?=$ghi_chu_admin?></td>
                <!-- <td><?=$item['tong_tien']?></td> -->
                <!-- <td><?=$hinhsp?></td> -->
                <!-- <td><input type="number" name="trangthaigiaohang" id="" value=<?=$trang_thai?>></td> -->
                <td><a href="<?=$suasp?>"><input type="button" style="background-color:#6c757d; color:blue;height:35px;width:40px" value="Sửa"></a> |
                    <a href="<?=$delsp?>"><input onclick="confirmation()" type="button" style="background-color:#6c757d; color:red;height:35px;width:40px" value="Xóa"></a></td>
            </tr>

   <?php }   ?>
                </tbody>
              </table>
            </div>
            <!-- table container -->
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