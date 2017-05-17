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
					<h3 class="widget-title">Import-Export Practice</h3>
					<p>An in-house training course designed and taught on the request of CUU LONG FISH CORP., including:</p>
					<ul>
						<li>International trade transactions</li>
						<li>International settlement</li>
						<li>International transportation</li>
						<li>Insurance for international trade</li>
					</ul>
					<p>In addition, the course offers Engish terms used in international trade transactions.</p>
					<?php for($i=1;$i<=4;$i++): ?>
						<div class="project-post filter-buildings filter-interior-design col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
							<img src="images/daotao/daotao-cl-<?php echo $i; ?>.jpg" alt="Import-Export Practice" style="height:150px;"/>
							<div class="project-content">
								<div class="inner-project">
									<h3>Import-Export Practice</h3>                                    
									<a href="images/daotao/daotao-cl-<?php echo $i; ?>.jpg" class="project-link" title="Import-Export Practice" data-rel="prettyPhoto[gallery]">
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
