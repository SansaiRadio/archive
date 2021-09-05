<?php 
	define('PROJECT_ROOT', getcwd());
?> 

<!DOCTYPE html>
<html> 
	<head lang="en">
		<meta charset="UTF-8">
		<meta charset="EUC-KR">
		<meta charset="EUC-JP">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Sansai Archive</title>
		<!-- Include our stylesheet -->
		<link href="assets/css/styles.css?v=3" rel="stylesheet"/>
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		
		<!-- FancyBox --> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

	</head> 
	<body>
			<div class="filemanager">
			<div class="search">
				<input type="search" placeholder="Find a file.." />
			</div>
			<div class="breadcrumbs"></div>
			<a class="button folderName" id="backButton" href=""><i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back</a>
			<a class="button" href="./"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
			
			<div id="list_buttons_container">
				<a class="button" id="view_button" href="#"><i class="fa fa-list" aria-hidden="true"></i> View</a>
				<a class="button" id="order_button" href="#"><i class="fa fa-sort" aria-hidden="true"></i> Order</a>
			</div>
			
			<ul class="data"></ul>
			<div class="nothingfound">
				<div class="nofiles"></div>
				<span>No files here.</span>
			</div>
				
			</div>


		<!-- Include our script files -->
		<!--- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->
		<!-- <script src="https://code.jquery.com/jquery-2.2.4.js"></script> -->
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
		<script src="assets/js/script.js?v=3"></script>
		<script src="assets/fancybox-master/dist/jquery.fancybox.js"></script>



<script>
$('.fancybox-media').fancybox({
    type: 'iframe',
    width: 800,
    height: 580,
    // add
    fitToView: false,
    iframe : {
      preload : false
    }
});

</script>


	</body>
</html>
