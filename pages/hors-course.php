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
		<section class="indiscretion">
			<article class="container">
			<h1>HORS-COURSE</h1>
			<div class="cubeHC">
					<a class="cube second"><div><img src="./../img/icone/iconmic.png" id="mic">
					<label>INDISCRETION</label></div>
					</a>


					<a class="cube premier "><figure><img src="./../img/horscourse/indiscretion/indiscretion1.png">
					<figcaption>Lorem ipsum dolor sit amet </figcaption></figure>
					</a>
					
					<a class="cube premier "><figure><img src="./../img/horscourse/indiscretion/indiscretion2.png">
					<figcaption>Lorem ipsum dolor sit amet </figcaption></figure>
					</a>

					<a class="cube premier "><figure><img src="./../img/horscourse/indiscretion/indiscretion3.png">
					<figcaption>Lorem ipsum dolor sit amet </figcaption></figure>
					</a>
					
					<img class="fleche" src="./../img/icone/fleched.png"/>

				</div>	
			</article>
		</section>

		<section class="velo">
			<article class="container">
				<div class="cubeHC">
					<a class="cube second"><div><img src="./../img/icone/iconvelo.png">
					<label>LE VELO POUR LES NULS</label></div>
					</a>

					<a class="cube premier "><figure><img src="./../img/horscourse/tactech/tactech1.png">
					<figcaption>Lorem ipsum dolor sit amet </figcaption></figure>
					</a>
					
					<a class="cube premier "><figure><img src="./../img/horscourse/tactech/tactech2.png">
					<figcaption>Lorem ipsum dolor sit amet </figcaption></figure>
					</a>

					<a class="cube premier "><figure><img src="./../img/horscourse/tactech/tactech3.png">
					<figcaption>Lorem ipsum dolor sit amet </figcaption></figure>
					</a>

					<img class="fleche" src="./../img/icone/fleched.png"/>

				</div>
			</article>
		</section>

		<section class="technique">
			<article class="container">
				<div class="cubeHC">
					<a class="cube second"><div><img src="./../img/icone/iconroue.png">
					<label>TACTIQUE & TECHNIQUE</label></div>
					</a>


					<a class="cube premier "><figure><img src="./../img/horscourse/velonul/velonul1.png">
					<figcaption>Lorem ipsum dolor sit amet </figcaption></figure>
					</a>
					
					<a class="cube premier "><figure><img src="./../img/horscourse/velonul/velonul2.png">
					<figcaption>Lorem ipsum dolor sit amet </figcaption></figure>
					</a>

					<a class="cube premier "><figure><img src="./../img/horscourse/velonul/velonul3.png">
					<figcaption>Lorem ipsum dolor sit amet </figcaption></figure>
					</a>

					<img class="fleche" src="./../img/icone/fleched.png"/>

				</div>
			</article>
		</section>


	</main>

</body>

	<!--FOOTER-->
<footer>	<?php
	include('./include/footer.html');
	?>
</footer>

</html>	