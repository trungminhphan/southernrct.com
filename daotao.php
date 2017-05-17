<?php
require_once('header.php');
?>
<div class="spacer"></div>
<div class="master-container">
	<div class="container">
		<div class="row">
			<main class="col-xs-12 col-md-12" role="main">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-grid widget">
							<h3 class="widget-title">Tiếng Anh căn bản</h3>
					<h4>Mục tiêu đào tạo</h4>
					<p>Khóa học này nhằm trang bị kiến thức và kỹ năng tiếng Anh giao tiếp hàng ngày.</p>
					<p>Sau khi kết thúc khóa học, học viên có thể:</p>
					<ul>
						<li>Giao tiếp  ở mức độ cơ bản với những người nói tiếng Anh về các chủ đề trong chương trình;</li>
						<li>Hiểu và áp dụng kiến thức về văn hóa để nâng cao khả năng giao tiếp.</li>
					</ul>
					<h4>Thời gian học</h4>
					<p>12 tuần, 3 buổi một tuần, 90 phút một buổi. Ngoài ra có thêm 3 buổi miễn phí tư vấn định hướng và ôn tập.</p>
						</div>
					</div>
				</div>
				<?php for($i=1;$i<=3;$i++): ?>
					<div class="project-post filter-buildings filter-interior-design col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
						<img src="images/daotao/daotao-en-<?php echo $i; ?>.jpg" alt="Tiếng Anh căn bản" style="height:150px;"/>
						<div class="project-content">
							<div class="inner-project">
								<h3>Tiếng Anh căn bản</h3>                                    
								<a href="images/daotao/daotao-en-<?php echo $i; ?>.jpg" class="project-link" title="Tiếng Anh căn bản" data-rel="prettyPhoto[gallery]">
									Xem hình
								</a>
							</div>	
						</div>
					</div>
				<?php endfor; ?>
				<div class="spacer"></div>
			</main>
		</div>
	</div>
</div><!-- /container -->
<?php require_once('footer.php'); ?>
