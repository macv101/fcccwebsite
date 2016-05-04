<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Fill in the form below to send a prayer request.';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = '';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="generator" content="RapidWeaver" />
		
		<title>Submit a Prayer Request</title>
		<link rel="stylesheet" type="text/css" media="screen" href="../../rw_common/themes/d_scribe_2/styles.css"  />
		<link rel="stylesheet" type="text/css" media="screen" href="../../rw_common/themes/d_scribe_2/colourtag.css"  />
		<link rel="stylesheet" type="text/css" media="print" href="../../rw_common/themes/d_scribe_2/print.css"  />
		<script type="text/javascript" src="../../rw_common/themes/d_scribe_2/javascript.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="../../rw_common/themes/d_scribe_2/css/background/strip.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../../rw_common/themes/d_scribe_2/css/title/x_large.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../../rw_common/themes/d_scribe_2/css/badge/none.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../../rw_common/themes/d_scribe_2/css/nav/7tab.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../../rw_common/themes/d_scribe_2/css/nav/40px.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../../rw_common/themes/d_scribe_2/css/feature_image/image1.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../../rw_common/themes/d_scribe_2/css/image_effect/shadow100.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../../rw_common/themes/d_scribe_2/css/header/georgia.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../../rw_common/themes/d_scribe_2/css/body/helvetica.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../../rw_common/themes/d_scribe_2/css/sidebar/right_light.css" />
				
		
		
		
		
	</head>
	
<body>
	<div id="wrapperOuter">
		<div id="wrapperInner">
			<div id="container">
				<div id="titleLogo">
					<div id="logo"><a href="http://www.firstccc.com/" title="Home"><img src="../../rw_common/images/FCCC_Logo.jpg" width="384" height="113" alt="Site logo"/></a></div>
					<h1 class="title"></h1>
					<h2 class="slogan"></h2>
				</div><!-- titleLogo -->
				
				<div id="badge">
					<div id="extraContainer2"></div>
					<div id="searchBox">
						<form class="googleSearch" action="http://www.google.com/search" method="get">
							<fieldset>
								<input class="searchHide" type="hidden" name="sitesearch" value="http://www.firstccc.com/" />
								<input class="searchField" title="Google Search..." type="text" name="q" size="21" maxlength="255" value="" />
								<input class="image" type="image" src="../../rw_common/themes/d_scribe_2/images/search_icon_small.jpg"/>
							</fieldset>
						</form><!-- Google Search -->
						
						<form class="rapidSearch" action="http://www.firstccc.com/search" method="get">
							<fieldset>
								<input type="hidden" value="utf-8" name="ie" />
								<input name="query" type="text" class="rapidSearchField" onfocus="if (this.value=='Search') this.value = ''" onclick ="if (this.value=='Search') this.value = ''" onblur="if (this.value=='') this.value = 'Search'" value="Search"/>
								<input class="image" type="image" src="../../rw_common/themes/d_scribe_2/images/search_icon_small.jpg"/>
							</fieldset>
						</form><!-- Rapidsearch -->
					</div><!-- searchBox -->
				</div><!-- badge -->
				
				<div id="topWrapper">
					<div id="toolbar" class="menu"><ul><li><a href="../../index.html" rel="self">Home</a></li><li><a href="../../page1/index.html" rel="self">About FCCC</a><ul><li><a href="../../page1/page7/index.html" rel="self">Worship Services</a></li><li><a href="../../page1/page23/index.html" rel="self">Address/Phone Directions</a></li><li><a href="../../page1/page9/index.html" rel="self">What We Believe</a></li><li><a href="../../page1/page10/index.html" rel="self">Facebook</a></li></ul></li><li><a href="../../page4/index.html" rel="self" class="currentAncestor">Pastor's Corner</a><ul><li><a href="../../page4/page28/index.html" rel="self">About Our Pastor</a></li><li><a href="index.php" rel="self" id="current">Submit a Prayer Request</a></li><li><a href="../../page4/page12/index.html" rel="self">Past Messages</a></li><li><a href="../../page4/page13/index.html" rel="self">Upcoming Messages</a></li></ul></li><li><a href="../../page5/index.html" rel="self">Ministries</a><ul><li><a href="../../page5/page24/index.html" rel="self">Worship Services</a></li><li><a href="../../page5/page15/index.html" rel="self">Small Groups</a><ul><li><a href="../../page5/page15/page29/index.html" rel="self">JOY Fellowship</a></li><li><a href="../../page5/page15/page34/index.html" rel="self">Rejuvenate</a></li><li><a href="../../page5/page15/page14/index.html" rel="self">Experience</a></li><li><a href="../../page5/page15/page33/index.html" rel="self">Young Adults</a></li><li><a href="../../page5/page15/page30/index.html" rel="self">Men's</a></li><li><a href="../../page5/page15/page31/index.html" rel="self">Women's</a></li></ul></li><li><a href="../../page5/page2/index.html" rel="self">Sunday School</a><ul><li><a href="../../page5/page2/page3/index.html" rel="self">CYC</a></li><li><a href="../../page5/page2/page40/index.html" rel="self">Toddlers to Preteen</a></li><li><a href="../../page5/page2/page41/index.html" rel="self">Young Teen to High School</a></li><li><a href="../../page5/page2/page32/index.html" rel="self">Adult</a><ul><li><a href="../../page5/page2/page32/page19/index.html" rel="self">Tagalog</a></li><li><a href="../../page5/page2/page32/page20/index.html" rel="self">English</a></li></ul></li></ul></li><li><a href="../../page5/page21/index.html" rel="self">Evangelism</a></li><li><a href="../../page5/page16/index.html" rel="self">Music/Fine Arts</a></li><li><a href="../../page5/page17/index.html" rel="self">Missions</a></li><li><a href="../../page5/page18/index.html" rel="self">Outreach</a><ul><li><a href="../../page5/page18/page35/index.html" rel="self">Hands and Feet</a></li><li><a href="../../page5/page18/page36/index.html" rel="self">Homeless</a></li></ul></li></ul></li><li><a href="../../page22/index.html" rel="self">Media</a><ul><li><a href="../../page22/page37/index.html" rel="self">Past Messages</a></li><li><a href="../../page22/page11/index.html" rel="self">Facebook</a></li></ul></li><li><a href="../../page38/index.html" rel="self">Events</a></li><li><a href="../../page6/index.html" rel="self">Contact</a><ul><li><a href="../../page6/contact-form-2/index.php" rel="self">Submit a Prayer Request</a></li><li><a href="../../page6/contact-form/index.php" rel="self">Contact Us</a></li><li><a href="../../page6/page25/index.html" rel="self">Staff/Elders</a></li><li><a href="../../page6/page8/index.html" rel="self">Address/Phone Directions</a></li></ul></li></ul></div>			
					<div id="featureImage">
						<!-- Replace this line with your BannerZest code and select "none" under Banner Effects. -->
						<div id="imageTint">
							<div id="extraContainer3"></div>
						</div>
						<div id="imageShadow"></div>
						<div id="extraContainer1">
						</div><!-- extraContainer 1 -->
					</div><!-- featureImage -->
				</div><!-- topWrapper -->
					
				<div id="top"></div>
				<div id="contentWrapper">
					<div id="contentBackgroundX">
						<div id="contentBackground">
							<div id="contentContainer">
								<div id="padding">
									
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Confidential:</label> 
		<input <?php echo check('element3', 'checkbox'); ?> type="checkbox" name="form[element3]" value="yes"/><br /><br />

		<label>Prayer Request:</label> *<br />
		<textarea class="form-input-field" name="form[element4]" rows="8" cols="38"><?php echo check('element4'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Reset" />
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>
								</div><!-- padding -->
							</div><!-- contentContainer -->
					
							<div id="sidebarContainer">
								<h2 id="sideTitle"></h2>
								
								
							</div><!-- sidebarContainer -->
					
						<div class="clear"></div>
						</div><!-- contentBackground -->
					</div><!-- contentBackgroundX -->
			
					<div id="bottomInfo">
						<div id="breadcrumb"></div>
						<div id="footerInfo">&copy; 2013 FCC Carson <a href="#" id="rw_email_contact">Contact Us</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":fi";var _rwObsfuscatedHref3 = "rst";var _rwObsfuscatedHref4 = "chr";var _rwObsfuscatedHref5 = "ist";var _rwObsfuscatedHref6 = "ian";var _rwObsfuscatedHref7 = "chu";var _rwObsfuscatedHref8 = "rch";var _rwObsfuscatedHref9 = "car";var _rwObsfuscatedHref10 = "son";var _rwObsfuscatedHref11 = "@ya";var _rwObsfuscatedHref12 = "hoo";var _rwObsfuscatedHref13 = ".co";var _rwObsfuscatedHref14 = "m";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9+_rwObsfuscatedHref10+_rwObsfuscatedHref11+_rwObsfuscatedHref12+_rwObsfuscatedHref13+_rwObsfuscatedHref14; document.getElementById('rw_email_contact').href = _rwObsfuscatedHref;</script></div>
					</div><!-- bottomInfo -->
				</div><!-- contentWrapper -->
				<div id="footer"></div>
			</div><!-- container -->
		</div><!-- wrapperInner -->
	</div><!-- wrapperOuter -->
	<!--[if lt IE 7]><script type="text/javascript" src="../../rw_common/themes/d_scribe_2/js/ie6.js"></script><![endif]-->
</body>
</html>