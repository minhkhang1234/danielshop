<!-- 
<main> -->
<aside>
            <?php
                        // $listdanhmuc=list_danhmuc();
                        foreach ($listdanhmuc as $dm){
                            extract($dm);
                            $linkdm="index.php?act=sanphamtheodm&iddm=".$ma_loai;
                            echo '  <ul>
                                    <li>
                                        <a  href="'.$linkdm.'">'.$ten_loai.'</a>
                                    </li>  
                                    </ul>   
                                    ';
                        }
                    ?>
            
                <ul>
                    <li><a href="#"><strong>Điểm đến mới</strong></a></li>
                    <li><a href="#">Xem tất cả</a></li>
                    <li><a href="#">Quần áo</a></li>
                    <li><a href="#">Giày đép và phụ kiện</a></li>
                    <li><a href="">Quần áo thể thao</a></li>
                </ul>

                <ul>
                    <li><a href="#"><strong>Lookbook mùa xuân</strong></a></li>
                    <li><a href="#">Vẻ ngoài giản dị</a></li>
                    <li><a href="#">Vẻ ngoài thông minh</a></li>
                    <li><a href="#">Vẻ ngoài đường phố</a></li>
                    <li><a href="">Vẻ ngoài đường phố</a></li>
                </ul>

                <ul>
                    <li><a href="#"><strong>Ưu đãi & Ưu đãi</strong></a></li>
                    <li><a href="#">Giảm đến 50%</a></li>
                    <li><a href="#">Giảm thành viên từ $10.99</a></li>
                    <li><a href="#">Vẻ ngoài đường phố</a></li>
                    <li><a href="#">Giảm giá sinh viên</a></li>
                </ul>

                <ul>
                    <li><a href="#"><strong>Đang là xu hướng</strong></a></li>
                    <li><a href="#">Bán chạy nhất từ $6.99</a></li>
                    <li><a href="#">Ghim trống</a></li>
                    <li><a href="#">Cửa hàng đồ họa</a></li>
                </ul>

                <ul>
                    <li><a href="#"><strong>Mua sắm theo sản phẩm</strong></a></li>
                    <li><a href="#">Áo phong & áo ba lỗ</a></li>
                    <li><a href="#">Quần dài</a></li>
                    <li><a href="#">Hoodie & áo nỉ</a></li>
                    <li><a href="#">Áo sơ mi</a></li>
                    <li><a href="#">Suits & Biazes</a></li>
                    <li><a href="#">Quần jean</a></li>
                    <li><a href="#">Quần short</a></li>
                    <li><a href="#">Đồ bơi</a></li>
                    <li><a href="#">Đồ lót</a></li>
                    <li><a href="#">Vớ</a></li>
                    <li><a href="#">Áo len</a></li>

                </ul>


            

                
            </aside>
            <article>
                <h1>Xem tất cả</h1> <br>
                <?php
                    $i=1;
                    foreach ($sanphamnew as $sp) {
                        extract($sp);
                        $linkdm="index.php?act=sanphamct&ma_hh=".$ma_hh;  
                        $img=$img_path.$hinh;
                        if($i%4==0){
                            $br="<br>";
                        }else{
                            $br="";
                        }
                        echo '
                        <div class="box-product br">
                        <img src="'.$img.'"alt="">
                         <p class="name-product ">'.$mo_ta.'</p>
                        <p><a href="'.$linkdm.'">'.$ten_hh.'</a></p>
                        <p>$ '.$don_gia.'</p>
                        <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="ma_hh" value="<?=$ma_hh?>">
                        <input type="hidden" name="ten_hh" value="<?=$ten_hh?>">
                        <input type="hidden" name="gia_hh" value="<?=$don_gia?>">
                        <input type="hidden" name="hinh_hh" value="<?=$img?>">
                        
                        <div>
                          <input type="submit" class="input1" value="Thêm vào giỏ" name="addtocart">
                        </div>
                    </form>
                    </div>
                  
                        

                    '.$br.'';
                    }
                        $i+=1; 
                        ?>
                        
                        
                    
              

              
                
            </article>
        <!-- </main> -->
     