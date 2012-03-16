<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Garcia Design</title>
		<link href="main.css" rel="stylesheet" type="text/css" media="screen" />
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.scrollTo-1.4.2-min.js"></script>
		<script src="js/scrolling.js"></script>
		<script src="js/photos.js"></script>
		<script src="/video/flowplayer/flowplayer-3.2.6.min.js"></script>
	</head>
	
	
	
	<body>
		
		
		<div id="navbar">
			<a id="logo" class="selected" href="#home">
				<img src="/img/navbar/GPLogo.png">
			</a>
			<a href="#home" class="nav_icon">
				<img src="/img/navbar/Homebtn.png">
			<a href="#motion" class="nav_icon">
				<img src="/img/navbar/Rec.png">
				<div class="label">motion design</div>
			</a>
			<a href="#photography" class="nav_icon">
				<img src="/img/navbar/cam.png">
				<div class="label">photography</div>
			</a>
			<a href="#design" class="nav_icon">
				<img src="/img/navbar/Des.png">
				<div class="label">graphic design</div>
			</a>
			<a href="#studio" class="nav_icon">
				<img src="/img/navbar/paint.png">
				<div class="label">studio work</div>
			</a>
				<a href="#resume" class="nav_icon">
				<img src="/img/navbar/Resume.png">
				<div class="label"></div>
			</a>	
			
			<a href="http://www.garcialuckdesign.wordpress.com" class="nav_icon" target="_blank">
				<img src="/img/navbar/Blog.png">
				<div class="label"></div>
			</a>	
		</div>
		
		
		
		<div class="page" id="home">
			<!-------------------------------- HOME ------------------------------------->
			<div class="content">
				
				<div class="left">
					<div class="photo_box">
						<div class="photo top_left">
							<div class="photo_wrapper">
								<img src="/img/Erica.jpg" class="project">
							</div>
						</div>
						<div class="photo top_right">
							<div class="photo_wrapper noClick">
								<img src="/img/Chere.jpg" class="project">
							</div>
						</div>
						<div class="photo bottom_left">
							<div class="photo_wrapper">
								<img src="/img/About.jpg" class="project">
							</div>
						</div>
						<div class="photo bottom_right">
							<div class="photo_wrapper">
								<img src="/img/Erica2.jpg" class="project">
							</div>
						</div>
					</div>
				</div>
				
				<div class="proj_desc persistent">
					<h4>Interested in working with me? garciadesign.me@gmail.com</h4>
				</div>
				
				
			</div>
		</div>
				
		<div class="page" id="motion">
			<!-------------------------------- MOTION ------------------------------------->
			<div class="content">
				
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
		</div>
		
		
		<div class="page" id="design">
			<!-------------------------------- GRAPHIC DESIGN ------------------------------------->
			<div class="content">
				<div class="left">
					<div class="photo_box">
						<div class="photo top_left">
							<div class="photo_wrapper">
								<img src="/img/GDesign/PosterPor.jpg" class="project">
							</div>
						</div>
						<div class="photo top_right">
							<div class="photo_wrapper">
								<img src="/img/GDesign/Collage.jpg" class="project">
							</div>
						</div>
						<div class="photo bottom_left">
							<div class="photo_wrapper">
								<img src="/img/GDesign/OneBfport.jpg" class="project">
							</div>
						</div>
						<div class="photo bottom_right">
							<div class="photo_wrapper">
								<img src="/img/GDesign/Posterdet.jpg" class="project">
							</div>
						</div>
					</div>
				</div>
				
				<div class="proj_desc main">
					<h2>REDESCOVERING NATURE</h2>
					
					<p>This project involved the use of collage, typography, and image to create a new and fresh way to deliver information about a lecture entitled
					"Rediscovering Nature".</p> 
					
					<p>Top left: Final product</p>
					<p>Top right: Collage brainstorm for project</p>
					<p>Bottom left: Detail of text. Includes a quote about nature by Osho, an indian spiritual leader</p> 
					 
					
					<p>Bottom right: Detail of butterfly near the date text<p>
					
					<p>Tools used: Illustrator, Flash</p>
				</div>
				
				
				<div class="proj_desc top_left">
				  top left photo
				</div>
				
				<div class="proj_desc top_right">
				  top right photo
				</div>
				
				<div class="proj_desc bottom_left">
				  bottom left photo
				</div>
				
				<div class="proj_desc bottom_right">
				  bottom right photo
				</div>
				
				
			</div>
		</div>
		
		
		
		<div class="page" id="photography">
			<!-------------------------------- PHOTOGRAPHY ------------------------------------->
			<div class="content">
				<div class="left">
					<div class="photo_box">
						<div class="photo top_left">
							<div class="photo_wrapper">
								<img src="/img/photos/sinnocence.jpg" class="project">
							</div>
						</div>
						<div class="photo top_right">
							<div class="photo_wrapper">
								<img src="/img/photos/shoe.png" class="project">
							</div>
						</div>
						<div class="photo bottom_left">
							<div class="photo_wrapper">
								<img src="/img/photos/shelby.png" class="project">
							</div>
						</div>
						<div class="photo bottom_right">
							<div class="photo_wrapper">
								<img src="/img/photos/necklace.png" class="project">
							</div>
						</div>
					</div>
				</div>
				
				<div class="proj_desc main">
					<p>My favorite type of photography is that of accidental beauty. I love capturing someones true emotion, 
					stance, and motion. An example of this can be found in the top left photo. This particular girl was anything but camera 
					shy and I had no problem getting her to smile. When her bow became loose she stopped to re-tie it, and as she did 
					I snapped the photo. She and her mom immediately thought I had made a mistake, but when the photos came back they 
					couldn't resist this image.</p>
					<p>Tools used: Cannon Rebel t2i, Photoshop</p>
				</div>
				
				<div class="proj_desc top_left">
				  top left photo
				</div>
				
				<div class="proj_desc top_right">
				  top right photo
				</div>
				
				<div class="proj_desc bottom_left">
				  bottom left photo
				</div>
				
				<div class="proj_desc bottom_right">
				  bottom right photo
				</div>
				
				
			</div>
		</div>
		
		
		<div class="page" id="resume">
			<!-------------------------------- RESUME ------------------------------------->
			<div class="content">
				
							
				<div class="home_content">
				
					<a href="docs/EricaGarciasResume.pdf" target="_blank"><img src="img/Dresume.png" alt="resume" /></a>
	
				</div>
			</div>
		</div>
		
		
		<div class="page" id="studio">
			<!-------------------------------- STUDIO ------------------------------------->
			<div class="content">
				<div class="left">
					<div class="photo_box">
						<div class="photo top_left">
							<div class="photo_wrapper">
								<img src="/img/studio/lady_charc.png" class="project">
							</div>
						</div>
						<div class="photo top_right">
							<div class="photo_wrapper">
								<img src="/img/studio/brain_paint.png" class="project">
							</div>
						</div>
						<div class="photo bottom_left">
							<div class="photo_wrapper">
								<img src="/img/studio/landscape_paint.png" class="project">
							</div>
						</div>
						<div class="photo bottom_right">
							<div class="photo_wrapper">
								<img src="/img/studio/D1.jpg" class="project">
							</div>
						</div>
					</div>
				</div>
				
				<div class="proj_desc main">
					<h3>Top left: "GIRL"</h3>
				    <p>Tools used: Paper, Pencil, Charcoal</p> 
					<h3>Top Right: "Brain Baths"</h3>
					<p>Tools used: Gauche, Paper</p>
					<h3>Bottom Left: "Landscape"</h3>
					<p>Tools used: Oil Paint, Canvas</p>
					<h3>Bottom right: "Flor"</h3>
					<p>Tools used: Black and white paper, Exacto knife, Rubber Cement</p>
				</div>
				
				<div class="proj_desc top_left">
				  top left photo
				</div>
				
				<div class="proj_desc top_right">
				  top right photo
				</div>
				
				<div class="proj_desc bottom_left">
				  bottom left photo
				</div>
				
				<div class="proj_desc bottom_right">
				  bottom right photo
				</div>
				
				
			</div>
			
		</div>
			
				
	</body>
</html>

