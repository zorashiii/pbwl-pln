<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Bima Sanjaya">
	<title>Pemrograman Berbasis Web Lanjutan | Project11</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<link rel="shortcut icon" href="<?php echo AST; ?>/img/logoBS.png" type="image/x-icon">
	<style>
		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			margin: 0 100px;
		}

		main {
			width: 960px;
			margin: 100px auto;
			line-height: 30px;
		}

		.error {
			background-color: #f8d7da;
			padding: 10px;
			margin-top: 20px;
		}
	</style>
</head>

<body>
	<main>
		<?php
		require_once ROOT . "app/views/" . $view . ".php";
		session_destroy();
		?>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>


</html>