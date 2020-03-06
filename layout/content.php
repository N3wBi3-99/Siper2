<?php
    if(isset($_GET['p'])){
		$p = $_GET['p'];
 		switch ($p) {
			case 'home':
				include "../admin/p/index.php";
				break;
			case 'user':
				$user = new user();
                $judul = $user->title;
				$tampil_data = $user->tampil();
				include "../admin/p/user.php";
				break;
			default:
				include "../error.php";
				break;
		}
	}else{
		include "../admin/p/index.php";
	}
?>