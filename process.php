<?php
	switch($act){
						
		case 'home':
		include("homepage.php");
		break;

		case 'about':
		include("about.php");
		break;

		case 'sell':
		include("sell.php");
		break;

		case 'products':
		include("products.php");
		break;

		case 'news':
		include("news.php");
		break;

		case 'services':
		include("services.php");
		break;
    }
?>