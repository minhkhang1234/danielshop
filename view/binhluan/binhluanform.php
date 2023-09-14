<?php
    session_start();
    ob_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $idpro=$_REQUEST['idpro'];
    $dsbl=list_binhluan($idpro);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
        <?php
            if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                $noidung=$_POST['noidungbinhluan'];
                $idpro=$_POST['idpro'];
                $hovaten=$_POST['hovaten'];
                $ngaybinhluan =  get_time();
                insert_binhluan($idpro,$hovaten,$noidung,$ngaybinhluan);
                header("location:".$_SERVER['HTTP_REFERER']);
            }
        ?>
    </div>
</body>
</html> 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="be-comment-block">
	<h1 class="comments-title">Đánh Giá Sản Phẩm</h1>
	<?php
                        $dem=0;
                        foreach ($dsbl as $bl){
                            extract($bl);
                            $ngay_binhluan = get_time();
                            echo'<div class="be-comment">
                            <div class="be-img-comment">	
                                <a href="blog-detail-2.html">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="be-ava-comment">
                                </a>
                            </div>
                            <div class="be-comment-content">
                                    <span class="be-comment-name">
                                        <a href="blog-detail-2.html">'.$ten_kh.'</a>
                                        </span>
                                    <span class="be-comment-time">
                                        <i class="fa fa-clock-o"></i>
                                        '.$ngay_binhluan.'
                                    </span>
                    
                                <p class="be-comment-text">
                                '.$noi_dung.'
                                </p>
                            </div>
                        </div>';
                            $dem++;
                        }
                    ?>
	<form action="<?=$_SERVER['PHP_SELF'];?>" method="post" class="binhluanform">
		<div class="row">
                    <input type="hidden" name="idpro" value="<?=$idpro?>">
			<div class="col-xs-12 col-sm-6">
				<div class="form-group fl_icon">
					<div class="icon" style="height:30px;width:30px"><i class="fa fa-user"></i></div>
					<input type="text" style="margin-left:35px;margin-top:5px;width:965px;height:100px" name="hovaten" id="" class="hovaten" placeholder="Họ và tên">
			</div>
			<div class="col-xs-12">									
				<div class="form-group">
                    <input type="text" style="height:250px;width:1000px" name="noidungbinhluan" id="" class="noidungbinhluan" placeholder="Gửi bình luận">
				</div>
			</div>
            <input type="submit" style="text-align:center"class="btn btn-primary pull-right" name="guibinhluan" id="" value="Gửi Bình Luận">
		</div>
	</form>
</div>
</div>
<style>
.be-comment-block {
    margin-bottom: 50px !important;
    border: 1px solid #edeff2;
    border-radius: 2px;
    padding: 50px 70px;
    border:1px solid #ffffff;
}

.comments-title {
    font-size: 16px;
    color: #00ab9f;
    margin-bottom: 15px;
    font-family: 'Conv_helveticaneuecyr-bold';
    background-color: #f0f0f0;
}

.be-img-comment {
    width: 60px;
    height: 60px;
    float: left;
    margin-bottom: 15px;
}

.be-ava-comment {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}

.be-comment-content {
    margin-left: 80px;
}

.be-comment-content span {
    display: inline-block;
    width: 49%;
    margin-bottom: 15px;
}

.be-comment-name {
    font-size: 13px;
    font-family: 'Conv_helveticaneuecyr-bold';
}

.be-comment-content a {
    color: #383b43;
}

.be-comment-content span {
    display: inline-block;
    width: 49%;
    margin-bottom: 15px;
}

.be-comment-time {
    text-align: right;
}

.be-comment-time {
    font-size: 11px;
    color: #b4b7c1;
}

.be-comment-text {
    font-size: 13px;
    line-height: 18px;
    color: #7a8192;
    display: block;
    background: #f6f6f7;
    border: 1px solid #edeff2;
    padding: 15px 20px 20px 20px;
}

.form-group.fl_icon .icon {
    position: absolute;
    top: 1px;
    left: 16px;
    width: 48px;
    height: 48px;
    background: #f6f6f7;
    color: #b5b8c2;
    text-align: center;
    line-height: 50px;
    -webkit-border-top-left-radius: 2px;
    -webkit-border-bottom-left-radius: 2px;
    -moz-border-radius-topleft: 2px;
    -moz-border-radius-bottomleft: 2px;
    border-top-left-radius: 2px;
    border-bottom-left-radius: 2px;
}

.form-group .form-input {
    font-size: 13px;
    line-height: 50px;
    font-weight: 400;
    color: #b4b7c1;
    width: 100%;
    height: 50px;
    padding-left: 20px;
    padding-right: 20px;
    border: 1px solid #edeff2;
    border-radius: 3px;
}

.form-group.fl_icon .form-input {
    padding-left: 70px;
}

.form-group textarea.form-input {
    height: 150px;
}
</style>