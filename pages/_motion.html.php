<div class="page" id="motion">
	<!-------------------------------- MOTION ------------------------------------->
	<div class="content">
		
		
		
		<div class="sub_content active">
			
			<div class="left">
				<div id="experience_player" class="video_player">
				</div>
				<script>
					flowplayer("experience_player", "/video/flowplayer/flowplayer-3.2.7.swf",  {
						// player configuration goes here
						clip: {
							url: '/video/Experience.mp4',
							autoPlay: false,
							scaling: 'fit'
						}
					});
				</script>
			</div>
			
			<div class="proj_desc main">
				<h2>AWAKENING</h2>
			
				<p>This project involves the union of type, image, design and sound to describe an experience.</p> 
				
				<p>Tools used: Illustrator, Flash</p>
			</div>
		</div>
		
		
		
		<div class="sub_content">

			<div class="left">
				<div id="reach_player" class="video_player">
				</div>
				<script>
					flowplayer("reach_player", "/video/flowplayer/flowplayer-3.2.7.swf",  {
						// player configuration goes here
						clip: {
							url: '/video/reach.mp4',
							autoPlay: false,
							scaling: 'fit'
						}
					});
				</script>
			</div>
			
			<div class="proj_desc main">
				<h2>REACH STUDIO</h2>
			
				<p>A collaboration project</p> 
			</div>
		</div>
		
		<?= paginate(2) ?>
		
		
	</div>
	
</div>