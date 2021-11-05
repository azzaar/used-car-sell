<?php
	switch($act){
						
		case 'home':
		include("homepage.php");
		break;

		case 'car':
		include("car.php");
		break;

		case 'sell':
		include("sell.php");
		break;

		case 'edit':
		include("edit profile.php");
		break;

		case 'news':
		include("news.php");
		break;

		case 'services':
		include("services.php");
		break;
    }
?>