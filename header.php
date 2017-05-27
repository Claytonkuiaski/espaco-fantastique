<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="css/geral.css">
	<link rel="stylesheet" href="css/<?php echo $style; ?>.css">
	<link rel="stylesheet" href="css/plugins.css">
</head>
<body>

	<?php include('includes/organisms/menu-responsivo.php'); ?>

	<div class="layout">
		<header>
			<div class="container">
				<div class="menu">
					<div class="logo-menu wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
						<a href="#"><img src="images/logo-menu.png" alt="logo-menu"></a>
					</div>

					<?php include('includes/organisms/menu.php'); ?>
					
					<div class="telefone-menu wow bounceInRight" data-wow-duration="1s" data-wow-delay="0s">
						<i class="fa fa-phone" aria-hidden="true"><span> (11) 4436-4621</span></i>
					</div>
					<div class="toggle">
						<a href="#"><i class="fa fa-bars"></i></a>
					</div>
				</div>
			</div>
		</header>
		<main>