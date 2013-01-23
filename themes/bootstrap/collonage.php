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
			
			 <div class="span4">
		        <div class="hero-unit">
				  <h2>Colonne 3</h2>
				  
				  
				<a class="btn btn-primary btn-large">Plus d'infos</a>
				<?php
					$a= new Area('Col3');
					$a->display($c);
				?>
				</div>
			</div>
			
			<div class="span4">
		        <div class="hero-unit">
				  <h2>Colonne 2</h2>
				 
				  
				<a class="btn btn-primary btn-large">Plus d'infos</a>
				 <?php
					$a= new Area('Col2');
					$a->display($c);
				?>
				</div>
			</div>
</div>
</div>	

<div class="row">
<div class="span12">
		        <div class="hero-unit">
				  <h2>Bas taille 12</h2>
				  
				  
				<a class="btn btn-primary btn-large">Plus d'infos</a>
				<?php
					$a= new Area('Bas');
					$a->display($c);
				?>
				</div>
			</div>
</div>
		    		 
<?php $this->inc('elements/footer.php');?>