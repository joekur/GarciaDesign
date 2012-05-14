<div class="page" id="photography">
	<!-------------------------------- PHOTOGRAPHY ------------------------------------->
	<div class="content">
		
		<div class="sub_content active">
		
			<?php
				$tl_img = "/img/photos/sinnocence.jpg";
				$tr_img = "/img/photos/shoe.png";
				$bl_img = "/img/photos/shelby.png";
				$br_img = "/img/photos/necklace.png";
				include($_SERVER['DOCUMENT_ROOT'] . "/partials/_photo_box.html.php");
			?>
			
			<div class="proj_desc main">
				<p></p>
				<p>My weapon of choice is a cannon t2i.</p>
			</div>
			
			<div class="proj_desc top_left">
			  My favorite type of photography is that of accidental beauty. I love capturing someones true emotion, 
			  stance, and motion. This particular girl was anything but camera shy and I had no problem getting her to smile. 
			  When her bow became loose she stopped to re-tie it, and as she did I snapped the photo. She and her mom 
			  immediately thought I had made a mistake, but when the photos came back they 
			  couldn't resist this image.
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
				$tl_img = "/img/photos/sscrabble.jpg";
				$tr_img = "/img/photos/Newborn.jpg";
				$bl_img = "/img/photos/joe.png";
				$br_img = "/img/photos/sunset.png";
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
		
		<?= paginate(2) ?>
		
	</div>
</div>