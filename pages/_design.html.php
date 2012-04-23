<div class="page" id="design">
	<!-------------------------------- GRAPHIC DESIGN ------------------------------------->
	<div class="content">
		
		<div class="sub_content active">
		
			<?php
				$tl_img = "/img/GDesign/PosterPor.jpg";
				$tr_img = "/img/GDesign/Collage.jpg";
				$bl_img = "/img/GDesign/Posterdet.jpg";
				$br_img = "/img/GDesign/OneBfport.jpg";
				include($_SERVER['DOCUMENT_ROOT'] . "/partials/_photo_box.html.php");
			?>
			
			
			<div class="proj_desc main">
				<h2>REDESCOVERING NATURE</h2>
				
				<p>This project involves the use of collage, typography, and image to create a poster for a
					lecture entitled "Rediscovering Nature".</p> 
				
				
				<p>Tools used: Illustrator, Photoshop </p>
			</div>
			
			
			<div class="proj_desc top_left">
			  The final product
			</div>
			
			<div class="proj_desc top_right">
			  To brainstorm the compostition for this project I used a collaging technique where I tried to find 
			  interesting relationships between text, color, lines and shapes.
			</div>
			
			<div class="proj_desc bottom_left">
			  <p>Detail of text which includes a quote about nature by Osho, an indian spiritual leader.</p> 
			  
			  <p>"Look at the trees, look at the birds, 
			  look at the clouds, look at the stars... and if you have eyes you will be able to see that the whole existence is joyful. 
			  Everything is simply happy. Trees are happy for no reason; they are not going to become prime ministers or presidents and they 
			  are not going to become rich and they will never have any bank balance. Look at the flowers - for no reason. 
			  It is simply unbelievable how happy flowers are."</p>
			</div>
			
			<div class="proj_desc bottom_right">
			  This is a detail of the butterfly that I created using photoshop. It is located near the date text on the poster.
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
				<h2>MY CREATIVE PROCESS</h2>
				
				<p>Every person has a creative process, this is mine! I strive to make
				my creative process an adventure, so that when others see me working, they
				want to be on my team.
				
				Try to map out your creative process. Even include those quirks that make your
				creative process unique. You might end up learning something new about yourself.</p> 
				
				<p>Tools used: Illustrator </p>
				
				
			</div>
			
			<div class="proj_desc top_right">
				<h2>MANIPULATION</h2>
				
				<p>This image was created in photoshop using multiple images which I took while in Ann Arbor.</p> 
				
				<p>Tools used: Cannon t2i, Photoshop </p>
			</div>
			
			<div class="proj_desc bottom_left">
			  <h2>ROSE</h2>
				
				<p>How do you describe a word using type? Especially in a unique way. It's tough, it takes a lot 
				   of drafts... a lot of bad ideas and if you have a good sense of humor, several good laughs.</p> 
				
				
				<p>Tools used: Illustrator</p>
			</div>
			
			<div class="proj_desc bottom_right">
			  
			 </div>
			
		</div>
		
		
		<div class="sub_content">
		
				
			<?php
			$images = array(
				'/img/GDesign/CLdes.png',
				'/img/GDesign/CL1.png',
				'/img/GDesign/CL2.png',
				'/img/GDesign/CL4.png',
				'/img/GDesign/CL3.png',
				'/img/GDesign/CL11.png',
				'/img/GDesign/CL6.png',
				'/img/GDesign/CL5.png',
			);
			include($_SERVER['DOCUMENT_ROOT'] . '/partials/_slideshow.html.php');
			?>
	
			
		</div>
		
		
		
		<?= paginate(3) ?>
	</div>
</div>