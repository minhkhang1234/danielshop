<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath ="../upload/".$hinh;
    if(is_file($hinhpath)){
        $hinhsp="<img src='".$hinhpath."' height='50px'>";
    }else{
        $hinhsp="no img";
    }
?>
  <article>
        
                <form action="index.php?act=updatesp"  method="post" enctype="multipart/form-data">
              <div class="row">

              <label for="">Danh mục</label> 
                <select id="" name="iddm" >
                 <?php
                foreach ($listdm as $dm) {
                    extract($dm);
                    if($ma_loaihang==$ma_loai) $s="selected"; else $s="";
                    // var_dump($ma_loai);
                    echo'<option value="'.$ma_loai.'" '.$s.'>'.$ten_loai.'</option>';
                    
                }
            ?>
              </select><br>
              </div>
               
                  

                  <div class="row">
                    <label for="name">Tên Sản Phẩm</label> <br>
                    <input type="text" name="tensp" id="" value="<?=$ten_hh?>" ><br>
                  </div>


                  <div class="row">
                    <label for="price">Giá Sản Phẩm</label><br>
                    <input type="text" value="<?=$don_gia?>"  name="giasp" id=""><br>
                    </div>
                  <div class="form-group mb-3">
                    <label for="description">Mô tả</label><br>
                    <textarea name="mota" value="<?=$mo_ta?>" ></textarea>
                  </div>
                  
                  <div class="row">
                  <input type="file" name="hinh" value="UPLOAD PRODUCT IMAGE" /> <br>
                  <?=$hinhsp?>
                  </div>
                
                
                 
                <input type="hidden" name="ma_hh" value="<?=$ma_hh?>">
                <input type="submit" value="Thêm mới"  name="capnhat">
                <input type="reset" value="Nhập lại">
                
              
            </form>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>
           
    </article>

  <?php
    include "aside.php";
  ?>

</div>