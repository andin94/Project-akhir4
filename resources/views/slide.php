<!DOCTYPE html>
<html>
<head>
	<title>slide</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body{
			font-size: 62,5%;
		}

		.slider {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}

		.slides {
			display: flex;
			width: 50rem;
			overflow: hidden;
		}

		.slide {
			width: 50rem;
			transition: .5s;
		}
		

		.choose_1:checked ~ .slides>.s1 {
			margin-left:  -0rem;
		}

		.choose_2:checked ~ .slides>.s1 {
			margin-left:  -50rem;
		}

		.choose_3:checked ~ .slides>.s1 {
			margin-left:  -100rem;
		}

		.choose_4:checked ~ .slides>.s1 {
			margin-left:  -150rem;
		}

		input {
			text-align: center;
			margin: 0 5rem;
			width: 2rem;
			height: 4rem;
		}
		
	</style>
</head>
<body>
	<div class="slider">
		<input type="radio" name="choose" class="choose_1" checked>
		<input type="radio" name="choose" class="choose_2" >
		<input type="radio" name="choose" class="choose_3" >
		<input type="radio" name="choose" class="choose_4" >
		<div class="slides">
			<img src="https://i.ytimg.com/vi/lXAlW-hptYg/maxresdefault.jpg" class="slide s1">
			<img src="https://i.ibb.co/tzsz8zr/Untitled-1.png" class="slide">
			<img src="https://i.ytimg.com/vi/lXAlW-hptYg/maxresdefault.jpg" class="slide">
			<img src="https://i.ibb.co/tzsz8zr/Untitled-1.png" class="slide ">
		</div>
		
	</div>
</body>
</html>
.slider {
			border: 10px 50px solid #efefef; 
			position: relative; 
			overflow: hidden; 
			background: #efefef;
			margin:20px auto;
			width: 800px;
			height: 450px;
		}
		.gambar-slide img {
			width: 800px;
			height: 450px; 
			float: left;
		}

		.gambar-slide {
			position: absolute; 
			width:3900px;
			/*pengaturan durasi lama tampil gambar bisa di atur di bawah ini*/
			animation-name:gambar-slide;
			animation-duration:10s;
			animation-timing-function: ease-in-out;
			animation-iteration-count:infinite;
			-webkit-animation-name:gambar-slide;
			-webkit-animation-duration:10s;
			-webkit-animation-timing-function: ease-in-out;
			-webkit-animation-iteration-count:infinite;
			-moz-animation-name:gambar-slide;
			-moz-animation-duration:10s;
			-moz-animation-timing-function: ease-in-out;
			-moz-animation-iteration-count:infinite;
			-o-animation-name:gambar-slide;
			-o-animation-duration:10s;
			-o-animation-timing-function: ease-in-out;
			-o-animation-iteration-count:infinite;
		}
		.gambar-slide:hover { 
			-webkit-animation-play-state:paused; 
			-moz-animation-play-state:paused; 
			-o-animation-play-state:paused; 
			animation-play-state:paused; }