<?php
   // On récupère le nom de la page au sein du DOM (e.g nomDeLaPage.php)
   $pageName=basename($_SERVER['PHP_SELF']);

   // A l'aide d'une RegEx, on split le nom de la page pour récupérer uniquement la partie avant le .php
   $pageNameSplit = preg_split('/[\/.]/', $pageName);

   // On inclut le Header
   include('./include/header.php');

?>

	<!--MAIN-->
	<main>
		
		<!-- SECTION ACTUALITE -->
		<section class="sectionActu ">
			<div class="container">
			<h1>DERNI&Egrave;RES ACTUALITéS <span>- Carnet de route<span></h1>
			
			<div class="actu">

				<div class="actubloc">
					<article class="actuArt">
						<a href="#">
						<figure><img src="./../img/accueil/section1/imgpose.png">
					<figcaption>Lorem ipsum dolor sit amet </figcaption></figure>
						</a>
					</article>

					<article class="actuArt">
						<a href="#">
						<figure><img src="./../img/accueil/section1/imgpelofocus.png">
					<figcaption>Lorem ipsum dolor sit amet </figcaption></figure>


						</a>
					</article>

					<article class="actuArt">
						<a href="#">
						<figure><img src="./../img/accueil/section1/imgpelo.png">
					<figcaption>Lorem ipsum dolor sit amet </figcaption></figure>


						</a>
					</article>

					<article class="actuArt">
						<a href="#">
						<figure><img src="./../img/accueil/section1/imgvictoire.png">
					<figcaption>Lorem ipsum dolor sit amet </figcaption></figure>


						</a>
					</article>
					
				</div>
			
				<a class= "actubloc grosse" href="#"><figure><img src="./../img/accueil/section1/imgpelo.png"><figcaption>Lorem ipsum dolor sit amet </figcaption></figure></a>
			
			</div>
		</section>



		<!-- SECTION EQUIPE -->
		<section class="sectionEquipe">
			<div class="container">
			<h1>D&Eacute;COUVREZ L'&Eacute;QUIPE 2016</h1>

			<div class="equipe">
					<article class="joueur">
					<a href="#"><img src="./../img/accueil/section2/imgr1.png">
					<p>John Travolta</p>
					</a>
					</article>

					<article class="joueur">
					<a href="#"><img src="./../img/accueil/section2/imgr2.png">
					<p>John Travolta</p>
					</a>
					</article>

					<article class="joueur">
					<a href="#"><img src="./../img/accueil/section2/imgr3.png">
					<p>John Travolta</p>
					</a>
					</article>
					
					<article class="joueur">
					<a href="#"><img src="./../img/accueil/section2/imgr4.png">
					<p>John Travolta</p>
					</a></article>
					
					
					<a><img class="fleche" src="./../img/icone/fleched.png"/></a>
			</div>
			</div>
		</section>
		

		<!-- SECTION HORS-COURSE -->
		<section class="sectionHC">
			<div class="container">
				<h1>HORS-COURSE</h1>
				
				<div class="cubeHC">
					
					<a class="cube premier "><figure><img src="./../img/accueil/section3/imgvitesse.png">
					<figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </figcaption></figure>
					</a>

					<a class="cube second"><div><img src="./../img/icone/iconmic.png" id="mic">
					<label>INDISCRETION</label></div>
					</a>

					<a class="cube second"><div><img src="./../img/icone/iconvelo.png">
					
					<label>LE VELO POUR LES NULS</label></div></a>

					<a class="cube second">
						<div>
						<img src="./../img/icone/iconroue.png">
						<label>TACTIQUE & TECHNIQUE</label>
						</div>
					</a>
				
				
				</div>
			</div>
		</section>
		

		<!-- DERNIERE SECTION -->
		<section class="sectionProchainesCourses">
			<div class="container derniereSection">
			
			<!-- <div class="dernierdiv"> -->
			<article class="prochainesCourses">
				<!-- <div class="listA"> -->
				<h1>PROCHAINES COURSE</h1>
				<ul>
						<li>
							<div class="calendar">
								<label>JAN</label>
								<label class="chiffre">28</label>

							</div> 

							<div class="course">
							<p><img src="./../img/accueil/section4/flag/fcanada.png"><label class="titre">Titre de la course Lorem ipsum </label></p>
							<img src="./../img/icone/fleched.png"/>
							</div> 
						</li>
	
						<li>
							<div class="calendar">
								<label>FEV</label>
								<label class="chiffre">13</label>

							</div> 

							<div class="course">
							<p><img src="./../img/accueil/section4/flag/fbelgique.png"><label class="titre">Titre de la course Lorem ipsum </label></p>
							<img src="./../img/icone/fleched.png"/>
							</div> 
						</li>

						<li>
							<div class="calendar">
								<label>AVR</label>
								<label class="chiffre">11</label>
							</div> 

							<div class="course">
							<p><img src="./../img/accueil/section4/flag/ffrance.png"><label class="titre">Titre de la course Lorem ipsum </label></p>
							<img src="./../img/icone/fleched.png"/>
							</div>
						</li>

						<li>
							<div class="calendar">
								<label>MAR</label>
								<label class="chiffre">31</label>

							</div> 

							<div class="course">
							<p><img src="./../img/accueil/section4/flag/fespagne.png"><label class="titre">Titre de la course Lorem ipsum </label></p>
							<img src="./../img/icone/fleched.png"/>							</div>
						</li>

						<li>
							<div class="calendar">
								<label>MAI</label>
								<label class="chiffre">28</label>

							</div> 

							<div class="course">
							<p><img src="./../img/accueil/section4/flag/ffrance.png"><label class="titre">Titre de la course Lorem ipsum </label></p>
							<img src="./../img/icone/fleched.png"/>
							</div>
						</li>
					
	
					</ul>
					<a href="#">toutes les courses</a>
				<!-- </div> -->
			</article>
			
			<article class="prochainesCourses">
				<h1>ZOOM SUR LE TOUR D'ESPAGNE</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias quis libero ullam animi.lorem Lorem ipsum dolor 
				</p>
				
				<a class="imageTour" href="#"><img src="./../img/accueil/section4/imglangue.png" alt="marche pas"></a>

				<a href="#">découvrir les courses</a>
				</div>
			</article> 

			</div>
			</div>
		</section>


	</main>

	<!--FOOTER-->
<footer>	<?php
	include('./include/footer.html');
	?>
</footer>

</body>
</html>

