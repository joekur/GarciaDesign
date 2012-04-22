<div class="page" id="design">
	<!-------------------------------- GRAPHIC DESIGN ------------------------------------->
	<div class="content">
		
		<div class="sub_content active">
		
			<?php
				$tl_img = "/img/GDesign/PosterPor.jpg";
				$tr_img = "/img/GDesign/Collage.jpg";
				$bl_img = "/img/GDesign/OneBfport.jpg";
				$br_img = "/img/GDesign/Posterdet.jpg";
				include($_SERVER['DOCUMENT_ROOT'] . "/partials/_photo_box.html.php");
			?>
			
			
			<div class="proj_desc main">
				<h2>REDESCOVERING NATURE</h2>
				
				<p>This project involved the use of collage, typography, and image to create a poster to deliver information about a 
					lecture entitled "Rediscovering Nature".</p> 
				
				
				<p>Tools used: Illustrator, Photoshop, </p>
			</div>
			
			
			<div class="proj_desc top_left">
			  The final product
			</div>
			
			<div class="proj_desc top_right">
			  To brainstorm the compostition for this project I used a collaging technique where I tried to find 
			  interesting relationships between text, color, lines and shapes.		  		</div>
			
			<div class="proj_desc bottom_left">
			  Detail of text which includes a quote about nature by Osho, an indian spiritual leader. "Look at the trees, look at the birds, 
			  look at the clouds, look at the stars... and if you have eyes you will be able to see that the whole existence is joyful. 
			  Everything is simply happy. Trees are happy for no reason; they are not going to become prime ministers or presidents and they 
			  are not going to become rich and they will never have any bank balance. Look at the flowers - for no reason. 
			  It is simply unbelievable how happy flowers are."
			</div>
			
			<div class="proj_desc bottom_right">
			  This is a detail of the butterfly that I created using photoshop. On the posted it is located near the date text.
			</div>
			
		</div>
		
		<div class="sub_content">
		
			<?php
				$tl_img = "/img/GDesign/ecp.png";
				$tr_img = "/img/GDesign/Building.png";
				$bl_img = "/img/GDesign/rose.png";
				$br_img = "/img/photos/competition.jpg";
				include($_SERVER['DOCUMENT_ROOT'] . "/partials/_photo_box.html.php");
			?>
			
			<div class="proj_desc main">
				

			</div>
			
			<div class="proj_desc top_left">
			  
			</div>
			
			<div class="proj_desc top_right">
				
			</div>
			
			<div class="proj_desc bottom_left">
			  
			</div>
			
			<div class="proj_desc bottom_right">
			  
			 </div>
			
		</div>
		
		
		<div class="sub_content">
		
				
			<?php
			$images = array(
				'/img/GDesign/CL1.png',
				'/img/GDesign/CL2.png',
				'/img/GDesign/CL3.png',
				'/img/GDesign/CL4.png',
				'/img/GDesign/CL5.png',
				'/img/GDesign/CL6.png',
				'/img/GDesign/CL11.png'
			);
			include($_SERVER['DOCUMENT_ROOT'] . '/partials/_slideshow.html.php');
			?>
	
			
		</div>
		
		
		
		<?= paginate(3) ?>
	</div>
</div>