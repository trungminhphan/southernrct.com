<?php
require_once('header.php');
?>
<div class="container">
	<div class="panel panel-grid widget widget_black-studio-tinymce panel-last-child">
		<div class="row">
			<div class="col-md-12">
				<h3 class="widget-title">Một số hình ảnh và video sinh hoạt CLB Anh Văn của lớp Anh văn Giao tiếp tại Cty Phương Nam trong tháng 05-2017</h3>
				<div style="background:#ccc; height:600px;width:1140px;" class="text-center">
					<div id="dvCarousel" class="carousel slide carousel-fade" data-ride="carousel">
						<div class="carousel-inner">  
						  <div class="item active">
							<img src="images/events/su-kien-gan-day-1-1.png"/>
						  </div>
						  <div class="item">
							<img src="images/events/su-kien-gan-day-1-2.png"/>
						  </div>
						  <div class="item">
							<img src="images/events/su-kien-gan-day-1-3.png"/>
						  </div>
						</div>
					</div>
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