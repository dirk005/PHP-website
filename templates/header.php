<!DOCTYPE html>
<html lang="en">

	<head>
		<link rel="shortcut icon" href="img/BG/icon.ico">
		<title>GIG Motors</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--open css -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<link href='css/custom.css' rel='stylesheet' />
		<!-- image slider -->

		<script type="text/javascript" src="js/jssor.slider-21.1.5.min.js"></script>
		<script type="text/javascript">
			jssor_1_slider_init = function() {

				var jssor_1_SlideshowTransitions = [{
					$Duration : 1200,
					x : 0.3,
					$During : {
						$Left : [0.3, 0.7]
					},
					$Easing : {
						$Left : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					x : -0.3,
					$SlideOut : true,
					$Easing : {
						$Left : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					x : -0.3,
					$During : {
						$Left : [0.3, 0.7]
					},
					$Easing : {
						$Left : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					x : 0.3,
					$SlideOut : true,
					$Easing : {
						$Left : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					y : 0.3,
					$During : {
						$Top : [0.3, 0.7]
					},
					$Easing : {
						$Top : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					y : -0.3,
					$SlideOut : true,
					$Easing : {
						$Top : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					y : -0.3,
					$During : {
						$Top : [0.3, 0.7]
					},
					$Easing : {
						$Top : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					y : 0.3,
					$SlideOut : true,
					$Easing : {
						$Top : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					x : 0.3,
					$Cols : 2,
					$During : {
						$Left : [0.3, 0.7]
					},
					$ChessMode : {
						$Column : 3
					},
					$Easing : {
						$Left : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					x : 0.3,
					$Cols : 2,
					$SlideOut : true,
					$ChessMode : {
						$Column : 3
					},
					$Easing : {
						$Left : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					y : 0.3,
					$Rows : 2,
					$During : {
						$Top : [0.3, 0.7]
					},
					$ChessMode : {
						$Row : 12
					},
					$Easing : {
						$Top : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					y : 0.3,
					$Rows : 2,
					$SlideOut : true,
					$ChessMode : {
						$Row : 12
					},
					$Easing : {
						$Top : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					y : 0.3,
					$Cols : 2,
					$During : {
						$Top : [0.3, 0.7]
					},
					$ChessMode : {
						$Column : 12
					},
					$Easing : {
						$Top : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					y : -0.3,
					$Cols : 2,
					$SlideOut : true,
					$ChessMode : {
						$Column : 12
					},
					$Easing : {
						$Top : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					x : 0.3,
					$Rows : 2,
					$During : {
						$Left : [0.3, 0.7]
					},
					$ChessMode : {
						$Row : 3
					},
					$Easing : {
						$Left : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					x : -0.3,
					$Rows : 2,
					$SlideOut : true,
					$ChessMode : {
						$Row : 3
					},
					$Easing : {
						$Left : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					x : 0.3,
					y : 0.3,
					$Cols : 2,
					$Rows : 2,
					$During : {
						$Left : [0.3, 0.7],
						$Top : [0.3, 0.7]
					},
					$ChessMode : {
						$Column : 3,
						$Row : 12
					},
					$Easing : {
						$Left : $Jease$.$InCubic,
						$Top : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					x : 0.3,
					y : 0.3,
					$Cols : 2,
					$Rows : 2,
					$During : {
						$Left : [0.3, 0.7],
						$Top : [0.3, 0.7]
					},
					$SlideOut : true,
					$ChessMode : {
						$Column : 3,
						$Row : 12
					},
					$Easing : {
						$Left : $Jease$.$InCubic,
						$Top : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					$Delay : 20,
					$Clip : 3,
					$Assembly : 260,
					$Easing : {
						$Clip : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					$Delay : 20,
					$Clip : 3,
					$SlideOut : true,
					$Assembly : 260,
					$Easing : {
						$Clip : $Jease$.$OutCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					$Delay : 20,
					$Clip : 12,
					$Assembly : 260,
					$Easing : {
						$Clip : $Jease$.$InCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}, {
					$Duration : 1200,
					$Delay : 20,
					$Clip : 12,
					$SlideOut : true,
					$Assembly : 260,
					$Easing : {
						$Clip : $Jease$.$OutCubic,
						$Opacity : $Jease$.$Linear
					},
					$Opacity : 2
				}];

				var jssor_1_options = {
					$AutoPlay : true,
					$SlideshowOptions : {
						$Class : $JssorSlideshowRunner$,
						$Transitions : jssor_1_SlideshowTransitions,
						$TransitionsOrder : 1
					},
					$ArrowNavigatorOptions : {
						$Class : $JssorArrowNavigator$
					},
					$ThumbnailNavigatorOptions : {
						$Class : $JssorThumbnailNavigator$,
						$Cols : 10,
						$SpacingX : 8,
						$SpacingY : 8,
						$Align : 360
					}
				};

				var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

				//responsive code begin
				//you can remove responsive code if you don't want the slider scales while window resizing
				function ScaleSlider() {
					var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
					if (refSize) {
						refSize = Math.min(refSize, 800);
						jssor_1_slider.$ScaleWidth(refSize);
					} else {
						window.setTimeout(ScaleSlider, 30);
					}
				}

				ScaleSlider();
				$Jssor$.$AddEvent(window, "load", ScaleSlider);
				$Jssor$.$AddEvent(window, "resize", ScaleSlider);
				$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
				//responsive code end
			};
		</script>
	</head>

	<body>
		<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" style="min-height: 80px;">

			<div class="container-fluid">

				<div class="navbar-header" style="min-height: 80px;">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"> <span > <img src="img/BG/logo.png" class="img-responsive img-centered" alt="GIG Motors"></span > </a>
					<!--<a class="navbar-brand hidden-xs" href="index.php">Motors </a></span>-->
					<span class="hidden-xs" style="color : white;font-size : 1.1em;"><abbr title="Address">Address </abbr>:<a href="http://maps.google.com/maps?q=G.I.G Motors" target="_blank"> 102 Van Riebeeck Ave, Edenvale</a>
					<p >
						<i class="fa fa-phone"></i>
						<abbr title="Phone">Johan</abbr>: 076 236 8220
						<br>
						<i class="fa fa-phone"></i>
						<abbr title="Phone">Quinton</abbr>: 083 294 4669
					</p></span>
					
					
				</div>

				<div class="collapse navbar-collapse " id="myNavbar">

					<ul class="nav navbar-nav navbar-right ">
						<li>
							<a href="index.php" ><span class="mynav">Home</span> </a>
						</li>
						<!--
						<li>
						<a  href="index.php?page=LatestCars">Latest Cars</a>
						</li>
						-->
						<li>
							<a  href="index.php?page=About"><span class="mynav">About us</span></a>
						</li>
						<!--<li>
						<a  href="#Request">Request car</a>
						</li>-->
						<li>
							<a  href="index.php?page=findUs"><span class="mynav">Find us</span></a>
						</li>
						<li>
							<a  href="index.php?page=contact"><span class="mynav">Contact Us</span></a>
						</li>
						<li>
							<a  href="index.php?page=showroom"><span class="mynav">Our Showroom</span></a>
						</li>
					</ul>
					<!--
					<form class="navbar-form nav navbar-nav navbar-right" role="search">
					<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-primary">
					Search
					</button>
					</form>-->
				</div>
			</div>
		</nav>
		<br>
		<br>

