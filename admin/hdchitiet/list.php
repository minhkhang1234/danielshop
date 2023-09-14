   <div class="container mt-5">
      <div class="row tm-content-row" style="width:1800px">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">MÃ HÓA ĐƠN</th>
                    <th scope="col">MÃ SẢN PHẨM</th>
                    <th scope="col">TÊN SẢN PHẨM</th>
                    <th scope="col">GIÁ SẢN PHẨM</th>
                    <th scope="col">HÌNH ẢNH</th>
                    <th scope="col">TRẠNG THÁI GIAO HÀNG</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                <?php       
        foreach(list_hoadonchitiet() as $item){
            $list = json_decode($item['list_hh'],true);
            // die(print_r($list));
    
            if(is_array($list)){
                foreach($list as $i){
                
            $hang_hoa = loadone_sanpham($i['ma_hh']);
                extract($hang_hoa);

            $delsp = "index.php?act=delhd&ma_hoadon=".$item['ma_HDCT'];
            $suasp = "index.php?act=suahd&ma_hoadon=".$item['ma_HDCT'];
            $hinhpath ="../upload/". $hinh;
            if(is_file($hinhpath)){
                $hinhsp="<img src='".$hinhpath."' height='50px'>";
            }else{
                $hinhsp="no img";
            }
    ?>

            <tr>
                <td></td>
                <td><?=$item['id_hddh']?></td>

                <td><?=$ma_hh?></td>
                <td><?=$ten_hh?></td>
                <td><?=$don_gia?></td>
                <td><?=$hinhsp?></td>
                <td></td>
                <td><a href="<?=$suasp?>"><input type="button" style="background-color:#6c757d; color:blue;height:35px;width:40px" value="Sửa"></a> |
                    <a href="<?=$delsp?>"><input onclick="confirmation()" type="button" style="background-color:#6c757d; color:red;height:35px;width:40px" value="Xóa"></a></td>
            </tr>

   <?php  } } }?>
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