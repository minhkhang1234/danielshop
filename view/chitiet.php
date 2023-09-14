




































<main >
<?php
        extract($onesp);
    ?>


<?php
                    extract($onesp);
                    $img=$img_path.$hinh;
                    $sotiengiam=($giam_gia-$don_gia).'.000';
                    echo '
                    
                    
                    <div class="ct-left">
                    <div class="ct-row">
                        <img src="'.$img.'" alt=""> 
                    </div>
        
                    <div class="ct-row1">
                    <img src="'.$img.'" alt=""> 
                    </div>
        
                    
                    
                    
                </div>';
                ?>




        <?php
        
        echo'
        
          <div class="ct-right">
          <form action="index.php?act=addtocart" method="post">
          <input type="hidden" name="ma_hh" value="<?=$ma_hh?>">
          <input type="hidden" name="ten_hh" value="<?=$ten_hh?>">
          <input type="hidden" name="gia_hh" value="<?=$don_gia?>">
          <input type="hidden" name="hinh_hh" value="<?=$img?>">
          
          <div>
            <input type="submit" class="input1" value="Thêm vào giỏ" name="addtocart">
          </div>
      </form>
  </div><?=$br?>
</div>
</form>
            <div class="name-product"> '.$ten_hh.' </div>
            <div class="detail-product"> đasdsa</div>
            <p class="h3 py-2" style="color:red"  name="price">'.$don_gia.' VND</p>

    </div>';
      
    ?>
           
         
          
           
            <div class="main-detail">Keith Haring x H&M. Áo hoodie vừa vặn thoải mái bằng vải pha cotton với mặt trong chải lông mềm mại. 
                Mũ trùm đầu có lót, túi kangaroo, trễ vai và tay áo dài. Ribbing ở còng và hem.Keith Haring x H&M. Relaxed-fit sweatshirt hoodie in cotton-blend 
                fabric with soft, brushed inside. Lined hood, kangaroo pocket, dropped shoulders, and long sleeves. Ribbing at cuffs and hem.</div> <br>
                <div class="content-product">
                    <strong>Thành phầnComposition</strong> <br> <br>
                    <p>Vỏ: Cotton 60%, Polyester 40%Shell: Cotton 60%, Polyester 40%Lớp lót mũ: Cotton 60%, Polyester 40%Hood lining: Cotton 60%, Polyester 40%</p>
                </div>
            </div>
           
        </div>
        </main>

        <main class="boxcenter main-ct">
            <h1>Xem tất cả</h1> <br> <br>

            <div class="boxct-product">
                <img src="https://lp2.hm.com/hmgoepprod?set=source[/49/2c/492c0cf09a5fa5702939179f8b4b0dfedcbdee48.jpg],origin[dam],category[],type[DESCRIPTIVESTILLLIFE],res[y],hmver[2]&call=url[file:/product/main]" alt="">
                 <p class="name-product ">Keith Haring x Daniel</p>
                <p><a href="">Quần cotton có hoa văn thoải mái</a></p>
                <p>$ 24.99</p>
            </div>
        </main>
