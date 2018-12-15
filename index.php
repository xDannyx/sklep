<!DOCTYPE html>
<html lang="pl">
	<head>
		<title>Projekt Farby</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
		<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
		<link rel="stylesheet" type="text/css" href="styles/responsive.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
		
	</head>
	<body>
		<div class="super_container">
			<header class="header">
				<div class="header_container_logreg">						
					<div class="container">
						<div class="row">
							<div class="col">
								<nav class="main_nav">
									<ul>
										<li>
											<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" onclick="openForm()">Logowanie <i class="fa fa-user"></i></a></li>			
												<div class="form-popup" id="myForm">
													<form action="/action_page.php" class="form-container">
														<h3>Zaloguj się</h3>
														<label for="email"><b>Email</b></label>
														<input type="text" placeholder="Twój Email" name="email" required>		  
														<label for="psw"><b>Hasło</b></label>
														<input type="password" placeholder="Podaj hasło" name="psw" required>		  
														<button type="submit" class="btn">Zaloguj</button>
														<button type="button" class="btn cancel" onclick="closeForm()">Zamknij</button>
													</form>
												 </div>
											<li><a href="index.php">Rejestracja <i class="fa fa-users"></i></a></li>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>							
				</div>

				<div class="header_container">				
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo"><a href="index.php">projektfarby</a></div>
									<nav class="main_nav">
										<ul>
											<li><a href="index.php">Home</a></li>
											<li class="hassubs">
												<a href="kategorie.php">Kategorie</a>
												<ul>
													<li><a href="farby.php">Farby do ścian i sufitow</a></li>
													<li><a href="drewno.php">Środki do drewna</a></li>
													<li><a href="podloze.php">Przygotowanie podłoża</a></li>
													<li><a href="akcesoria.php">Pędzle i akcesoria malarskie</a></li>
												</ul>
											</li>
											<li><a href="#">O firmie</a></li>
											<li><a href="kontakt.php">Kontakt</a></li>
										</ul>
									</nav>
									<div class="header_extra ml-auto">
										<div class="shopping_cart">
											<a href="koszyk.php">
												<div>Koszyk <span>(0)</span></div>
											</a>
										</div>
										<div class="search">
											<div>Szukaj...</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</header>
			<!--slider-->
			<div class="home">
				<div class="home_slider_container">
					
					<div class="owl-carousel owl-theme home_slider">
						
						
						<div class="owl-item home_slider_item">
							
							<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
							<div class="home_slider_content_container">
								<div class="container">
									<div class="row">
										<div class="col">
											<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
												<div class="home_slider_title">#projektfarby.1</div>
												<div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="owl-item home_slider_item">
								<div class="home_slider_background" style="background-image:url(images/home_slider_2.jpg)"></div>
								<div class="home_slider_content_container">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
													<div class="home_slider_title">#projektfarby.2</div>
													<div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						<div class="owl-item home_slider_item">
								<div class="home_slider_background" style="background-image:url(images/home_slider_3.jpg)"></div>
								<div class="home_slider_content_container">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
													<div class="home_slider_title">#projektfarby.3<i class="fa-var-dot-circle-o"></i></div>
													<div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						</div>
						
					</div>
					<div class="home_slider_dots_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_dots">
										<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
											<li class="home_slider_custom_dot active"><i class="fa fa-dot-circle-o"></i></i></li>
											<li class="home_slider_custom_dot"><i class="fa fa-dot-circle-o"></i></li>
											<li class="home_slider_custom_dot"><i class="fa fa-dot-circle-o"></i></li>
											
										</ul>
									</div>
									
								</div>
								
							</div>
							
						</div>	
						
					</div>
					
				</div>
			</div>
			<div class="home">
				<div class="container">
						<div class="row">
							<div class="col">
									<div class="space">
											<div class="space_text">Lorem ipsum tomek daniel adrian dolor sit amet, consectetur adipiscing elit. Donec nisi quam, porttitor vitae mi sit amet, tincidunt sagittis nunc. Quisque in nunc faucibus felis pretium laoreet. Cras porttitor orci vitae leo viverra, viverra sagittis risus dapibus. Fusce sodales congue lectus, non rhoncus arcu hendrerit vel. Integer tempor lacus in augue bibendum consectetur. Phasellus quis efficitur ante, eget commodo velit. Sed ut tempor nibh, at pellentesque metus. Aenean rhoncus dui lorem, ullamcorper gravida risus mattis at.

													Aenean vitae posuere enim, sit amet rutrum sem. Sed tempus pellentesque leo, sit amet lacinia nibh varius vel. Pellentesque rhoncus volutpat nunc nec accumsan. Curabitur ut sapien eget orci volutpat maximus eu ac elit. Nam ac semper quam. Vivamus eu tincidunt nulla. Nulla placerat a dui et cursus.
													
													Proin facilisis tortor erat, non eleifend nisi aliquam sed. Donec non finibus arcu, sed tincidunt elit. Phasellus at placerat quam. Duis dictum finibus ultricies. Morbi vitae luctus mi, id luctus sapien. Aliquam erat volutpat. Quisque ut libero lacinia, pulvinar tortor quis, ultrices massa. Pellentesque vitae massa sit amet sem euismod ornare quis eu odio. Suspendisse iaculis tincidunt diam, commodo sollicitudin tellus. Nam consequat odio urna, eu dapibus ligula hendrerit sed. Proin porttitor rhoncus turpis, pulvinar malesuada arcu dictum vitae. Sed quam quam, lacinia sed malesuada ac, aliquet non tortor.
													<br>
													<br>
													<?php
													include 'php/baza.php';
													?>
											</div>
											
									</div>
							</div>
						</div>
				</div>
			</div>
			<div class="footer_overlay"></div>
			<footer class="footer">
				<div class="footer_background" style="background-image:url(images/footer2.jpg)"></div>
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
								<div class="footer_logo">#farbyteam<a href="#"></a></div>
								<div class="copyright ml-auto mr-auto">Prosimy kupować jak najwięcej farb, bo nie starczy nam na warunki. Z góry dziękujemy - projektfarby team 2018</div>
								<div class="footer_social ml-lg-auto">						
									<ul>
										<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<script src="js/jquery-3.2.1.min.js"></script>
			<script src="js/custom.js"></script>
			<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
			<script>
					function openForm() {
						document.getElementById("myForm").style.display = "block";
					}
					
					function closeForm() {
						document.getElementById("myForm").style.display = "none";
					}
			</script>

		
		</div>
	</body>
</html>