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

		case 'view':
		include("view.php");
		break;

		case 'services':
		include("services.php");
		break;
    }
?>