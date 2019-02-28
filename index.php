<!DOCTYPE html>

<html>
<head>
		<meta charset="utf-16">
		<meta name="god" content="xenz">
		<title>xenz</title>
		<meta content="xenz" name="description">
		<link href="media/icon.png" rel="shortcut icon" type="image/png">
		<script src="js/fuckoff.js"></script>
		<script src="js/name.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.marquee/1.3.9/jquery.marquee.min.js" type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js" type="text/javascript"></script>
		
		<script src="js/randomsong.js"></script>
	</head>
	
<div id="player"><embed autostart="true" height="0" loop="true" src="media/music.mp3" width="0"></embed></div>

	<style>
body{
    background-image: url('https://i.imgur.com/g7YuR9M.gif');
    background-size: cover;
}
		/*** Basic Design ***/

		html, body {
			height: 100%;
			overflow-y: hidden;
		}
		body {
			user-select: none;
			font-size: 100%;
			font-family: "Ubuntu", sans-serif;
			background-color: #2e2d32;
			color: #C0C0C0;
			text-shadow:-1px -1px 0px rgba(0,0,0,0.33);
		}
		a {
			color: #C0C0C0;
			text-decoration: none;
		}
		b {
			color: #C0C0C0;
			text-decoration: none;
		}
		.pieceofshit {
			position: absolute;
			width: 90%;
			left: 50%;
			top: 38%;
			bottom: auto;
			right: auto;
			font-size: 55px;
			overflow: auto;
			overflow-x: auto;
			overflow-y: auto;
			-webkit-transform: translateX(-50%) translateY(-50%);
			-moz-transform: translateX(-50%) translateY(-50%);
			-ms-transform: translateX(-50%) translateY(-50%);
			-o-transform: translateX(-50%) translateY(-50%);
			transform: translateX(-50%) translateY(-50%);
			text-align: center;
			color: #C0C0C0;
		}		
		.pieceofpoop {
			position: absolute;
			width: 90%;
			left: 50%;
			top: 44%;
			bottom: auto;
			right: auto;
			font-size: 25px;
			overflow: auto;
			overflow-x: auto;
			overflow-y: auto;
			-webkit-transform: translateX(-50%) translateY(-50%);
			-moz-transform: translateX(-50%) translateY(-50%);
			-ms-transform: translateX(-50%) translateY(-50%);
			-o-transform: translateX(-50%) translateY(-50%);
			transform: translateX(-50%) translateY(-50%);
			text-align: center;
			color: #C0C0C0;
		}
		.footer {
			color: #C0C0C0;
			position: absolute;
			width: 90%;
			left: 50%;
			top: 96%;
			bottom: auto;
			right: 50%;
			font-size: 15px;
			-webkit-transform: translateX(-50%) translateY(-50%);
			-moz-transform: translateX(-50%) translateY(-50%);
			-ms-transform: translateX(-50%) translateY(-50%);
			-o-transform: translateX(-50%) translateY(-50%);
			transform: translateX(-50%) translateY(-50%);
			text-align: center;	
			margin-bottom: 25px;
			font-weight: bold;
		}	
		img {
			position: absolute;
			<!--width: 90%;
			left: 50%;
			top: 59%;
			bottom: auto;
			right: 50%; -->
			<!---webkit-transform: translateX(-50%) translateY(-50%);
			-moz-transform: translateX(-50%) translateY(-50%);
			-ms-transform: translateX(-50%) translateY(-50%);
			-o-transform: translateX(-50%) translateY(-50%);
			transform: translateX(-50%) translateY(-50%);
			text-align: center;	-->
		}
		* { box-sizing: border-box; }
		.video-background {
		  background: #000;
		  position: fixed;
		  top: 0; right: 0; bottom: 0; left: 0;
		  z-index: -99;
		}
		.video-foreground,
		.video-background iframe {
		  position: absolute;
		  top: 0;
		  left: 0;
		  width: 100%;
		  height: 100%;
		  pointer-events: none;
		}
		#vidtop-content {
			top: 0;
			color: #fff;
		}
		.vid-info { position: absolute; top: 0; right: 0; width: 33%; background: rgba(0,0,0,0.3); color: #fff; padding: 1rem; font-family: Avenir, Helvetica, sans-serif; }
		.vid-info h1 { font-size: 2rem; font-weight: 700; margin-top: 0; line-height: 1.2; }
		.vid-info a { display: block; color: #fff; text-decoration: none; background: rgba(0,0,0,0.5); transition: .6s background; border-bottom: none; margin: 1rem auto; text-align: center; }
		@media (min-aspect-ratio: 16/9) {
		  .video-foreground { height: 300%; top: -100%; }
		}
		@media (max-aspect-ratio: 16/9) {
		  .video-foreground { width: 300%; left: -100%; }
		}
		@media all and (max-width: 600px) {
		.vid-info { width: 50%; padding: .5rem; }
		.vid-info h1 { margin-bottom: .2rem; }
		}
		@media all and (max-width: 500px) {
		.vid-info .acronym { display: none; }
		}
}
	</style>
	
	<body>
<!-- Youtube Background		
		<script type="text/javascript" src="js/comets.js"></script>
		<div class="video-background">
			<div class="video-foreground">
			  <iframe src="https://www.youtube.com/embed/vGbRxR03jV8?controls=0&amp;showinfo=0&amp;rel=0&amp;autoplay=1&amp;loop=1&amp;iv_load_policy=3&amp;mute=1" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
-->
<!-- Background IMG -->

		<div class="pieceofshit">
			<a href="https://steamcommunity.com/id/disaffect/" target="_blank">xenz</a>
		</div>

		<div class="pieceofpoop">
			<a href="https://www.twitch.tv/xenzp" target="_blank">⍋</a>
		</div>
		
		<b target="_blank"><div align="center"><img src="media/pokemon.gif" width="200" height="190" alt="pokemon"></b>
		
		<div class="footer">
			<i>love to</i>
			<br>
			<font size="5.5px">/</font>
			<i><marquee behavior="scroll"direction="left"; style="width:175px"; color"#C0C0C0"; "scrollamount="4";> <!--<a href="http://steamcommunity.com/profiles/nose" target="_blank">nose</a>, --><a href="http://steamcommunity.com/id/sinkage/" target="_blank">sinkage</a>, <a href="https://steamcommunity.com/id/sl1pkn0t_lml/" target="_blank"></a></marquee></i>
			<font size="5.5px">/</font>
			<img src="https://iplogger.org/22uis5" border="0">
		</div>		
		<script>
		var host = "xenz.cf";
		if ((host == window.location.host) && (window.location.protocol != "https:"))
		window.location.protocol = "https";
</script>
<html>
