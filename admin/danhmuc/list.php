



<div class="hreaf">
    <ul>
        <li><a href="index.php?act=adddm">Add category</a></li>
        <li><a href="index.php?act=listdm">List category</a></li>
    </ul>
</div>

<div class="container">
  <article> 
    <table>
        <tr>
            
        </tr>
        
        <?php 
            foreach ($listdm as $loaihang) {
                      extract($loaihang);
                      $deldm = "index.php?act=deldm&ma_loai=".$ma_loai;
                      $suadm = "index.php?act=suadm&ma_loai=".$ma_loai;
                           
                    echo' <tr>  
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$ma_loai.'</td>
                    <td>'.$ten_loai.'</td>
                    <td><a href="'.$suadm.'"><input type="button" " value="Sửa"></a> <a href="'.$deldm.'"><input onclick="confirmation()" type="button"  value="Xóa"></a></td>
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
  //  function confirmation(){
  //           var result = confirm("Bạn chắc chắn muốn xóa nó ?");
  //           if(result){
  //             console.log("Xóa")
  //           }
  //         }
</script>