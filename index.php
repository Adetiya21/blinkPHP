<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- URL Theme Color untuk Chrome, Firefox OS, Opera dan Vivaldi -->
    <meta name="theme-color" content="#1a1a1a" />
	<title>Welcome Blink</title>

	<link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="/assets/css/style.css" type="text/css">
	<link rel="stylesheet" href="/assets/css/style-preloader.css" type="text/css" media="all" />
	<link rel="stylesheet" href="/assets/css/style-flexslider.css" type="text/css">
	<link rel="stylesheet" href="/assets/fonts/font-awesome.min.css" />
	<script type="text/javascript" src="/assets/js/jquery-2.1.4.min.js"></script>
	
</head>
<body>
<!-- Preloader -->
    <!-- <script type="text/javascript">
        $(window).load(function() { $("#loading").fadeOut("slow"); })
    </script>

    <div id="loading">
        <img alt="logo" src="/assets/img/logo/loader.png" align="center" style="position: relative; top: 300px;" width="200"><br><br>
        <img alt="logo" src="/assets/img/logo/loader.gif" align="center" style="position: relative; top: 300px;" width="120">
    </div> -->

<!-- navbar -->
	<header>
		<div class="container">
			<div class="logo"><a href="" title=""><img src="/assets/img/logo/logo45.png" alt=""></a></div>
			<nav>
			<ul>
			  <li class="active"><a href="index.php">HOME</a></li>
			  <li><a href="/pages/news.php">NEWS</a></li>
			  <li><a href="/pages/profile.php">PROFILE</a></li>
			  <li><a href="/pages/album.php">ALBUM</a></li>
			  <li class="sub-menu"><a href="#">GALLERY</a>
			    <ul>
			      <li><a href="/pages/picture.php">PICTURES</a></li>
			      <li><a href="/pages/musicvideo.php">MUSIC VIDEO</a></li>
			      <li><a href="/pages/dancepractice.php">DANCE PRACTICE</a></li>
			      <li><a href="/pages/liveshow.php">LIVE SHOW</a></li>
			    </ul>
			  </li>
			  <li><a href="/pages/schedule.php">SCHEDULE</a></li>
			  <li><a href="/pages/about.php">ABOUT</a></li>
			</ul>
			</nav>
			<div class="menu-toggle">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>
		</div>
    </header>

<!-- slider -->
	<div class="container-slider flexslider">
		<ul class="slides">
			<li>
				<img src="/assets/img/banner/1.jpg" alt="">
				<!-- <section class="flex-caption">
					<p>LOREM IPSUM 1</p>
				</section> -->
			</li>
			<li>
				<img src="/assets/img/banner/2.jpg" alt="">
				<!-- <section class="flex-caption"> -->
					<!-- <p>LOREM IPSUM 2</p> -->
				<!-- </section> -->
			</li>
			<li>
				<img src="/assets/img/banner/3.jpg" alt="">
				<!-- <section class="flex-caption"> -->
					<!-- <p>LOREM IPSUM 3</p> -->
				<!-- </section> -->
			</li>
		</ul>
	</div>

<!-- content -->
	<section class="bar background-image-black">
		<div class="container-bar">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10">
					<a href="/pages/about.php" title="Last Album"><h2 class="home">BLACKPINK mini album <br> SQUARE UP</h2></a>
					<hr>
				</div>
				<div class="col-1"></div>
			</div>
			<div class="row">
				<div class="audio">
					<audio id="mySong" src="" style="display: none;" autobuffer autoloop autoplay loop controls></audio>
				</div>
				<div class="col-1"></div>
				<div class="col-3"> <!-- bagian gambar album -->
					<a href="/pages/about.php" title="SQUARE UP"><img src="/assets/img/cover.gif" alt="Album" width="100%"></a>
				</div>
				<div class="col-8">
					<div class="container-content">
						<h2 class="home">TRACK LIST</h2>	
						<div class="col-6">
							<div class="wraper">
								<a href="#" onclick="playDDUDU()" title="PLAY 뚜두뚜두 (DDU DU DDU DU)">
									<img src="/assets/img/head/1.png" alt="DDU-DU DDU-DU" class="cover">
								</a>
							</div>
							&nbsp;
							<div class="wraper">	
								<a href="#" onclick="playFY()" title="PLAY FOREVER YOUNG">
									<img src="/assets/img/head/2.png" alt="Forever Young" class="cover">
								</a>
							</div> 
						</div>
						<div class="col-6">
							<div class="wraper">
								<a href="#" onclick="playR()" title="PLAY REALLY">
									<img src="/assets/img/head/3.png" alt="Really" class="cover">
								</a>
							</div>
							&nbsp;
							<div class="wraper">
								<a href="#" onclick="playSUL()" title="PLAY SEE U LATER">
									<img src="/assets/img/head/4.png" alt="See U Later" class="cover">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10"  style="font-size: 0.8em; text-align:justify;">
					<div class="col-6">
						<p style="padding-left: 0;padding-right: 0;">After making debut on August 8, 2016, BLACKPINK set milestones in the K-Pop scene with their unique sound and various charms through releases including <b>[SQUARE ONE], [SQUARE TWO], and ‘AS IF IT’S YOUR LAST’,</b> as YG’s representative girl-group. The group finally makes a fascinating comeback in 2018 with their first-ever mini album since debut.<br><br><b>[SQUARE UP]</b> is part of the ‘SQUARE’ series the group has been running since debut, and follows the legacy of their debut album <b>[SQUARE ONE] and [SQUARE TWO]</b>. The title of the album <b>[SQUARE UP]</b> as the meaning of ‘Let’s fight’ and ‘Let’s verse one another’, and contains the message of ‘standing tall’ with BLACKPINK’s mature and strengthened musicality and concept.</p>
						
					</div>
					<div class="col-6">
						<p style="padding-left: 0;padding-right: 0;">The title song <b>‘DDU-DU DDU-DU’</b> emphasizes BLACKPINK’s unique color with its oriental percussion rhythm and unique whistle lead sound added on top of a Trap beat. The ringing verse, hook-line in the pre-drop, and the rap in the 2nd verse make the listeners feel BLACKPINK’s vocal with awe. The spectrum of the song which broadens as the track progresses and the build-up of the drop adds power to the track, which almost reminds listeners of a tank.<br><br>The direct lyrics of <b>‘DDU-DU DDU-DU’</b> which display BLACKPINK’s inimitable charisma and energy was written by hitmaker TEDDY, and was composed by TEDDY, 24, R.Tee, and Bekuh BOOM, raising expectations by fans.<br><br>The group’s first-ever mini album will be released in 2 versions of , which represents the twoness of the group as the name ‘BLACKPINK’ suggests.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- footer -->
	<footer>
		<div class="container-bar">
			<hr class="footer">
			<div class="">
				<div class="col-12">
					<div class="col-6" align="center">
						<img src="/assets/img/footer/footer.png" alt="Supported" class="ade">
					</div>
					<div class="col-6">
						<p class="right">Copyright © 2018 AdeCreative21<br>All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

    <!-- <script src="/assets/js/jquery-3.3.1.min.js"></script> -->
    <script type="text/javascript">
  //   	function block(){
		// 	document.getElementById('hover').style.display = 'none';
		// }
		// function shows(){
		// 	document.getElementById('acti').style.display = 'block';
		// }
    	function playDDUDU(){
			document.getElementById('mySong').src='/assets/media/audios/뚜두뚜두 (DDU-DU DDU-DU).mp3';
			document.getElementById('mySong').style.display = 'block';
		}
		function playFY(){
			document.getElementById('mySong').src='/assets/media/audios/Forever Young.mp3';
			document.getElementById('mySong').style.display = 'block';
		}
		function playR(){
			document.getElementById('mySong').src='/assets/media/audios/Really.mp3';
			document.getElementById('mySong').style.display = 'block';
		}
		function playSUL(){
			document.getElementById('mySong').src='/assets/media/audios/See U Later.mp3';
			document.getElementById('mySong').style.display = 'block';
		}
	</script>
    <script type="text/javascript">
      $(document).ready(
        function() {
          $('.menu-toggle').click(function() {
            $('nav').toggleClass('active')
          })

          $('ul li').click(function() {
            $(this).siblings().removeClass('active');
            $(this).toggleClass('active');
          })
        }
      )

    </script>
    <script src="/assets/js/jquery.flexslider.js"></script>
	<script type="text/javascript" charset="utf-8">
	  $(window).load(function() {
	    $('.flexslider').flexslider({
	    	touch: true,
	    	pauseOnAction: false,
	    	pauseOnHover: false,
	    });
	  });
	</script>

</body>
</html>