<?php
require_once('header.php');
$cat = isset($_GET['cat']) ? $_GET['cat'] : '';
?>
<div class="spacer-big"></div>
<div class="master-container">
		<div class="container">
		<?php if($cat == 'daotao' || $cat==''): ?>
		<?php for($i =1; $i < 20; $i++): ?>
			<div class="row">
				<div class="col-xs-12  col-md-12">
					<h3 class="hentry__title">
						<a href="#">Tin về đào tạo</a>
					</h3>
					<div class="meta-data">
						<time class="meta-data__date">12/01/2017</time>
					</div>
					<div class="hentry__content">
						<img src="images/demo/dao-tao.jpg" width="400" style="float:left; margin:0px 10px 0px 0px;"/>
						<p>Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo 
						Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo 
						Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo 
						Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo Nội dung tin tức về đào tạo .</p>
						<p class="text-right"><a href="chitiettintuc.html?cat=daotao" class="more-link"><span class="read-more read-more--post">Xem chi tiết</span></a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="spacer"></div>
		<?php endfor; ?>
		<?php elseif($cat=='duan' || $cat == '') : ?>
		<?php for($i =1; $i < 20; $i++): ?>
			<div class="row">
				<div class="col-xs-12  col-md-12">
					<h3 class="hentry__title">
						<a href="#">Tin về dự án</a>
					</h3>
					<div class="meta-data">
						<time class="meta-data__date">12/01/2017</time>
					</div>
					<div class="hentry__content">
						<img src="images/demo/chuyen-doi-co-cau-nong-nghiep.jpg" width="400" style="float:left; margin:0px 10px 0px 0px;"/>
						<p>Nội dung tin tức về dự án Nội dung tin tức về dự án Nội dung tin tức về dự án  Nội dung tin tức về dự án  Nội dung tin tức về dự án  Nội dung tin tức về dự án  Nội dung tin tức về dự án 
						Nội dung tin tức về dự án Nội dung tin tức về dự án Nội dung tin tức về dự án  Nội dung tin tức về dự án  Nội dung tin tức về dự án  Nội dung tin tức về dự án  Nội dung tin tức về dự án 
						Nội dung tin tức về dự án Nội dung tin tức về dự án Nội dung tin tức về dự án  Nội dung tin tức về dự án  Nội dung tin tức về dự án  Nội dung tin tức về dự án  Nội dung tin tức về dự án 
						Nội dung tin tức về dự án Nội dung tin tức về dự án Nội dung tin tức về dự án  Nội dung tin tức về dự án  Nội dung tin tức về dự án  Nội dung tin tức về dự án  Nội dung tin tức về dự án .</p>
						<p class="text-right"><a href="chitiettintuc.html?cat=duan" class="more-link"><span class="read-more read-more--post">Xem chi tiết</span></a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="spacer"></div>
		<?php endfor; ?>
		<?php endif; ?>
		</div>
	</div>
</div>
<?php require_once('footer.php'); ?>