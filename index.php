<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

	<title>THEO BOURDEL</title>
</head>


<body>


	<section id="accueil-container">
		<!-- HEADER -->
		<header>
			<nav>
				<ul id="menu">
					<li><a href="#accueil-container">accueil</a></li>
					<li><a href="#container-1">projets</a></li>
					<li><a href="#container-2">competences</a></li>
					<li><a href="#footer-container">infos</a></li>
				</ul>
			</nav>
		</header>
		<div class="mobile">
			<i class="material-icons" id="burger">menu</i>
			<div class="opacity"></div>
			<aside>
				<ul>
					<li><a class="mobile-link" href="#accueil-container">accueil</a></li>
					<li><a class="mobile-link" href="#container-1">projets</a></li>
					<li><a class="mobile-link" href="#container-2">competences</a></li>
					<li><a class="mobile-link" href="#footer-container">infos</a></li>
				</ul>
			</aside>
		</div>
		<!-- FIN HEADER -->

		<!-- ACCUEIL -->
		<div class="presentation">
			<h1>THEO BOURDEL</h1>
			<h2>ETUDIANT EN INGÉNIERIE DU WEB À <a href="https://www.esgi.fr/?gclid=Cj0KCQjwo-aCBhC-ARIsAAkNQivBuuVi5lyBzNT4VNNosKe92JxM4szInu_VGeieYZ4_te3NbrxO6PkaAtE-EALw_wcB" target="_blank">ESGI</a></h2>

			<hr>

			<p>En 2019 j'ai eu mon BAC STI2D option SIN (système d'information et numérique) avec mention assez-bien. Ensuite en 2021 j'ai eu mon BTS SIO option SLAM (developpement).</p>
			<a class="btn" href="pdf/cv.pdf" target="_blank">Curriculum vitae</a>
			<div class="darkMod-container">
				<div class="darkMod">
					<button id="darkmode-btn"><i class="fas fa-sun fa-2x" id="btn-icon"></i></button>
					<div class="bg-mask" id="bg-mask"></div>
				</div>
			</div>

			

		</div>
		<!-- FIN ACCUEIL -->
	</section>


	<!-- SCRIPT AJAX MENU BURGER -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="script.js"></script>
	<!--  ---------------------  -->


	<main>
		<!-- PROJETS -->
		<section id="container-1">


	    	<!-- FLECHE -->
			<div class="fleche"><i class="fas fa-arrow-up fa-2x"></i></div>
			<!-- SCRIPT -->
			<script>
				const fleche = document.querySelector('.fleche');
				fleche.addEventListener('click', () => {
    				window.scrollTo({
        			top: 0,
        			left: 0,
        			behavior: "smooth"
    			    })
				})
			</script>
			<!-- FIN SCRIPT -->
			<!-- FIN FLECHE -->


			<div class="projets">
				<h3>PROJETS</h3>
				<p>Voici mes différents projets</p>
			</div>
			<div class="projet-marathon">

				<div class="projet-marathon-img img">
					<img src="images/marathon.jpg" alt="portrait">
				</div>
				<div class="projet-marathon-text">
					<div class="projet-marathon-text-desc">
						<h4>Projet Marathon</h4>
						<p>Site d'inscription pour une épreuve sportive - HTML, CSS, PHP, MySQL</p>
					</div>
					<div class="projet-marathon-text-link">	
						<a href="https://github.com/TheoBourdel/PROJET-MARATHON" target="_blank"><i class="fab fa-github fa-2x"></i></a>
						<a href="pdf/marathon.pdf" target="_blank"><i class="fas fa-file-pdf fa-2x"></i></a>
					</div>
				</div>
			</div>

			<div class="projet-java">

				<div class="projet-java-text">
					<div class="projet-java-text-desc">
						<h4>Projet JavaStock</h4>
						<p>Application de gestion des stocks d'une épreuve sportive - Java, MySQL</p>
					</div>
					<div class="projet-java-text-link">	
						<a href="https://github.com/TheoBourdel/PROJET-JAVASTOCK" target="_blank"><i class="fab fa-github fa-2x"></i></a>
						<a href="pdf/java.pdf" target="_blank"><i class="fas fa-file-pdf fa-2x"></i></a>
					</div>
				</div>
				<div class="projet-java-img img">
					<img src="images/java.png" alt="portrait">
				</div>
			</div>

			<div class="projet-veille">

				<div class="projet-veille-img img">
					<img src="images/veille.jpg" alt="portrait">
				</div>
				<div class="projet-veille-text">
					<div class="projet-veille-text-desc">
						<h4>Veille Technologique</h4>
						<p>Powerpoint sur un thème en rapport avec les nouvelles technologies</p>
					</div>
					<div class="projet-veille-text-link">	
						<a href="pdf/veille.pdf" target="_blank"><i class="fas fa-file-pdf fa-2x"></i></a>
					</div>
				</div>
			</div>
		</section>
		<!-- FIN PROJETS -->


		<!-- COMPETENCES -->
		<section id="container-2">
			<div class="competences">
				<h3>COMPETENCES</h3>
				<p>Voici mes différentes compétences</p>
			</div>
			<div class="skills-container">
				<div class="skills-front">
					<div class="skill-title">
						<h5>Front-End</h5>
					</div>
					<div class="skill">
						<div class="skill-name">HTML</div>
						<div class="skill-bar">
							<div class="skill-per" per="90"></div>
						</div>
					</div>

					<div class="skill">
						<div class="skill-name">CSS</div>
						<div class="skill-bar">
							<div class="skill-per" per="75"></div>
						</div>
					</div>

					<div class="skill">
						<div class="skill-name">SASS</div>
						<div class="skill-bar">
							<div class="skill-per" per="50"></div>
						</div>
					</div>

					<div class="skill">
						<div class="skill-name">JAVASCRIPT</div>
						<div class="skill-bar">
							<div class="skill-per" per="45"></div>
						</div>
					</div>

					<div class="skill">
						<div class="skill-name">React JS</div>
						<div class="skill-bar">
							<div class="skill-per" per="40"></div>
						</div>
					</div>
				</div>
				<div class="skills-back">
					<div class="skill-title">
						<h5>Back-End</h5>
					</div>
					<div class="skill">
						<div class="skill-name">PHP</div>
						<div class="skill-bar">
							<div class="skill-per" per="40"></div>
						</div>
					</div>

					<div class="skill">
						<div class="skill-name">MySQL</div>
						<div class="skill-bar">
							<div class="skill-per" per="50"></div>
						</div>
					</div>
				</div>
			</div>


			<!-- SCRIPT SKILLS BAR -->
			<script>
				$('.skill-per').each(function(){
					var $this = $(this);
					var per = $this.attr('per');
					$this.css("width",per+'%');
					$({animatedValue: 0}).animate({animatedValue: per},{
					duration: 1000,
					step: function(){
						$this.attr('per', Math.floor(this.animatedValue) + '%');
					},
					complete: function(){
						$this.attr('per', Math.floor(this.animatedValue) + '%');
					}
					});
				});
			</script>
			<!-- ----------------- -->


		</section>
		<!-- FIN COMPETENCES -->
	</main>


	<!-- FOOTER -->
	<footer>
		<div id="footer-container">
			<p class="footer-title">BOURDEL THEO</p>
			<div class="footer-link">
				<a href="https://github.com/TheoBourdel" target="_blank"><i class="fab fa-github fa-lg"></i></a>
				<a href="https://www.linkedin.com/in/théo-bourdel-3790a81a4/" target="_blank"><i class="fab fa-linkedin-in fa-lg"></i></a>
				<a href="mailto:bourdeltheo@gmail.com" target="_blank"><i class="fas fa-envelope fa-lg"></i></a>
				<a href="https://soundcloud.com/user-252602203" target="_blank"><i class="fab fa-soundcloud fa-lg"></i></a>
			</div>
			<div class="copyright">
				<span>Copyright © 2021 Bourdel Theo, Inc. All rights reserved</span>
			</div>
		</div>
	</footer>
	<!-- FIN FOOTER -->


</body>

</html>
