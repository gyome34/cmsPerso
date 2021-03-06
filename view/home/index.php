<?php //$title_for_layout = $pages->name; ?>
<!--<div class='hero-unit'>
	<h1 align="center">Accueil</h1>
</div>
<br />
<div class='hero-unit'>
<h1 align="center"></h1>
	<div id='conteneur'>
		<div id='carrousel'>
		<?php 
			// $i = 0;
			// foreach($sliders as $k=>$v){
				// $i++;
				// echo $this->slide->create($v->name,$v->file,$i);
			// }
		?>
		</div>
	</div>
</div>
<br />
<div class='hero-unit'>
	<?php 
			// $i = 0;
			// foreach($focus as $k=>$v){
				// $i++;
				// echo $this->Hfocus->create($v->name,$v->file,$v->slug,$i);
			// }
		?>
</div>
<br />
<div class='hero-unit'>
	<h1 align="center">Footer Prochainement</h1>
</div>
<br />-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    
    <title>Personal vCard Template</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo router::webroot('css/reset.css');?>"/> 
    <link rel="stylesheet" type="text/css" href="<?php echo router::webroot('css/style.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo router::webroot('css/fancybox.css');?>"/>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic"/>
    
    <script type="text/javascript" src="<?php echo router::webroot('js/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo router::webroot('js/jquery.easytabs.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo router::webroot('js/respond.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo router::webroot('js/jquery.adipoli.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo router::webroot('js/jquery.fancybox-1.3.4.pack.js');?>"></script>
    <script type="text/javascript" src="<?php echo router::webroot('js/jquery.isotope.min.js');?>"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="<?php echo router::webroot('js/jquery.gmap.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo router::webroot('js/custom.js');?>"></script>
    
</head>
    <body>
        <!-- Container -->
        <div id="container">
        
            <!-- Top -->
			<div class="top"> 
            	<!-- Logo -->
            	<div id="logo">
                	<h2>CORNU Guillaume</h2>
                    <h4>DEVELOPPEUR & WEB DESIGNER</h4>
                </div>
                <!-- /Logo -->
                
                <!-- Social Icons -->
                <ul class="socialicons">
                	<li><a href="#" class="social-text">SOCIAL PROFILES</a></li>
                	<li><a href="#" class="social-facebook"></a></li>
                    <li><a href="#" class="social-twitter"></a></li>
                    <li><a href="#" class="social-in"></a></li>
                    <li><a href="#" class="social-googleplus"></a></li>
                    <li>
						<?php
						if($this->session->isLogged())
						{
							$url = router::url('cockpit');
							$html = "<a class='social-text' href='$url'>";
							// $html .= "<i class='icon-wrench'></i>";
							$html .= "&nbsp;ADMINISTRATION</a>";
							echo $html;
						}
						else
						{
							$url = router::url('user/login');
							$html = "<a class='social-text' href='$url'>";
							// $html .= "<i class='icon-barcode'></i>";
							$html .= "&nbsp;CONNEXION</a>";
							echo $html;
						}
						?>
					</li>
                </ul>
                <!-- /Social Icons -->
            </div>
            <!-- /Top -->
            
            <!-- Content -->
            <div id="content" >
            
                <!-- Profile -->
                <div id="profile"> 
                 	<!-- About section -->
                	<div class="about">
                    	<div class="photo-inner"><img src="images/photo.jpg" height="186" width="153" /></div>
                        <h1>CORNU Guillaume</h1>
                        <h3>DEVELOPPEUR & WEB DESIGNER</h3>
                        <p>I like to make cool and creative designs. My design stash is always full of refreshing ideas. Feel free to take a look around my Vcard.</p>
                    </div>
                    <!-- /About section -->
                     
                    <!-- Personal info section -->
                	<ul class="personal-info">
					<?php 
						$i = 0;
						foreach($datas as $k=>$v){
							$i++;
							$html = '';
							$html .= "<li><label>Name</label><span>".$v->name.' '.$v->firstname."</span></li>";
							$html .= "<li><label>Birthday</label><span>".$v->birthday."</span></li>";
							$html .= "<li><label>Address</label><span>".$v->address."</span></li>";
							$html .= "<li><label>Email</label><span>".$v->email."<span></li>";
							// $html .= "<li><label>Phone</label><span>+123 456 789 111</span></li>";
							$html .= "<li><label>Website</label><span>".$v->website."</span></li>";
							echo $html;
						}
					?>
                        <!---->
                    </ul>
                    <!-- /Personal info section -->
                </div>        
                <!-- /Profile --> 

                <!-- Menu -->
                <div class="menu">
                	<ul class="tabs">
                    	<li class="tmenu"><a href="#profile" class="tab-profile">Profile</a></li>
                    	<li class="tmenu"><a href="#resume" class="tab-resume">Resume</a></li>
                    	<li class="tmenu"><a href="#portfolio" class="tab-portfolio">Portfolio</a></li>
                    	<li class="tmenu"><a href="#contact" class="tab-contact">Contact</a></li>
                    </ul>
                </div>
                <!-- /Menu --> 
                
                <!-- Resume -->
                <div id="resume">
                	 <div class="timeline-section">
                        <!-- Timeline for Employment  -->   
                        <h3 class="main-heading"><span>Employment</span></h3>   
                        <ul class="timeline">
						<?php $i = 0;
						foreach($emplois as $k=>$v){
							$i++;
							$html = '';
							$html .= "<li><div class='timelineUnit'>";
							$html .= "<h4>".$v->title."<span class='timelineDate'>".$v->date."</span></h4>";
                            $html .= "<h5>".$v->subtitle."</h5>";
                            $html .= "<p>".$v->content."</p>";
                            $html .= "</div></li>";
							echo $html;
                         }   
						?>
                            <!--<li>
                                                   
                                <div class="timelineUnit">
                                    <h4>Manager<span class="timelineDate">2010 - Present</span></h4>
                                    <h5>Ligula Non Lectus</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivamus.</p>
                                </div>
                            </li>
                            <li>
                         
                                <div class="timelineUnit">
                                    <h4>Web Developer<span class="timelineDate">2008 - 2010</span></h4>
                                    <h5>Lorem ipsum</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing Vivamus sit amet ligula non lectus. amet ligula non lectus Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                </div>
                            </li>
                            <li>
                     
                                <div class="timelineUnit">
                                    <h4>Web Designer<span class="timelineDate">2007</span></h4>
                                    <h5>Consectetur adipiscing </h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing Vivamus sit Vivamus sit. Vivamus sit.. consectetur adipiscing Vivamus sit. Vivamus sit </p>
                                </div>
                            </li>
                            <div class="clear"></div>-->
                        </ul> 
                        <!-- /Timeline for Employment  -->

                        <!-- Timeline for Education  -->   
                        <h3 class="main-heading"><span>Education</span></h3>   
                         <ul class="timeline">
                            <li>            
                                <div class="timelineUnit">
                                    <h4>Graphic Design<span class="timelineDate">2010 - 2012</span></h4>
                                    <h5>School Of Design</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing Vivamus sit amet ligula non lectus.consectetur adipiscingVivamus sit amet </p>
                                </div>
                            </li>
                            <li>             
                                <div class="timelineUnit">
                                    <h4>Graphic Design<span class="timelineDate">2009</span></h4>
                                    <h5>School of the Arts</h5>
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit. egestas.Vivamus sit amet ligula non lectus cursus egestas amet ligula non lectus cursus egestas. </p>
                                </div>
                            </li>
                            <div class="clear"></div>
                        </ul> 
                        <!-- /Timeline for Education  -->              
                    </div>
                    <div class="skills-section">
                        <!-- Skills -->
                        <h3 class="main-heading"><span>Graphics and media skills</span></h3> 
                        <ul class="skills">
                            <li>
                                <h4>Photoshop</h4>
                                <span class="rat6"></span>
                            </li>
                            <li>
                                <h4>Indesign</h4>
                                <span class="rat4"></span>
                            </li>
                            <li>
                                <h4>Illustrator</h4>
                                <span class="rat5"></span>
                            </li>
                            <li>
                                <h4>Flash</h4>
                                <span class="rat4"></span>
                            </li>
                            <li>
                                <h4>Corel Draw</h4>
                                <span class="rat2"></span>
                            </li>
                            <li>
                                <h4>Cinema4D</h4>
                                <span class="rat6"></span>
                            </li> 
                        </ul>
                   
                        <h3 class="main-heading"><span>Programming Skills</span></h3> 
                        <ul class="skills">
                            <li>
                                <h4>Dreamweaver</h4>
                                <span class="rat4"></span>
                            </li>
                            <li>
                                <h4>Php/Sql</h4>
                                <span class="rat2"></span>
                            </li>
                            <li>
                                <h4>Javascript</h4>
                                <span class="rat6"></span>
                            </li>
                            <li>
                                <h4>Wordpress</h4>
                                <span class="rat5"></span>
                            </li>
                            <li>
                                <h4>Drupal</h4>
                                <span class="rat3"></span>
                            </li>
                        </ul>
                        <h3 class="main-heading"><span>Design Skills</span></h3> 
                        <ul class="skills">
                            <li>
                                <h4>Graphic Design</h4>
                                <span class="rat4"></span>
                            </li>
                            <li>
                                <h4>Web design</h4>
                                <span class="rat3"></span>
                            </li>
                            <li>
                                <h4>Print Design</h4>
                                <span class="rat6"></span>
                            </li>
                        </ul>
                     <!-- /Skills -->
                     </div>
                     <div class="clear"></div>
                     <a href="#" class="button">Download Vcard</a>
                </div>
                <!-- /Resume --> 
                                        
                <!-- Portfolio -->
                <div id="portfolio">

                     <ul id="portfolio-filter">
                        <li><a href="#" class="current" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".webdesign">WebDesign</a></li>
                        <li><a href="#" data-filter=".photoghraphy">Photoghraphy</a></li>
                        <li><a href="#" data-filter=".illustration">Illustration</a></li>
                        <li><a href="#" data-filter=".print">Print</a></li>
                        <li><a href="#" data-filter=".animation">Animation</a></li>
                    </ul>
                    <div class="extra-text">Some of the projects i'm proud with</div>
                    <ul id="portfolio-list">
                        <li class="illustration print">
                            <a href="portfolio/1.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque" rel="portfolio" class="folio">
                                <img src="portfolio/1-thumb.jpg" alt="">
                                <h2 class="title">Hello Goodbye</h2>
                                <span class="categorie">Print / Illustration</span> 
                            </a>
                    	</li>
                        <li class="webdesign">
                            <a href="http://www.youtube.com/embed/c9MnSeYYtYY?autoplay=1" rel="portfolio" class="folio iframe">
                                <img src="portfolio/3-thumb.jpg" alt="" >
                                <h2 class="title">Snow time</h2>
                                <span class="categorie">Webdesign</span> 
                            </a>
                    	</li>                        
                        <li class="photoghraphy">
                            <a href="http://www.google.com/" rel="portfolio" target="_new">
                                <img src="portfolio/2-thumb.jpg" alt="" >                            
                                <h2 class="title">Help us</h2>
                                <span class="categorie">Photography</span> 
                            </a>
                    	</li>
                        <li class="animation print">
                            <a href="portfolio/4.jpg" rel="portfolio" class="folio">
                                <img src="portfolio/4-thumb.jpg" alt="" >
                                <h2 class="title">Sunshine</h2>
                                <span class="categorie">Print / Animation</span> 
                            </a>
                    	</li>
                        <li class="animation">
                            <a href="portfolio/5.jpg" rel="portfolio" class="folio">
                                <img src="portfolio/5-thumb.jpg" alt="" >
                                <h2 class="title">Come together</h2>
                                <span class="categorie">Animation</span> 
                            </a>
                    	</li>
                        <li class="webdesign print">
                            <a href="portfolio/6.jpg" rel="portfolio" class="folio">
                                <img src="portfolio/6-thumb.jpg" alt="" >
                                <h2 class="title">The yellow</h2>
                                <span class="categorie">Webdesign / Print</span> 
                            </a>
                    	</li>
                        <li class="photoghraphy">
                            <a href="portfolio/7.jpg" rel="portfolio" class="folio">
                                <img src="portfolio/7-thumb.jpg" alt="" >
                                <h2 class="title">Black bird</h2>
                                <span class="categorie">Photoghraphy</span> 
                            </a>
                    	</li>
                        <li class="illustration">
                            <a href="portfolio/8.jpg" rel="portfolio" class="folio">
                                <img src="portfolio/8-thumb.jpg" alt="" >
                                <h2 class="title">Revolution</h2>
                                <span class="categorie">Illustration</span> 
                            </a>
                    	</li>
                    </ul>
                </div>
                <!-- /Portfolio -->   
                
                <!-- Contact -->
                <div id="contact">
                	<div id="map"></div>
                	<!-- Contact Info -->
                    <div class="contact-info">
                    <h3 class="main-heading"><span>Contact info</span></h3>
                	<ul>
                        <li>Level 13, 2 Elizabeth St, Melbourne Victoria 3000 Australia<br /><br /></li>
                        <li>Email: John.smith@gmail.com</li>
                        <li>Phone: +123 456 789 111</li>
                        <li>Website: www.johnsmith.com</li>
                    </ul>
                    </div>
                    <!-- /Contact Info -->
                    
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <h3 class="main-heading"><span>Let's keep in touch</span></h3>
                        <div id="contact-status"></div>
                        <form action="#" id="contactform">
                            <p>
                            	<label for="name">Your Name</label>
                            	<input type="text" name="name" class="input" >
                            </p>
                            <p>
                            	<label for="email">Your Email</label>
                            	<input type="text" name="email" class="input">
                            </p>
                            <p>
                            	<label for="message">Your Message</label>
                                <textarea name="message" cols="88" rows="6" class="textarea" ></textarea>
                            </p>
                            <input type="submit" name="submit" value="Send your message" class="button">
                        </form>
                    </div>
                    <!-- /Contact Form -->
                </div>
                <!-- /contact -->  

            </div>
            <!-- /Content -->
            
            <!-- Footer -->
			<div class="footer">
            	<!--<div class="copyright">Copyright � 2012 John smith</div>-->
            	<div class="copyright">
					
				</div>
            </div>
            <!-- /Footer --> 
            
        </div>
		<!-- /Container -->
        <div id="style-switcher">
            <ul>
                <li><a class="bg-switcher" value="1" href="#"><img width="20" height="20" src="images/bg1.png" /></a></li>
                <li><a class="bg-switcher" value="2" href="#"><img width="20" height="20" src="images/bg2.png" /></a></li>
                <li><a class="bg-switcher" value="3" href="#"><img width="20" height="20" src="images/bg3.png" /></a></li>
                <li><a class="bg-switcher" value="4" href="#"><img width="20" height="20" src="images/bg4.png" /></a></li>
                <li><a class="bg-switcher" value="5" href="#"><img width="20" height="20" src="images/bg5.png" /></a></li>
                <li><a class="bg-switcher" value="6" href="#"><img width="20" height="20" src="images/bg6.png" /></a></li>
                <li><a class="bg-switcher" value="7" href="#"><img width="20" height="20" src="images/bg7.png" /></a></li>
                <li><a class="bg-switcher" value="8" href="#"><img width="20" height="20" src="images/bg8.png" /></a></li>
            </ul>
        </div>
    </body>
</html>

