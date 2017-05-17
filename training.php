<?php
require_once('header_en.php');
?>
<div class="spacer"></div>
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel widget widget_text panel-first-child" id="panel-7-3-0-0">	
					<div class="textwidget"></div>
				</div>
				<div class="panel panel-grid widget widget_black-studio-tinymce panel-last-child" id="panel-7-3-0-1">
					<h3 class="widget-title">General English</h3>
					<h4>Aims & Learning Outcome </h4>
					<p>This course aims to cover the core aspects of English language knowledge and skills necessary for everyday English communication.</p>
					<p>After having finished this program, the students can be able to:</p>
					<ul>
						<li> effectively communicate with English-speaking people at basic level around the topics addressed in the program.</li>
						<li>understand and apply knowledge of cultures to enhance their communication.</li>
					</ul>
					<h4>Course duration.</h4>
					<p>12 weeks, 3 sessions per week, 90 minutes per session. There are three extra sessions for orientation & revision for free of charge.</p>
					<?php for($i=1;$i<=3;$i++): ?>
						<div class="project-post filter-buildings filter-interior-design col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
							<img src="images/daotao/daotao-en-<?php echo $i; ?>.jpg" alt="General English" style="height:150px;"/>
							<div class="project-content">
								<div class="inner-project">
									<h3>General English</h3>                                    
									<a href="images/daotao/daotao-en-<?php echo $i; ?>.jpg" class="project-link" title="General English" data-rel="prettyPhoto[gallery]">
										View
									</a>
								</div>	
							</div>
						</div>
					<?php endfor; ?>
				</div>
			</div>
			
		</div>
	</div>

<?php require_once('footer_en.php'); ?>
