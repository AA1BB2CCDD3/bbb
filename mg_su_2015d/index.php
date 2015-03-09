<?php
defined('_JEXEC') or die;

$doc = JFactory::getDocument();

$doc->addStyleSheet('templates/' . $this->template . '/css/css.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/mainbanner.css');

/*
$doc->addScript('/templates/' . $this->template . '/js/bootstrap.js', 'text/javascript');
$doc->addScript('/templates/' . $this->template . '/js/common.js', 'text/javascript');
$doc->addScript('/templates/' . $this->template . '/js/jquery.js', 'text/javascript');
$doc->addScript('/templates/' . $this->template . '/js/main.js', 'text/javascript');
$doc->addScript('/templates/' . $this->template . '/js/stats.js', 'text/javascript');
$doc->addScript('/templates/' . $this->template . '/js/util.js', 'text/javascript');
*/
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

			
<!--			
		<button id = "btnShow">Show it</button>
		<p id = "pg1" style="display: none">Hello 2</p>
		<button id = "btnHide">Hide it</button>
-->					
			
<div id="bannerM" style="height: 650px;">

	<div id="bannerM1">	
		<div class="bannerMA">	
			<div class="bannerMDes">
				<div class="bannerMDesS">
					<span class="bannerMDesSA">
						<span>Esame tam,</span>
						</br>
						kad drauge kurtume idėjas, </br>
						skleistume ir įprasmintume žinias.		
					</span>			
				</div>				
				<div class="bannerMLink">
					<a href="#">Apie universitetą</a>
				</div>
			</div>											
		</div>
	</div>
	
	<div id="bannerM2">		
		<div class="bannerMA">	
			<div class="bannerMDes">
				<div class="bannerMDesS">
					<span class="bannerMDesSA">			
						<span class = "bnrDesBig">Atviras</span></br>
						kiekvienai idėjai </br>
						ir žmogui				
					</span>			
				</div>
				<div class="bannerMLink">
					<a href="#">Socialiniai partneriai</a>
				</div>				
			</div>											
		</div>
	</div>	
	<div id="bannerM3">		
		<div class="bannerMA">	
			<div class="bannerMDes">
				<div class="bannerMDesS">
					<span class="bannerMDesSA">					
						<span class = "bnrDesBig">Atsakingas</span></br>
						už pozityvius visuomenės</br>
						pokyčius				
					</span>			
				</div>
				<div class="bannerMLink">
					<a href="#">Mokslas</a>
				</div>				
			</div>											
		</div>	
	</div>
	<div id="bannerM4">		
		<div class="bannerMA">	
			<div class="bannerMDes">
				<div class="bannerMDesS">
					<span class="bannerMDesSA">					
						<span>Laisvai</span></br> 
						mąstantis, kuriantis,</br>
						nuolat ieškantis				
					</span>			
				</div>		
				<div class="bannerMLink">
					<a href="#">Studijos</a>
				</div>						
			</div>			
		</div>	
	</div>
	<div id="bannerM5">		
		<div class="bannerMA">	
			<div class="bannerMDes">
				<div class="bannerMDesS">
					<span class="bannerMDesSA">				
						drąsiai priimantis </br>
						iššūkius ir </br>
						<span>tobulėjantis</span>				
					</span>			
				</div>
				<div class="bannerMLink">
					<a href="#">Tarptautiškumas</a>
				</div>				
			</div>											
		</div>		
	</div>	
	<div id="bannerM6">		
		<div class="bannerMA">	
			<div class="bannerMDes">
				<div class="bannerMDesS">
					<span class="bannerMDesSA">				
						<span>Puoselėjantis</span></br>
						draugišką aplinką</br>				
					</span>			
				</div>	
				<div class="bannerMLink">
					<a href="#">Po paskaitų</a>
				</div>				
			</div>											
		</div>		
	</div>

	<div class="pagerMBanner">
		<ul class="pagination-list">
			<li class="active hidden-phone">
				<a id = "pg1" href="#">1</a>
				<a id = "pg2" href="#">2</a>
				<a id = "pg3" href="#">3</a>
				<a id = "pg4" href="#">4</a>
				<a id = "pg5" href="#">5</a>
				<a id = "pg6" href="#">6</a>
			</li>
		</ul>
	</div>	
</div>


    <div class="line11"></div>
    <div class="text11">TEXT</div>
    <div class="line11"></div>		
	
<div id="newsM" style="height: 650px;">
	<div id="newsMC"> 	
		<div class="newsMC2">	
		<h1>Naujienos<h1>
		</div>
		

		
	</div>
</div>

<script>

	jQuery( "#pg1" ).click(function() {
		jQuery( "#bannerM6" ).hide();
		jQuery( "#bannerM5" ).hide();
		jQuery( "#bannerM4" ).hide();
		jQuery( "#bannerM3" ).hide();
		jQuery( "#bannerM2" ).hide();
		//jQuery( "#bannerM1" ).hide();
		jQuery( "#bannerM1" ).show();
		
		jQuery( "#pg6" ).removeClass( "pgBnrActive" );
		jQuery( "#pg5" ).removeClass( "pgBnrActive" );
		jQuery( "#pg4" ).removeClass( "pgBnrActive" );
		jQuery( "#pg3" ).removeClass( "pgBnrActive" );
		jQuery( "#pg2" ).removeClass( "pgBnrActive" );
		//jQuery( "#pg1" ).removeClass( "pgBnrActive" );		
		jQuery( "#pg1" ).addClass( "pgBnrActive" );
		
	});

	jQuery( "#pg2" ).click(function() {		
		jQuery( "#bannerM6" ).hide();
		jQuery( "#bannerM5" ).hide();
		jQuery( "#bannerM4" ).hide();
		jQuery( "#bannerM3" ).hide();
		//jQuery( "#bannerM2" ).hide();
		jQuery( "#bannerM1" ).hide();	
		jQuery( "#bannerM2" ).show();
		
		jQuery( "#pg6" ).removeClass( "pgBnrActive" );
		jQuery( "#pg5" ).removeClass( "pgBnrActive" );
		jQuery( "#pg4" ).removeClass( "pgBnrActive" );
		jQuery( "#pg3" ).removeClass( "pgBnrActive" );
		//jQuery( "#pg2" ).removeClass( "pgBnrActive" );
		jQuery( "#pg1" ).removeClass( "pgBnrActive" );		
		jQuery( "#pg2" ).addClass( "pgBnrActive" );		
	});
	
	jQuery( "#pg3" ).click(function() {		
		jQuery( "#bannerM6" ).hide();
		jQuery( "#bannerM5" ).hide();
		jQuery( "#bannerM4" ).hide();
		//jQuery( "#bannerM3" ).hide();
		jQuery( "#bannerM2" ).hide();
		jQuery( "#bannerM1" ).hide();	
		jQuery( "#bannerM3" ).show();
		
		jQuery( "#pg6" ).removeClass( "pgBnrActive" );
		jQuery( "#pg5" ).removeClass( "pgBnrActive" );
		jQuery( "#pg4" ).removeClass( "pgBnrActive" );
		//jQuery( "#pg3" ).removeClass( "pgBnrActive" );
		jQuery( "#pg2" ).removeClass( "pgBnrActive" );
		jQuery( "#pg1" ).removeClass( "pgBnrActive" );		
		jQuery( "#pg3" ).addClass( "pgBnrActive" );	
	});	
	
	jQuery( "#pg4" ).click(function() {		
		jQuery( "#bannerM6" ).hide();
		jQuery( "#bannerM5" ).hide();
		//jQuery( "#bannerM4" ).hide();
		jQuery( "#bannerM3" ).hide();
		jQuery( "#bannerM2" ).hide();
		jQuery( "#bannerM1" ).hide();	
		jQuery( "#bannerM4" ).show();
		
		jQuery( "#pg6" ).removeClass( "pgBnrActive" );
		jQuery( "#pg5" ).removeClass( "pgBnrActive" );
		//jQuery( "#pg4" ).removeClass( "pgBnrActive" );
		jQuery( "#pg3" ).removeClass( "pgBnrActive" );
		jQuery( "#pg2" ).removeClass( "pgBnrActive" );
		jQuery( "#pg1" ).removeClass( "pgBnrActive" );		
		jQuery( "#pg4" ).addClass( "pgBnrActive" );		
	});	
	
	jQuery( "#pg5" ).click(function() {		
		jQuery( "#bannerM6" ).hide();
		//jQuery( "#bannerM5" ).hide();
		jQuery( "#bannerM4" ).hide();
		jQuery( "#bannerM3" ).hide();
		jQuery( "#bannerM2" ).hide();
		jQuery( "#bannerM1" ).hide();	
		jQuery( "#bannerM5" ).show();
		
		jQuery( "#pg6" ).removeClass( "pgBnrActive" );
		//jQuery( "#pg5" ).removeClass( "pgBnrActive" );
		jQuery( "#pg4" ).removeClass( "pgBnrActive" );
		jQuery( "#pg3" ).removeClass( "pgBnrActive" );
		jQuery( "#pg2" ).removeClass( "pgBnrActive" );
		jQuery( "#pg1" ).removeClass( "pgBnrActive" );		
		jQuery( "#pg5" ).addClass( "pgBnrActive" );		
	});	
	
	jQuery( "#pg6" ).click(function() {		
		//jQuery( "#bannerM6" ).hide();
		jQuery( "#bannerM5" ).hide();
		jQuery( "#bannerM4" ).hide();
		jQuery( "#bannerM3" ).hide();
		jQuery( "#bannerM2" ).hide();
		jQuery( "#bannerM1" ).hide();	
		jQuery( "#bannerM6" ).show();
		
		//jQuery( "#pg6" ).removeClass( "pgBnrActive" );
		jQuery( "#pg5" ).removeClass( "pgBnrActive" );
		jQuery( "#pg4" ).removeClass( "pgBnrActive" );
		jQuery( "#pg3" ).removeClass( "pgBnrActive" );
		jQuery( "#pg2" ).removeClass( "pgBnrActive" );
		jQuery( "#pg1" ).removeClass( "pgBnrActive" );		
		jQuery( "#pg6" ).addClass( "pgBnrActive" );		
	});	

</script>					
<?php
/*					
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
*/?>				

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
							<p class="solution"> Sprendimas: VYSTYMAS</p>
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