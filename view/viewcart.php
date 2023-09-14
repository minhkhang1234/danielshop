
        <main >
        <div class="vc-left">


        <?php 
							if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
								$total_sp = 0;
								$cart = $_SESSION['cart'];
								foreach ($cart as $item) {
									extract($item);
									$total_sp += ($giahanghoa) * $soluong;
						?>
 					  <div class="cart-main">
            <a href="index.php?act=removetocart&id=<?=$id?>"><span class="ion-ios-close">X</span></a>   
                <div class="vc-img">
                    <img src="<?=$hinh?>" width=80px;  alt="">
                </div>
                <div class="vc-info">
                    <div class="vc-name"><b>Name Product:</b> <?=$tenhanghoa?></div>
                    <div class="vc-price"><b>Price Product:</b><?=number_format($giahanghoa,0,',','.')?> VND</div>
                </div>

                <div class="vc-soluong">
                   <b>số lượng:</b>  <br>
                    <input type="number" name="quantity" class="quantity form-control input-number " value="<?=$soluong?>" min="1" max="100">
                </div>

                <div class="vc-trung">
                    <b>Màu sắc:</b> White<br><br>
                    <b>Size:</b> L
                </div>
                <div class="vc-tongtien"><b>Tổng Tiền:</b><?=number_format(($giahanghoa * $soluong),0,',','.')?> VND</div>
            </div>


							<?php }?>
								

							<tr><td colspan="6" ><a href="index.php?act=removealltocart" class="btn btn-primary">Xóa tất cả sản phẩm trong giỏ hàng</a></td></tr>
						     
							<?php }else{?>
							<tr><td colspan="6"><p  class="">.</p></td></tr>
					
		
		
							<?php }?>
						   

          

        </div> 
    

        <div class="vc-right">
            <div class="vcr-name">giảm giá: <?php if(isset($total_giam_gia)) echo number_format($total_giam_gia,0,',','.'); else echo " chưa có sản phẩm";?>    </div>

            Đăng nhập để sử dụng cung cấp thành viên của bạn
            <button onclick="document.getElementById('dangnhap').style.display='block'">Đăng nhập</button>
            <div class="vcr-giatri">
              <div class="vcr-left">
                <ul>
                    <li>Giá trị đơn hàng</li>
                    <li>Tiền vận chuyển</li>
                </ul>
              </div>

              <div class="vcr-right">
                <ul>
                    <li>$321321</li>
                    <li>$0</li>
                </ul>
            </div>
                <hr>
                <h3>Tổng tiền</h3>
    					<p class="d-flex">
    						<span>Tổng tiền sản phẩm:</span>
    						<span> <?php if(isset($total_sp)) echo number_format($total_sp,0,',','.')." VND"; else echo " chưa có sản phẩm"; ?></span>
    					</p>
            

        
                <br>
                <button class="btn btn-primary py-3 px-4" type="submit" name="dat_hang" >Đặt hàng</button>      
            
            </div>

       


                       

        </div>
            
       
     
        </main>
                
            
      

         
       

    </div>


      <div class="modal" id="dangnhap">
        <div class="logo-form">
            <img src="./view/images/logo-white.png" alt="">
        </div>
        
        <div class="container-dangnhap" >
            <a href="#" class="close" onclick="document.getElementById('dangnhap').style.display='none'"> &times;</a>
            <form action="" method="post" class="animate">
                <h1>Đăng nhập</h1>
                <div class="container">
                    <label for="uname"><b>Tên Đăng Nhập:</b></label>
                    <input type="text" placeholder="Nhập tên đăng nhập" name="uname" required> <br>
              
                    <label for="psw"><b>Mật khẩu:</b></label>
                    <input type="password" placeholder="Nhập mật khẩu" name="psw" required><br>
              
                    <button type="submit">Đăng nhập</button>
                    <label>
                      <input type="checkbox" checked="checked" name="remember"> Nhớ mật khẩu
                    </label>
                  </div>
                  <div class="footer-iccon-login">
                    <ul>
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#"><i class="ti-themify-favicon"></i></a></li>
                        <li><a href="#"><i class="ti-youtube"></i></a></li>
                    </ul>
                </div> 
                
                <a href="#">Quên mật khẩu</a>
            </form>
        </div>
      </div>



      <div class="modal" id="dangky">
        <div class="logo-form">
            <img src="./view/images/logo-white.png" alt="">
        </div>
        
        <div class="container-dangky" >
            <a href="#" class="close" onclick="document.getElementById('dangky').style.display='none'"> &times;</a>
            <form action="" method="post" class="animate">
                
                <div class="container">
                    <h1>Đăng ký</h1>
                    <p>Vui lòng điền vào mẫu này để tạo một tài khoản.</p>
                    <hr>
                    <label for="email"><b>Email:</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="username">Tên Đăng nhập:</label>
                    <input type="text" name="username" id="">

                    <label for="psw"><b>Mật khẩu:</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <label for="psw-repeat"><b>Nhập lại mật khẩu:</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                      <button type="submit">Đăng ký</button>
                    <label>
                  </div>
                  <div class="footer-iccon-login">
                    <ul>
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#"><i class="ti-themify-favicon"></i></a></li>
                        <li><a href="#"><i class="ti-youtube"></i></a></li>
                    </ul>
                </div> 
                
            </form>
        </div>
      </div>

   

      

</body>
</html>

<script src="./view/jscrip/scrip.js"> </script>