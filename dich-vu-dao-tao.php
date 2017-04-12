<?php
require_once('header.php');
?>
<br />
<div class="container" role="main">
		<div class="panel panel-grid widget widget_black-studio-tinymce panel-last-child">
			<h3 class="widget-title">Đào tạo</h3>
			<div class="row">
				<div class="col-md-7">
					<div style="background:#ccc; width: 667px;height:400px;" class="text-center">
						<div id="dvCarousel" class="carousel slide carousel-fade" data-ride="carousel">
							<div class="carousel-inner">  
							  <div class="item active">
								<img src="images/dv_31.png"/>
							  </div>
							  <div class="item">
								<img src="images/dv_32.png" />
							  </div>
							  <div class="item">
								<img src="images/dv_33.png" />
							  </div>
							  <div class="item">
								<img src="images/dv_34.png" />
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5" style="background:#d4e1ce;height:400px;width:472px;">
					<div class="textwidget">
						<h3 style="color:#00a651;"><i class="fa fa-square" aria-hidden="true" style="color:#ffc000;font-size:50px;float:left;margin-right:10px;"></i> Các khóa đào tạo kỹ năng trong kinh doanh</h3>
						<ul>
							<li>Kỹ năng mềm: thuyết trình, hội họp, thương lượng, làm việc nhóm…</li>
							<li>Kỹ năng bán hàng, chăm sóc khách hàng…</li>
							<li>Kỹ năng tiếng Anh: giao tiếp, xuất nhập khẩu...</li>
							<li>Theo yêu cầu khách hàng...</li>
						</ul>
						<h3 style="color:#00a651;"><i class="fa fa-square" aria-hidden="true" style="color:#ffc000;font-size:50px;float:left;margin-right:10px;"></i> Các khóa đào tạo kỹ năng phân tích dữ liệu và nghiên cứu</h3>
						<ul>
							<li>Sử dụng phần mềm SPSS, AMOS</li>
							<li>Phân tích định lượng (1): đơn biến, đa biến, phụ thuộc, liên thuộc</li>
							<li>Phân tích định lượng (2): cấu trúc tuyến tính </li>
							<li>Lập đề cương và mô hình nghiên cứu</li>
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