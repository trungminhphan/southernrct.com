<?php
require_once('header.php');
?>
<br />
<div class="container" role="main">
	<div class="panel panel-grid widget widget_black-studio-tinymce panel-last-child">
		<h3 class="widget-title">Nghiên cứu - Tư vấn Kinh doanh</h3>
		<div class="row">
			<div class="col-md-7">
				<div style="background:#ccc; width: 667px;height:400px;" class="text-center">
					<div id="dvCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
						<div class="carousel-inner">  
						  <div class="item active">
							<img src="images/dv_21.png"/>
						  </div>
						  <div class="item">
							<img src="images/dv_22.png" />
						  </div>
						  <div class="item">
							<img src="images/dv_23.png" />
						  </div>
						  <div class="item">
							<img src="images/dv_24.png" />
						  </div>
						  <div class="item">
							<img src="images/dv_25.png" />
						  </div>
						  <div class="item">
							<img src="images/dv_26.png" />
						  </div>
						  <div class="item">
							<img src="images/dv_27.png" />
						  </div>
						  <div class="item">
							<img src="images/dv_28.png" />
						  </div>
						  <div class="item">
							<img src="images/dv_29.png" />
						  </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5" style="background:#d4e1ce;height:400px;width:472px;">
				<div class="textwidget">
					<h3 style="color:#00a651;"><i class="fa fa-square" aria-hidden="true" style="color:#ffc000;"></i> Nghiên cứu thị trường</h3>
					<p>Cung ứng dịch vụ nghiên cứu thị trường (trọn gói hay từng công đoạn) cho khách hàng cá nhân/tổ chức có nhu cầu, cụ thể ở các chủ đề: </p>
					<ul>
						<li>Hành vi người tiêu dùng</li>
						<li>Chất lượng sản phẩm/dịch vụ</li>
						<li>Thương hiệu</li>
						<li>Đo lường nhu cầu</li>
						<li>Hệ thống phân phối</li>
					</ul>
					<h3 style="color:#00a651;margin:0px;"><i class="fa fa-square" aria-hidden="true" style="color:#ffc000;"></i> Tư vấn quản trị kinh doanh</h3>
					<ul>
						<li>Thiết lập dự án đầu tư </li>
						<li>Lập kế hoạch kinh doanh nhỏ</li>
						<li>Quản trị chất lượng</li>
						<li>Quản trị nhân sự</li>
						<li>Tuyển mộ nhân viên</li>
					</ul>
				</div>
			</div>
		</div>
		
	</div>
</div>

<?php require_once('footer.php'); ?>
<script type="text/javascript">
	$(document).ready(function() {
    	$('.carousel').carousel({
      		interval: 3000
    	})
  	});
</script>