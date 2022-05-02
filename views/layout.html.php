<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulaire de contact</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
		  rel="stylesheet"
		  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
		  crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="container">

	<?php $activePage = basename($_SERVER['REQUEST_URI']);
	?>

    <header class="header container">
        <div class="d-logo">
            <div class="enterprise">
                <i class="fa-solid fa-hat-chef"></i>
            </div>
            <div>
                <h1 class="icon uppercase">Miam</h1>
            </div>
        </div>
        <div class="d-nav">
            <nav class="nav">
                <ul>
                    <li><a  class="nav-link <?= ($activePage === 'index.php' ||
			                        $activePage === 'index.php?page=home' ||
			                        $activePage === 'elyasbenyoub.ide.3wa.io') ? 'active':''; ?>"
			                href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=about">About</a></li>
                    <li><a href="index.php?page=recepes">Recettes</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
	<main>
		<?php require $template . ".html.php" ?>
	</main>

    <script>
    	setInterval(function(){
        	var obj = document.getElementById('msg');
        	obj.remove();
    	},3000);
    </script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"></script>
</body>
</html>