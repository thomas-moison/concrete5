<?php $this->inc('elements/header.php');?>
<div class="row">
		    <div class="span4">
		        <div class="hero-unit">
				  <h2>Colonne 1</h2>
				 
				  
				 <a class="btn btn-primary btn-large">Plus d'infos</a>
				 <?php
					$a= new Area('Col1');
					$a->display($c);
				?>
				</div>
			</div>
</div>			 
<?php $this->inc('elements/footer.php');?>