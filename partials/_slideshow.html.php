<div class="ad-gallery">
	
	<div class="ad-image-wrapper"></div>
	
	<div class="ad-controls"></div>
	
	<div class="ad-nav">
		<div class="ad-thumbs">
			<ul class="ad-thumb-list">
				
				<? $ind = 0; ?>
				<? foreach($images as $image) { ?>
					<? $image_path = $image; ?>
					<? $path_parts = pathinfo($image); ?>
					<? $thumb_path = $path_parts['dirname'] . "/" . $path_parts['filename'] . "tn." . $path_parts['extension']; ?>
					
					<li>
						<a href=<?= $image_path ?>>
							<img src=<?= $thumb_path ?>>
						</a>
					</li>
					
				<? } ?>
			</ul>
		</div>
	</div>
	
	
	

	
</div>