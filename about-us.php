<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'head.php'; ?>
</head>

<body>
    
	<!-- start section top-bar -->
    <?php require_once 'top-bar.php'; ?>   
    <!-- End section top-bar -->

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logos/logo.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a class="active" href="about-us.php">A Propos</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="features.php">Fonctionnalités</a></li>
                        <!--li><a href="testimonials.php">Testimonials</a></li-->
                        <!--li><a href="pricing.php">Pricing</a></li-->
						<li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

   	<div class="banner-area banner-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2>À PROPOS DE NOUS</h2>
						<ul class="page-title-link">
							<li><a href="#">Accueil</a></li>
							<li><a href="#">À PROPOS</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- start section about -->
    <?php require_once 'about-repeat.php'; ?>   
    <!-- End section about -->

	<hr class="hr1">

    <div class="text-center">
        <a data-scroll href="portfolio.php" class="btn btn-light btn-radius btn-brd">Voir notre portfolio</a>
    </div>

    <!-- start section footer -->
    <?php require_once 'footer.php'; ?>
    <!-- End section footer -->
</body>
</html>