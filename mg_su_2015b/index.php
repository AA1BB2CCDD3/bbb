<?php
defined('_JEXEC') or die;

$doc = JFactory::getDocument();

$doc->addStyleSheet('templates/' . $this->template . '/css/css.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');

$doc->addScript('/templates/' . $this->template . '/js/bootstrap.js', 'text/javascript');
$doc->addScript('/templates/' . $this->template . '/js/common.js', 'text/javascript');
$doc->addScript('/templates/' . $this->template . '/js/jquery.js', 'text/javascript');
$doc->addScript('/templates/' . $this->template . '/js/main.js', 'text/javascript');
$doc->addScript('/templates/' . $this->template . '/js/stats.js', 'text/javascript');
$doc->addScript('/templates/' . $this->template . '/js/util.js', 'text/javascript');

?>

<!DOCTYPE html>
<html>
<head>
    <jdoc:include type="head" />
	<script src="https://maps.googleapis.com/maps/api/js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<script>
		jQuery(document).ready(
		  function () {
			jQuery('.header-main-menu li').hover(
			  function () { //appearing on hover
				jQuery('div', this).fadeIn();
			  },
			  function () { //disappearing on hover
				jQuery('div', this).fadeOut();
			  }
			);
		  }
		);
	</script>
	
</head>
<body>
    <!-- main container -->
    <div class='container'>
        <!-- header -->
		<div class="header">
			<div class="header-wrapper">
				
				<a href ="index.php">
				<img alt="" class="logo" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.png">
				</a>
				
				<div class="header-menus">
					<ul class="top-menu">
						<li>LT</li>
					</ul>
					<ul class="top-menu-icons">
						<li class="home" onclick="window.open('index.php', '_self')" style="cursor:pointer"><a></a></li>
						<li class="simple"><a></a></li>
						<li class="sitemap"><a></a></li>
					</ul>
					<a href="#" class="header-login">prisijunk</a>
			
					<div class="header-search-block">				
					<jdoc:include type="modules" name="user2" />

					</div>
					
					<a href="#" class="header-contact">Bendraukime</a>
					<a href="http://127.0.0.1/new.su.lt/index.php/fotogalerija" class="header-photo"></a>
					<a href="http://www.youtube.com" class="header-youtube"></a>
					<a href="http://www.facebook.com" class="header-facebook"></a>
					
				</div>

				<jdoc:include type="modules" name="position-0" style="none" />
				<jdoc:include type="modules" name="position-1" style="none" />
						
			</div>
		</div>
		
        <!-- mid container - includes main content area and right sidebar -->
        <div class='row'>
            <!-- main content area -->
            <div class='span9 content' >					
				<div class="content-wrapper">
					<div class="article">	
					
						<div class="aside">
							<jdoc:include type="modules" name="position-3" style="xhtml" />
							<jdoc:include type="modules" name="position-7" style="well" />
							<jdoc:include type="message" />
						</div>					
						<div class="article-content content-simple">
							<jdoc:include type="component" />
						</div>
						<jdoc:include type="modules" name="position-2" style="none" />					
					</div>
				</div>	
	
				<div class="map">
					<div id="map">
					</div>
				</div>	
	
				<div class="footer">	
					<div class="footer-wrapper">		
						<div class="footer-menu">
							<h3>Stojantiesiams55</h3>
							<jdoc:include type="modules" name="position-9" style="none" />	
						</div>						
						<div class="footer-menu">			
							<h3>Studentams</h3>
							<jdoc:include type="modules" name="position-10" style="none" />	
						</div>													
						<div class="footer-menu">
							<h3>Mokslas ir menas</h3>				
							<jdoc:include type="modules" name="position-11" style="none" />	
						</div>						
						<div class="footer-menu">
							<h3>Fakultetai ir institutai</h3>
							<jdoc:include type="modules" name="position-12" style="none" />	
						</div>
						<div class="custom-footer-menu">					
							<jdoc:include type="modules" name="position-13" style="none" />			
						</div>						
					</div>
					
					<div class="footer-bottom">
						<div class="footer-bottom-wrapper">
							<p class="copyright">
								© 2014  Šiaulių universitetas.   Įmonės kodas 111951345;   PVM mokėtojo kodas LT 119513417; <br>   
								Vilniaus g. 88, 76285 Šiauliai;    tel. nr. (8 41) 595 800;   faks. (8 41) 595 809;   el. p. all@cr.su.lt;   Svetainės administratorius 
							</p>
							<p class="solution"> Sprendimas: VYSTYMAS</p>
						</div>
					</div>
				</div>				
				
            </div>
        </div>
    </div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script>
	$('.faq h2').click(function(){
		if($(this).next().css('display') == 'none')
		{
			$(this).next().slideDown();
			
			$(this).addClass('active');
		}
		else
		{
			$(this).next().slideUp();
			$(this).removeClass('active');
		}
		
	});
</script>
	<script>
 
	function initialize() {
	  
		var image = '<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/marker.png';
		var mapCanvas = document.getElementById('map');
		var mapOptions = {
			center: new google.maps.LatLng(55.928474, 23.321686),
			zoom: 15,
			mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			
		var map = new google.maps.Map(mapCanvas, mapOptions);
			
		//Vilniaus g. 88 – Centriniai rūmai 
		var myLatlng = new google.maps.LatLng(55.92634,23.32408);
		var marker = new google.maps.Marker({
		position: myLatlng,
		icon: image,
		}); 	
		marker.setMap(map);
		
		//P. Višinskio g. 25 – Edukologijos fakultetas, Socialinės gerovės ir negalės studijų fakultetas, Menų fakultetas (Muzikos pedagogikos katedra)
		var myLatlng = new google.maps.LatLng(55.928551, 23.314517);
		var marker = new google.maps.Marker({
		position: myLatlng,
		icon: image
		});		
		marker.setMap(map);
		
		//P.Višinskio g. 38 – Humanitarinis fakultetas 
		var myLatlng = new google.maps.LatLng(55.929824, 23.316500);
		var marker = new google.maps.Marker({
		position: myLatlng,
		icon: image
		});		
		marker.setMap(map);
			
		//P. Višinskio g. 19 – Informatikos, matematikos, e. Studijų institutas
		var myLatlng = new google.maps.LatLng(55.927717, 23.313705);
		var marker = new google.maps.Marker({
		position: myLatlng,
		icon: image
		});		
		marker.setMap(map);
		
		//Aušros alėja 50 – Menų fakultetas (Dailės katedra)
		var myLatlng = new google.maps.LatLng(55.935280, 23.314151);
		var marker = new google.maps.Marker({
		position: myLatlng,
		icon: image
		});		
		marker.setMap(map);	
		
		//P. Višinskio g. 11 – Menų fakultetas (Dizaino katedra)
		var myLatlng = new google.maps.LatLng(55.925900, 23.311515);
		var marker = new google.maps.Marker({
		position: myLatlng,
		icon: image
		});		
		marker.setMap(map);		
		
		//Vytauto g. 103 A – Menų fakultetas (Teatro katedra)
		var myLatlng = new google.maps.LatLng(55.928097, 23.311784);
		var marker = new google.maps.Marker({
		position: myLatlng,
		icon: image
		});		
		marker.setMap(map);		

		//Dubijos g. 1 A – III bendrabutis
		var myLatlng = new google.maps.LatLng(55.926696, 23.308556);
		var marker = new google.maps.Marker({
		position: myLatlng,
		icon: image
		});		
		marker.setMap(map);		
		
		//Dubijos g. 1 B – III bendrabutis
		var myLatlng = new google.maps.LatLng(55.926126, 23.309731);
		var marker = new google.maps.Marker({
		position: myLatlng,
		icon: image
		});		
		marker.setMap(map);			
		
		//P. Višinskio g. 15 – I bendrabutis
		var myLatlng = new google.maps.LatLng(55.927320, 23.313129);
		var marker = new google.maps.Marker({
		position: myLatlng,
		icon: image
		});		
		marker.setMap(map);

		//P. Višinskio g. 15 A – II bendrabutis, Studentų atstovybė
		var myLatlng = new google.maps.LatLng(55.927281, 23.312147);
		var marker = new google.maps.Marker({
		position: myLatlng,
		icon: image
		});		
		marker.setMap(map);		
		
		//Architektų g. 1 – Socialinių mokslų fakultetas
		var myLatlng = new google.maps.LatLng(55.916227, 23.245524);
		var marker = new google.maps.Marker({
		position: myLatlng,
		icon: image
		});		
		marker.setMap(map);		

		//Stoties g. 11 – Tęstinių studijų institutas
		var myLatlng = new google.maps.LatLng(55.926599, 23.310966);
		var marker = new google.maps.Marker({
		position: myLatlng,
		icon: image
		});		
		marker.setMap(map);	
		
		//Vilniaus g. 141 – Technologijos ir gamtos mokslų fakultetas, Dailės galerija
		var myLatlng = new google.maps.LatLng(55.928567, 23.319095);
		var marker = new google.maps.Marker({
		position: myLatlng,
		icon: image
		});		
		marker.setMap(map);		
		
		//Paitaičių g. 4 – Botanikos sodas
		var myLatlng = new google.maps.LatLng(55.932688, 23.282973);
		var marker = new google.maps.Marker({
		position: myLatlng,
		icon: image
		});		
		marker.setMap(map);	
		
		//Vytauto g. 84 – Biblioteka
		var myLatlng = new google.maps.LatLng(55.928552, 23.313902);
		var marker = new google.maps.Marker({
		position: myLatlng,
		icon: image
		});		
		marker.setMap(map);			
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>	
</body>
</html>