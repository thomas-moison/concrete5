<?php $this->inc('elements/header.php');?>
<div class="row">
		    <div class="span10">
		        <div class="hero-unit">
				<?php
				$a= new Area('Contenu');
				$a->display($c);
				?>
				  <h1>Bootstrap starter template</h1>
				  <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>
				  
				  <a class="btn btn-primary btn-large">Plus d'infos</a>
				</div>
		      
		          	
		      	
		      </div>
		      
		    </div>
		    <div class="span2">
		    	<div class="well well-small">
				<?php
				$a= new Area('lateral');
				$a->display($c);
				?>
					<h3>Contenu latéral</h3>
					<p>
						Curabitur non felis in risus eleifend ultricies. Sed a tellus eros, a euismod ipsum.
					</p>
				</div>
		    </div>
	    </div>
	    
	  
<?php $this->inc('elements/footer.php');?>