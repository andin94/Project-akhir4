<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<title>beranda</title>
	
	<style type="text/css">

		*{
			margin: 0 ;
			padding: 0;
			box-sizing: border-box;
		}

		body{
			font-size: 62,5%;
		}

		.header {
			background-color: #2f5167;
			color: #fff;
			height: 50px

		}

		.logo {
			margin: 20px;
			float: left;
		}

		a{
			text-decoration: none;
			float: right;
			margin: 20px;
			color:  #fff;
		}

		.slider {
			border: 10px 50px solid #efefef; 
			position: relative; 
			overflow: hidden; 
			background: #2f5167;
			margin:20px auto;
			width: 800px;
			height: 450px;
		}

		.slides {
			display: flex;
			overflow: hidden;
			width: 800px;
			height: 450px; 
		}
		.slides {
			position: absolute; 
			width:3900px;
			/*pengaturan durasi lama tampil gambar bisa di atur di bawah ini*/
			animation-name:slide;
			animation-duration:10s;
			animation-timing-function: ease-in-out;
			animation-iteration-count:infinite;
			-webkit-animation-name:slide;
			-webkit-animation-duration:10s;
			-webkit-animation-timing-function: ease-in-out;
			-webkit-animation-iteration-count:infinite;
			-moz-animation-name:slide;
			-moz-animation-duration:10s;
			-moz-animation-timing-function: ease-in-out;
			-moz-animation-iteration-count:infinite;
			-o-animation-name:slide;
			-o-animation-duration:10s;
			-o-animation-timing-function: ease-in-out;
			-o-animation-iteration-count:infinite;
		}
		.slides:hover { 
			-webkit-animation-play-state:paused; 
			-moz-animation-play-state:paused; 
			-o-animation-play-state:paused; 
			animation-play-state:paused; }

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

		.choose_5:checked ~ .slides>.s1 {
			margin-left:  -200rem;
		}

		input {
			text-align: center;
			margin: 0 4rem;
			height: 2rem;
		}

		.input img{
			margin: 10px 20px;
			display: flex;
			overflow: hidden;
			width: 400px;
			height: 250px;
			position: relative;
		}

		.input{
			margin: 5px;
			float: left;
		}

		hr{
			line-height: 3px;
			color: black;
		}
	</style>
</head>
<body>
	<div class="header">
		<div class="logo">
			SMKN 2 SUKABUMI
		</div>
		<div class="list-group">
			<a href="./daftar">Daftar</a>
			<a href="./jurusan">Kompetensi Keahlian</a>
			<a href="./organisasi">Organisasi</a>
			<a href="./profile">Profile</a>
			<a href="./beranda">Beranda</a>
		</div>
	</div>
	
	<div class="slider">
		<input type="radio" name="choose" class="choose_1" checked>
		<input type="radio" name="choose" class="choose_2" >
		<input type="radio" name="choose" class="choose_3" >
		<input type="radio" name="choose" class="choose_4" >
		<input type="radio" name="choose" class="choose_5" >
		<div class="slides">
			<img src= "https://i.ytimg.com/vi/lXAlW-hptYg/maxresdefault.jpg" class="slide s1">
			<img src="https://i.ibb.co/K5JMZxg/IMG20210412154517.jpg" class="slide">
			<img src="https://i.ibb.co/4NprYY8/IMG20210412154423.jpg" class="slide">
			<img src="https://i.ibb.co/SR9sHFB/IMG20210412154909.jpg" class="slide ">
			<img src="https://i0.wp.com/energibangsa.id/wp-content/uploads/2019/09/smk-bisa.jpg?fit=678%2C452&ssl=1" class="slide ">
		</div>
		
	</div>
<hr> 
	<div class="main">
		<div class="input">
			<p>TIM 4</p>
			<img src="https://i.ibb.co/tzsz8zr/Untitled-1.png">
			<p>Andina Renita Zahara <br> Naluri Insan Kamalia <br> Hilmi Abdul Muhaimin</p>
			<p><?php ['tb_beranda->nama']?></p><br>
			<img src="{base_url{'../image/' [tb_beranda->gambar]}}">
			<p><?php ['tb_beranda->Deskripsi']?></p>
		</div>
	</div>
	<div class="footer">
	</div>
</body>
</html>