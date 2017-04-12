<?php
require_once('header_en.php');
?>
<div class="spacer-big"></div>
<div class="hentry container" role="main">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-grid widget widget_text panel-last-child">
				<h3 class="widget-title">Contact information</h3>	
			</div>
		</div>
	</div>
	<div class="spacer"></div>
	<div class="row">			
		<div class="col-md-3">
			<div class="textwidget panel widget">
				<h5>SOUTHERN RESEARCH</h5>
				<p><span class="icon-container"><span class="fa fa-home"></span></span> <b>Address.</b><br>
				666/34 Tran Hung Dao street, Binh Khanh ward
				Long Xuyen city, An Giang province (Floor 2)</p>
				<p><span class="icon-container"><span class="fa fa-phone"></span></span> <b>090 369 3384</b></p>
				<p><span class="icon-container"><span class="fa fa-envelope"></span></span><a href="mailto:vu.dang@southernrct.com">vu.dang@southernrct.com</a></p>
			</div>
			<div class="panel widget widget_pt_social_icons panel-last-child">	
				<a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-facebook"></i></a>
				<a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-twitter"></i></a>
				<a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-youtube"></i></a>
			</div>
		</div>
		<div class="col-md-9">
			<div class="wpcf7" id="wpcf7-f5-o1" lang="en-US" dir="ltr">
				<form method="post" action="post.contact.html" class="wpcf7-form">
					<div class="row">
						<div class="col-xs-12  col-sm-4">
							<span class="wpcf7-form-control-wrap your-name">
								<input type="text" name="hoten" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Full name" required/>
							</span><br/>
							<span class="wpcf7-form-control-wrap your-email">
								<input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email" placeholder="E-mail" required/>
							</span><br/>
							<span class="wpcf7-form-control-wrap your-subject">
								<input type="text" name="tieude" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Subject"/>
							</span>
						</div>
						<div class="col-xs-12  col-sm-8">
							<span class="wpcf7-form-control-wrap your-message">
								<textarea name="noidung" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Content" required></textarea>
							</span><br/>
							<input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit btn btn-primary"/>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div><!-- /container -->
<?php require_once('footer_en.php'); ?>