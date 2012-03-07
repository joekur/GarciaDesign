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
			<a href="#motion" class="nav_icon">
				<img src="/img/navbar/Rec.png">
				<div class="label">motion design</div>
			</a>
			<a href="#photography" class="nav_icon">
				<img src="/img/navbar/cam.png">
				<div class="label">photography</div>
			</a>
			<a href="#design" class="nav_icon">
				<img src="/img/navbar/design.png">
				<div class="label">graphic design</div>
			</a>
			<a href="#studio" class="nav_icon">
				<img src="/img/navbar/paint.png">
				<div class="label">studio work</div>
			</a>
		</div>
		
		
		
		<div class="page" id="home">
			<!-------------------------------- HOME ------------------------------------->
			<div class="content">
				Hi my name is Erica. I am a designer.
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
								url: '/video/Experience123.mov',
								autoPlay: false,
								scaling: 'fit'
							}
						});
					</script>
				</div>
				
				<div class="proj_desc">
					Quisque luctus eros in metus bibendum a varius felis tincidunt. Suspendisse in nisl eu urna fringilla egestas. Proin varius pharetra commodo. Nam vehicula semper velit. Quisque convallis eros et ipsum consequat nec tempor mauris porta. Suspendisse sed ante id lacus dictum accumsan vestibulum volutpat diam. Fusce rutrum, neque nec volutpat tempus, tellus nunc commodo nisi, vel hendrerit velit risus eu justo. Mauris placerat tellus sed justo lacinia tempor.
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
								<img src="/img/GDesign/Posterdet.jpg" class="project">
							</div>
						</div>
						<div class="photo bottom_right">
							<div class="photo_wrapper">
								<img src="/img/GDesign/OneBfport.jpg" class="project">
							</div>
						</div>
					</div>
				</div>
				
				<div class="proj_desc">
					Cras elementum tincidunt ipsum, sed vehicula ligula molestie eget. Sed lobortis ornare molestie. Aenean et lacus vitae lacus semper imperdiet non eget nulla. Mauris mattis lorem a nisl vestibulum eu egestas enim facilisis. In hac habitasse platea dictumst. Praesent rhoncus nisl eu tellus dictum sagittis. Duis viverra mi sed massa cursus egestas. Mauris viverra tincidunt vehicula. Praesent a congue eros. Curabitur faucibus lobortis porta. Aliquam purus lectus, semper vel sodales a, mollis nec tortor. Vivamus lacus magna, elementum a viverra ut, pharetra egestas augue. Suspendisse ut metus augue, nec hendrerit diam. Donec posuere sem mollis massa ultrices ac eleifend libero sodales. Cras eget neque ipsum, fringilla facilisis erat.
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
								<img src="/img/photos/soccer_boots.png" class="project">
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
				
				<div class="proj_desc">
					Donec vel ornare velit. Aliquam posuere cursus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam id urna vel felis sagittis convallis ac ac mi. In hac habitasse platea dictumst. Suspendisse odio odio, scelerisque at molestie dignissim, venenatis et diam. Ut a diam elit. Ut cursus nunc sed nisi accumsan mollis. Nulla facilisi. Etiam tempor sagittis venenatis. Vivamus sit amet elit non lorem elementum elementum.
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
								<img src="/img/studio/spanish_balloon.png" class="project">
							</div>
						</div>
					</div>
				</div>
				
				<div class="proj_desc">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et ligula id dolor congue ultrices sed sit amet diam. Maecenas dolor nibh, condimentum quis sagittis at, rhoncus a nunc. Suspendisse potenti. Nullam vitae tristique eros. Aliquam facilisis sem vitae dolor interdum a aliquam ipsum venenatis. Fusce eu sem nunc. Proin aliquet, leo sed tempor blandit, dui mauris ultrices elit, a posuere massa enim nec diam. Sed tristique bibendum urna nec rutrum. Praesent molestie tristique dolor at porttitor. Nulla suscipit bibendum eros adipiscing iaculis.
				</div>
			</div>
			
		</div>
			
				
	</body>
</html>

