<?php
require_once('header_en.php');
?>
<br />
<div class="container" role="main">
		<div class="panel panel-grid widget widget_black-studio-tinymce panel-last-child">
			<h3 class="widget-title">Training</h3>
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
						<h3 style="color:#00a651;line-height:50px;"><i class="fa fa-square" aria-hidden="true" style="color:#ffc000;font-size:50px;float:left;margin-right:10px;"></i> Corporate skill training courses</h3>
						<ul>
							<li>Soft skills: presentation, meeting, negotiation, teamwork…</li>
							<li>Sale skills, customer services…</li>
							<li>English skills: conversational, import-export related...</li>
							<li>Ad-hoc basis</li>
						</ul>
						<h3 style="color:#00a651;"><i class="fa fa-square" aria-hidden="true" style="color:#ffc000;font-size:50px;float:left;margin-right:10px;"></i> Data analysis and research skill training courses</h3>
						<ul>
							<li>SPSS, AMOS softwares</li>
							<li>Quatitative analysis (1): single variable, multi-variable, dependence, inter-dependence</li>
							<li>Quatitative analysis (2): Structural Equation Modelling</li>
							<li>Establishment of research proposal and research model</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php require_once('footer_en.php'); ?>
<script type="text/javascript">
	$(document).ready(function() {
    	$('.carousel').carousel({
      		interval: 3000
    	})
  	});
</script>