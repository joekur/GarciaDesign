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
						playlist: [
							{
								url: '/img/splash/Awakening.png',
								scaling: 'orig'
							},
							{
								url: '/video/Experience.mp4',
								autoPlay: false,
								scaling: 'fit',
								autoBuffering: true
							}
						]
					});
				</script>
			</div>
			
			<div class="proj_desc main">
				<h2>AWAKENING</h2>
			
				<p>This movie was inspired by my daily experience of waking up to blurred vision 
				   until I put my contacts in. When I put them in it always amazes me how everything looks so much clearer! 
				   Gathering together the images, sounds, and notes I obtained about my morning I came up with a story-line 
				   that would go with the abstract images I took.The story-line led to including whimsical sound rather 
				   than literal sound. The motion that i decided to include helped create a whimsical-dream-like land for the viewer.</p> 
				
				<p>Tools used: Illustrator, Flash, sound editing</p>
			</div>
		</div>
		
		
		
		<div class="sub_content">

			<div class="left">
				<div id="reach_player" class="video_player">
				</div>
				<script>
					flowplayer("reach_player", "/video/flowplayer/flowplayer-3.2.7.swf",  {
						// player configuration goes here
						playlist: [
							{
								url: '/img/splash/Reach.png',
								scaling: 'orig'
							},
							{
								url: '/video/reach.mp4',
								autoPlay: false,
								scaling: 'fit',
								autoBuffering: true
							}
						]
					});
				</script>
			</div>
			
			<div class="proj_desc main">
				<h2>REACH STUDIO</h2>
			

			<p>This project was created for REACH Studio, a non-profit organization.
			It was a great way to help out an organization that is all about giving. 
			The background research behind this project was a wake up call that art is being taken 
			away from people and places all around me. Being an artist myself, it is scary to see how art 
			is being viewed to the outside world as last on the list as far as educational standards. 
			Reach, a non-profit organization, is trying to keep art in the lives of families, teens, 
			children, and whoever else wants to express their creativity. I admire that so much.</p>

			<p>	Tools: Camera, clay, paper, props, 5 creative minds, patience</p>
			</div>
	

		</div>
		
		<div class="sub_content">

			<div class="left">
				<div id="Free_player" class="video_player">
				</div>
				<script>
					flowplayer("Free_player", "/video/flowplayer/flowplayer-3.2.7.swf",  {
						// player configuration goes here
						playlist: [
							{
								url: '/img/splash/Free.png',
								scale: 'orig'
							},
							{
								url: '/video/Free.mp4',
								autoPlay: false,
								scaling: 'fit',
								autoBuffering: true
							}
						]
					});
				</script>
			</div>
			
			<div class="proj_desc main">
				<h2>ANIMATED DICTIONARY</h2>
			
				<p>A contranym is a word with two or more meanings. This piece visually explains both meanings 
					through a linear sequence that happens over time using Adobe Flash.</p> 
			</div>
		</div>
		
		<?= paginate(3) ?>
		
		
	</div>
	
</div>