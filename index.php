<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Overlay design</title>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Responsive Live Animated Iphone 11 Design Using CSS & JS">
	<meta name="author" content="shad">
	<title>Responsive Animated Iphone 11</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- --------------- Content --------------- -->
	<div class="main-con">
		
		<!-- ------- Nav ------- -->
		<div class="nav_icon">
			<span class="icon1"></span>
			<span class="icon2"></span>
			<span class="icon3"></span>
		</div>

		<nav class="nav">
			<div class="con">
				<!-- ------- Nav Close ------- -->
				<div class="nav_close">
					<span class="icon1"></span>
					<span class="icon2"></span>
				</div>
				<!-- ------- Item ------- -->
				<ul class="action_btn">
					<li><button class="c_wallpaper">Change Wallpaper</button></li>
					<!-- <li><button class="c_color">Change Phone Color</button></li> -->
					<li><button class="u_phone">Unlock Phone</button></li>
					<li><button class="s_back">Show BackCase</button></li>
				</ul>
				
			</div>
		</nav>

		<!-- ------- Iphone Parent ------- -->
		<div class="iphone_p d-flex align-items-c">
			<!-- ------- Front ------- -->
			


			
			<!-- ------- Back ------- -->
			<div class="iphone_back">
				<!-- --- Side Button --- -->
				<div class="side_btn_left">
					<div class="btn right"></div>
				</div>
				<div class="side_btn_right">
					<div class="btn"></div>
					<div class="btn"></div>
				</div>
				<!-- --- Border --- -->
				<div class="border" id="border">
					<!-- --- Face --- -->
					<div class="face" id="face">
						<div class="face-blend"></div>
						<img src="https://iphone11.netlify.app/asset/img/apple.svg" alt="Apple" class="apple">
						<!-- --- Camera --- -->
						<div class="back_camera" id="camera">
							<!-- --- Lens Parent --- -->
							<div class="lens_p d-flex">
								<!-- --- Lens --- -->
								<div class="lens_con">
									<div class="lens">
										<div class="lens_blend">
											<div class="reflect"></div>
											<div class="reflect"></div>
										</div>
									</div>
								</div>
								<!-- --- Lens --- -->
								<div class="lens_con lens_con2">
									<div class="lens">
										<div class="lens_blend">
											<div class="reflect"></div>
											<div class="reflect"></div>
										</div>
									</div>
								</div>
								<!-- --- Lens --- -->
								<div class="lens_con">
									<div class="lens">
										<div class="lens_blend">
											<div class="reflect"></div>
											<div class="reflect"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- --- Flashlight --- -->
							<div class="flashlight">
								<div class="blend"></div>	
							</div>
							<div class="flashlight_b"></div>

						</div>
					</div>
				</div>
			</div>
<div class="new_in">
<h2>Choose Backcover Design:</h2>

<select id="colorPicker" onclick="JavaScript:changeColor()">
  <option value="transparent">None</option>
  <option value="yellow">Yellow</option>
  <option value="salmon">Salmon</option>
  <option value="lightblue">Light Blue</option>
  <option value="limegreen">Lime Green</option>
  <option value="cyan">Cyan</option>
  <option value="violet">Violet</option>
  <option value="red">Red</option>
</select>

<h2>Choose side Design:</h2>

<select id="colorPicker2" onclick="JavaScript:changeColor()">
  <option value="transparent">None</option>
  <option value="yellow">Yellow</option>
  <option value="salmon">Salmon</option>
  <option value="lightblue">Light Blue</option>
  <option value="limegreen">Lime Green</option>
  <option value="cyan">Cyan</option>
  <option value="violet">Violet</option>
  <option value="red">Red</option>
  <option value="black">Black</option>
</select>

<h2>Choose camera Design:</h2>

<select id="colorPicker3" onclick="JavaScript:changeColor()">
  <option value="transparent">None</option>
  <option value="yellow">Yellow</option>
  <option value="salmon">Salmon</option>
  <option value="lightblue">Light Blue</option>
  <option value="limegreen">Lime Green</option>
  <option value="cyan">Cyan</option>
  <option value="violet">Violet</option>
  <option value="red">Red</option>
</select>
</div>
<script>
function changeColor() {
    var newColor = document.getElementById('colorPicker').value;
   var sideColor = document.getElementById('colorPicker2').value;
   var camera_Color = document.getElementById('colorPicker3').value;
	document.getElementById('face').style.backgroundColor = newColor;
	document.getElementById('border').style.backgroundColor = sideColor;
	document.getElementById('camera').style.backgroundColor = camera_Color;



}
</script>
		</div>
	</div>
<!-- partial -->
  
</body>
</html>
