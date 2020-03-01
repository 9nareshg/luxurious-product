<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>India's biggest online shopping platform</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/pages/home.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>

<body>
	<!-- header -->
	<?php include('include_file/header.php') ?>

	<!-- content-->
	<div class="content">
		<div class="page-base">
			<div class="banner">
				<img src="https://dummyimage.com/1110x400/a8a8a8/0a0a0a">
				<img src="https://dummyimage.com/1110x400/a8a8a8/0a0a0a">
				<img src="https://dummyimage.com/1110x400/a8a8a8/0a0a0a">
				<img src="https://dummyimage.com/1110x400/a8a8a8/0a0a0a">
				<img src="https://dummyimage.com/1110x400/a8a8a8/0a0a0a">
			</div>
			<div class="trending">
				<h1>TRENDING NOW</h1>
				<div class="slider">
					<img src="https://dummyimage.com/210x210/a8a8a8/0a0a0a">
					<img src="https://dummyimage.com/210x210/a8a8a8/0a0a0a">
					<img src="https://dummyimage.com/210x210/a8a8a8/0a0a0a">
					<img src="https://dummyimage.com/210x210/a8a8a8/0a0a0a">
					<img src="https://dummyimage.com/210x210/a8a8a8/0a0a0a">
				</div>
			</div>
			<div class="you-may-also-like">
				<h1>YOU MAY ALSO LIKE</h1>
				<div class="slider">
					<img src="https://dummyimage.com/210x210/a8a8a8/0a0a0a">
					<img src="https://dummyimage.com/210x210/a8a8a8/0a0a0a">
					<img src="https://dummyimage.com/210x210/a8a8a8/0a0a0a">
					<img src="https://dummyimage.com/210x210/a8a8a8/0a0a0a">
					<img src="https://dummyimage.com/210x210/a8a8a8/0a0a0a">
				</div>
			</div>
			<div class="most-selling">
				<h1>MOST SELLING</h1>
				<div>
					<img src="https://dummyimage.com/542x400/a8a8a8/0a0a0a">
					<img src="https://dummyimage.com/542x400/a8a8a8/0a0a0a">
					<img src="https://dummyimage.com/542x400/a8a8a8/0a0a0a">
					<img src="https://dummyimage.com/542x400/a8a8a8/0a0a0a">
				</div>
			</div>
		</div>	
	</div>
	
	<!-- footer -->
	<?php include('include_file/footer.php') ?>
	
	<!-- cdn script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<!-- common.js file link -->
	<script src="js/common.js"></script>
	<!-- slick slider -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script>
		//banner sec
	    $('.banner').slick({
	  		autoplay:true,
	  		arrows:false
	    });
	    $('.trending .slider').slick({
	  		autoplay:true,
	  		arrows:false,
	  		slidesToShow: 5,
  			slidesToScroll: 1
	    });
	    $('.you-may-also-like .slider').slick({
	  		autoplay:true,
	  		arrows:false,
	  		slidesToShow: 5,
  			slidesToScroll: 1
	    });
  	</script>
</body>
</html>