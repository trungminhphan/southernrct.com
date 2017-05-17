<?php
require_once('header.php');
?>
<script type="text/javascript" src="js/html5.messages.js"></script>
<div class="spacer"></div>
<div class="hentry container" role="main">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-grid widget widget_text panel-last-child">
				<h3 class="widget-title">Thông tin liên hệ</h3>	
			</div>
		</div>
	</div>
	<div class="spacer"></div>
	<div class="row">			
		<div class="col-md-3">
			<div class="textwidget panel widget">
				<h5>Công ty hợp danh Nghiên cứu - Tư vấn - Đào tạo PHƯƠNG NAM</h5>
				<p><span class="icon-container"><span class="fa fa-home"></span></span> <b>Địa chỉ.</b><br>
				666/34 Trần Hưng Đạo, P. Bình Khánh
				Tp. Long Xuyên, An Giang (Lầu 2)</p>
				<p><span class="icon-container"><span class="fa fa-phone"></span></span> <b>02963 989.101</b></p>
				<p><span class="icon-container"><span class="fa fa-envelope"></span></span><a href="mailto:info@southernrct.com">info@southernrct.com</a></p>
			</div>
			<div class="panel widget widget_pt_social_icons panel-last-child">	
				<a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-facebook"></i></a>
				<a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-twitter"></i></a>
				<a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-youtube"></i></a>
			</div>
		</div>
		<div class="col-md-9">
			<div class="wpcf7" id="wpcf7-f5-o1" lang="en-US" dir="ltr">
				<form method="post" action="post.lienhe.html" class="wpcf7-form">
					<div class="row">
						<div class="col-xs-12  col-sm-4">
							<span class="wpcf7-form-control-wrap your-name">
								<input type="text" name="hoten" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Họ tên" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);"/>
							</span><br/>
							<span class="wpcf7-form-control-wrap your-email">
								<input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email" placeholder="E-mail" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);"/>
							</span><br/>
							<span class="wpcf7-form-control-wrap your-subject">
								<input type="text" name="tieude" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Tiêu đề"/>
							</span>
						</div>
						<div class="col-xs-12  col-sm-8">
							<span class="wpcf7-form-control-wrap your-message">
								<textarea name="noidung" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Nội dung" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required></textarea>
							</span><br/>
							<input type="submit" value="Gửi" class="wpcf7-form-control wpcf7-submit btn btn-primary"/>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-grid widget widget_text panel-last-child">
				<h3 class="widget-title">Bản đồ</h3>	
			</div>
		</div>
		<div class="col-md-12">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2043.2080400275067!2d105.42560254366266!3d10.392654491998357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x722f9e83b6744ad4!2zQ8O0bmcgdHkgTmdoacOqbiBj4bupdSwgVMawIHbhuqVuICYgxJDDoG8gdOG6oW8gUGjGsMahbmcgTmFtIChTb3V0aGVybiBSZXNlYXJjaCk!5e1!3m2!1sen!2s!4v1492327836437" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div><!-- /container -->

<?php require_once('footer.php'); ?>