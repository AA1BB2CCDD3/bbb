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
	
	
  <script src="/new.su.lt/media/system/js/mootools-core.js" type="text/javascript"></script>
  <script src="/new.su.lt/media/jui/js/jquery.min.js" type="text/javascript"></script>
  <script src="/new.su.lt/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
  <script src="/new.su.lt/media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="/new.su.lt/media/system/js/core.js" type="text/javascript"></script>
  <script src="/new.su.lt/media/system/js/mootools-more.js" type="text/javascript"></script>
  <script src="/new.su.lt/media/system/js/modal.js" type="text/javascript"></script>
	
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

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/lt_LT/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>

    <!-- main container -->
    <div class='container'>
	
        <!-- header -->
		<div class="header">
			<div class="header-wrapper">
				<img alt="" class="logo" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.png">
								
				<div class="header-menus">
					<ul class="top-menu">
						<li>LT</li>
					</ul>
					<ul class="top-menu-icons">
						<li class="home"><a></a></li>
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

				<div class="newsletter">
					<h3>užsiprenumeruokite naujienlaiškį</h3>
					<p> Sužinokite naujienas patys pirmieji</p>
					<div class="newsletter-form">
						<input placeholder="Vardas" type="text"/> <input placeholder="El. pa6tas" type="text"/> <input value="siųsti" type="submit"/>
					
					</div>
				</div>	
	
				<div class="footer">	
					<div class="footer-wrapper">		
						<div class="footer-menu">
							<h3>Stojantiesiams</h3>
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
							<p class="solution"> Sprendimas:  Šiaulių universitetas</p>
						</div>
					</div>
				</div>				
				
            </div>
        </div>
    </div>
	

	<script>
	jQuery('.faq h2').click(function(){
		if(jQuery(this).next().css('display') == 'none')
		{
			jQuery(this).next().slideDown();
			
			jQuery(this).addClass('active');
		}
		else
		{
			jQuery(this).next().slideUp();
			jQuery(this).removeClass('active');
		}
		
	});
</script>	
</body>
</html>