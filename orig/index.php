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
		<script src="video/flowplayer/flowplayer-3.2.6.min.js"></script>
	</head>
	
	
	
	<body>
		
		
		<div id="navbar">
			<a id="logo" class="selected" href="#home">
				<img src="/img/navbar/GPLogo.png">
			</a>
			
			<a href="#motion" class="nav_icon"><img src="/img/navbar/Rec.png"></a>
			<a href="#photography" class="nav_icon"><img src="/img/navbar/cam.png"></a>
			<a href="#design" class="nav_icon"><img src="/img/navbar/design.png"></a>
			<a href="#studio" class="nav_icon"><img src="/img/navbar/paint.png"></a>
		
		</div>
		
		<div class="wrapper">
			
			<div class="column">
				
				<!-------------------------------- MOTION ------------------------------------->
				<div class="page" id="motion">
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
							Project Description - motion
						</div>
						
					</div>
				</div>
				
				<div class="page"></div>
				
				<!-------------------------------- GRAPHIC DESIGN ------------------------------------->
				<div class="page" id="design">
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
							Project Description - graphic design
						</div>
					</div>
				</div>
				
			</div>
			
			<div class="column">
				<div class="page"></div>
				
				<!-------------------------------- HOME ------------------------------------->
				<div class="page" id="home">
					<div class="content">
						HOME
					</div>
				</div>
				
				<div class="page"></div>
			</div>
			
			<div class="column">
				
				<!-------------------------------- PHOTOGRAPHY ------------------------------------->
				<div class="page" id="photography">
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
							Project Description - photography
						</div>
					</div>
				</div>
				
				<div class="page"></div>
				
				<!-------------------------------- STUDIO ------------------------------------->
				<div class="page" id="studio">
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
							Project Description - studio
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
				
	</body>
</html>

