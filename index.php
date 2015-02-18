<?php
session_start();

?>

<!DOCTYPE html>
<html class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths ff" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <style type="text/css">
      @charset "UTF-8";
      [ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{
        display:none !important;
      }
      ng\:form{
        display:block;
      }
      .ng-animate-block-transitions{
        transition:0s all!important;
        -webkit-transition:0s all!important;
      }
      .ng-hide-add-active,.ng-hide-remove{
        display:block!important;
      }
    </style>
	



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>
      IBM Service Engage
    </title>
    <meta name="description" content="IBM Service Engage provides a set of services that help you manage your cloud and on premise applications">
    <meta name="keywords" content="service management, systems management, saas, hybrid, cloud, cloud management, devops">
    <link href="https://www.ibm.com/favicon.ico" rel="SHORTCUT ICON">
    <meta name="generator" content="DocPad v6.69.2">
    <link rel="stylesheet" href="css/bb0eacda.css">
	<link rel="stylesheet" href="css/89b2de1b.all.min.cache.css">
	<link rel="stylesheet" href="css/popup.css">
	
	

<script src="http://code.jquery.com/jquery-1.11.2.js"></script>


	
	<script type="text/javascript" async="" src="js/7471.js"></script>
	<script type="text/javascript" async="" src="js/3e377118.all.min.cache.js"></script>
    <script src="js/linkid.js" async="" type="text/javascript">
    </script>
	
		<script>
	 $(function() {
		 $("#btn_submit").on("click",function(){
			var photo_caption =  $("#search_id").val();
			$.ajax({ url: 'searchresults.php',
				data: {search_id: photo_caption},
				type: 'post',
				success: function(output) {
						
						$("#dialog11").empty();
						$("#dialog11").append('<img src="photos/'+output+'.jpg" />');
						$("#dialog11").css("display","block");
				}
			}); 
		 });
	 });
	
	
	
	</script>
	

		
  </head>
  <body>
    <input id="offcanvas-menu" name="offcanvas-menu" class="hidden-checkbox" type="checkbox">
    <header class="single-nav">
      <div class="navbar navbar-fixed-top navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand" href="https://www.ibmserviceengage.com/">
            <div>
              IBM
              <span class="navbar-brand-name">
                &nbsp;Service Engage
              </span>
              <span class="navbar-amaze" feature="beta">
                &nbsp;Beta!
              </span>
            </div>
          </a>
          <div class="hidden-xs hidden-sm">
            <ul class="nav navbar-nav navbar-right ng-scope" ng-controller="UserController">
              <!-- ngIf: user.info === false -->
              <li class="ng-scope" ng-if="user.info === false" dropdown="">
                <a aria-expanded="false" aria-haspopup="true" type="button" dropdown-toggle="">
                  Login
                  <span class="caret">
                  </span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="https://www.ibmserviceengage.com/login?url=/" virtual-page="login">
                      Log in with IBM
                    </a>
                  </li>
                  <li feature="linkedin">
                    <a href="https://www.ibmserviceengage.com/auth/linkedin/login?url=/" virtual-page="login-linkedin">
                      Log in with LinkedIn
                    </a>
                  </li>
                  <li role="presentation" class="divider">
                  </li>
                  <li>
                    <a href="https://www.ibm.com/account/profile/?page=reg&amp;template=lightperson&amp;okurl=https://www.ibmserviceengage.com/" virtual-page="register">
                      Create an IBM ID
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="#" class="products-button" data-toggle="modal" data-target=".products">
                  Products
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <label for="offcanvas-menu" class="menu-icon visible-sm visible-xs">
      </label>
    </header>
    <div class="modal fade products" role="dialog" tabindex="-1">
      <div class="modal-dialog modal-md container">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              ×
            </button>
            <h4 class="modal-title">
              Products
            </h4>
          </div>
          <div class="modal-body">
            <h5 class="visible-xs row offering-name">
              <a class="col-xs-12" href="https://www.ibmserviceengage.com/inventory-insights/learn">
                Asset Inventory Analytics
              </a>
            </h5>
            <div class="row solution">
              <div class="col-sm-2 col-xs-3 col-sm-offset-0 col-xs-offset-3">
                <a href="https://www.ibmserviceengage.com/inventory-insights/learn">
                  <div class="square-icon-small yellow">
                    <span class="glyphicons magic">
                    </span>
                  </div>
                </a>
              </div>
              <div class="col-sm-7 col-xs-6">
                <h5 class="hidden-xs offering-name">
                  <a href="https://www.ibmserviceengage.com/inventory-insights/learn">
                    Asset Inventory Analytics
                  </a>
                </h5>
                <div class="hover-links">
                  <a class="explore-link explore" href="https://www.ibmserviceengage.com/inventory-insights/explore">
                    Explore
                  </a>
                  
                  <span class="hidden-xs explore-space">
                    |
                  </span>
                  <br class="visible-xs">
                  <a class="try-link try" href="https://www.ibmserviceengage.com/inventory-insights/try">
                    Try
                  </a>
                  
                  <span class="hidden-xs try-space">
                    |
                  </span>
                  <br class="visible-xs">
                  <a href="https://www.ibmserviceengage.com/inventory-insights/buy" class="buy buy-link">
                    Buy
                  </a>
                </div>
              </div>
              <div class="col-sm-3 hidden-xs btn-container">
                <a href="https://www.ibmserviceengage.com/inventory-insights/learn" class="btn btn-primary learn-btn">
                  Learn More
                </a>
              </div>
            </div>
            <hr>
            <h5 class="visible-xs row offering-name">
              <a class="col-xs-12" href="https://www.ibmserviceengage.com/endpoint-management/learn">
                Endpoint Management
              </a>
            </h5>
            <div class="row solution">
              <div class="col-sm-2 col-xs-3 col-sm-offset-0 col-xs-offset-3">
                <a href="https://www.ibmserviceengage.com/endpoint-management/learn">
                  <div class="square-icon-small blue">
                    <span class="glyphicons git_branch">
                    </span>
                  </div>
                </a>
              </div>
              <div class="col-sm-7 col-xs-6">
                <h5 class="hidden-xs offering-name">
                  <a href="https://www.ibmserviceengage.com/endpoint-management/learn">
                    Endpoint Management
                  </a>
                </h5>
                <div class="hover-links">
                  <a class="explore-link explore" href="https://www.ibmserviceengage.com/endpoint-management/explore">
                    Explore
                  </a>
                  
                  <span class="hidden-xs explore-space">
                    |
                  </span>
                  <br class="visible-xs">
                  <a class="try-link try" href="https://www.ibmserviceengage.com/endpoint-management/try">
                    Try
                  </a>
                  
                  <span class="hidden-xs try-space">
                    |
                  </span>
                  <br class="visible-xs">
                  <a href="https://www.ibmserviceengage.com/endpoint-management/buy" class="buy buy-link">
                    Buy
                  </a>
                </div>
              </div>
              <div class="col-sm-3 hidden-xs btn-container">
                <a href="https://www.ibmserviceengage.com/endpoint-management/learn" class="btn btn-primary learn-btn">
                  Learn More
                </a>
              </div>
            </div>
            <hr>
            <h5 class="visible-xs row offering-name">
              <a class="col-xs-12" href="https://www.ibmserviceengage.com/asset-management/learn">
                Enterprise Asset Management
              </a>
            </h5>
            <div class="row solution">
              <div class="col-sm-2 col-xs-3 col-sm-offset-0 col-xs-offset-3">
                <a href="https://www.ibmserviceengage.com/asset-management/learn">
                  <div class="square-icon-small red">
                    <span class="glyphicons cogwheels">
                    </span>
                  </div>
                </a>
              </div>
              <div class="col-sm-7 col-xs-6">
                <h5 class="hidden-xs offering-name">
                  <a href="https://www.ibmserviceengage.com/asset-management/learn">
                    Enterprise Asset Management
                  </a>
                </h5>
                <div class="hover-links">
                  <a class="explore-link explore" href="https://www.ibmserviceengage.com/asset-management/explore">
                    Explore
                  </a>
                  
                  <span class="hidden-xs explore-space">
                    |
                  </span>
                  <br class="visible-xs">
                  <a href="https://www.ibmserviceengage.com/asset-management/buy" class="buy buy-link">
                    Buy
                  </a>
                </div>
              </div>
              <div class="col-sm-3 hidden-xs btn-container">
                <a href="https://www.ibmserviceengage.com/asset-management/learn" class="btn btn-primary learn-btn">
                  Learn More
                </a>
              </div>
            </div>
            <hr>
            <h5 class="visible-xs row offering-name">
              <a class="col-xs-12" href="https://www.ibmserviceengage.com/enterprise-mobility/learn">
                Enterprise Mobility Management
              </a>
            </h5>
            <div class="row solution">
              <div class="col-sm-2 col-xs-3 col-sm-offset-0 col-xs-offset-3">
                <a href="https://www.ibmserviceengage.com/enterprise-mobility/learn">
                  <div class="square-icon-small blue">
                    <span class="glyphicons iphone_shake">
                    </span>
                  </div>
                </a>
              </div>
              <div class="col-sm-7 col-xs-6">
                <h5 class="hidden-xs offering-name">
                  <a href="https://www.ibmserviceengage.com/enterprise-mobility/learn">
                    Enterprise Mobility Management
                  </a>
                </h5>
                <div class="hover-links">
                  <a class="try-link try" href="https://www.ibmserviceengage.com/enterprise-mobility/try">
                    Try
                  </a>
                  
                  <span class="hidden-xs try-space">
                    |
                  </span>
                  <br class="visible-xs">
                  <a href="https://www.ibmserviceengage.com/enterprise-mobility/buy" class="buy buy-link">
                    Buy
                  </a>
                </div>
              </div>
              <div class="col-sm-3 hidden-xs btn-container">
                <a href="https://www.ibmserviceengage.com/enterprise-mobility/learn" class="btn btn-primary learn-btn">
                  Learn More
                </a>
              </div>
            </div>
            <hr>
            <h5 class="visible-xs row offering-name">
              <a class="col-xs-12" href="https://www.ibmserviceengage.com/it-service-management/learn">
                IT Service Management
              </a>
            </h5>
            <div class="row solution">
              <div class="col-sm-2 col-xs-3 col-sm-offset-0 col-xs-offset-3">
                <a href="https://www.ibmserviceengage.com/it-service-management/learn">
                  <div class="square-icon-small teal">
                    <span class="glyphicons headset">
                    </span>
                  </div>
                </a>
              </div>
              <div class="col-sm-7 col-xs-6">
                <h5 class="hidden-xs offering-name">
                  <a href="https://www.ibmserviceengage.com/it-service-management/learn">
                    IT Service Management
                  </a>
                </h5>
                <div class="hover-links">
                  <a class="explore-link explore" href="https://www.ibmserviceengage.com/it-service-management/explore">
                    Explore
                  </a>
                  
                  <span class="hidden-xs explore-space">
                    |
                  </span>
                  <br class="visible-xs">
                  <a class="try-link try" href="https://www.ibmserviceengage.com/it-service-management/try">
                    Try
                  </a>
                  
                  <span class="hidden-xs try-space">
                    |
                  </span>
                  <br class="visible-xs">
                  <a href="https://www.ibmserviceengage.com/it-service-management/buy" class="buy buy-link">
                    Buy
                  </a>
                </div>
              </div>
              <div class="col-sm-3 hidden-xs btn-container">
                <a href="https://www.ibmserviceengage.com/it-service-management/learn" class="btn btn-primary learn-btn">
                  Learn More
                </a>
              </div>
            </div>
            <hr>
            <h5 class="visible-xs row offering-name">
              <a class="col-xs-12" href="https://www.ibmserviceengage.com/application-monitoring/learn">
                Performance Management
              </a>
            </h5>
            <div class="row solution">
              <div class="col-sm-2 col-xs-3 col-sm-offset-0 col-xs-offset-3">
                <a href="https://www.ibmserviceengage.com/application-monitoring/learn">
                  <div class="square-icon-small yellow">
                    <span class="glyphicons dashboard">
                    </span>
                  </div>
                </a>
              </div>
              <div class="col-sm-7 col-xs-6">
                <h5 class="hidden-xs offering-name">
                  <a href="https://www.ibmserviceengage.com/application-monitoring/learn">
                    Performance Management
                  </a>
                </h5>
                <div class="hover-links">
                  <a class="explore-link explore" href="https://www.ibmserviceengage.com/application-monitoring/explore">
                    Explore
                  </a>
                  
                  <span class="hidden-xs explore-space">
                    |
                  </span>
                  <br class="visible-xs">
                  <a class="try-link try" href="https://www.ibmserviceengage.com/application-monitoring/try">
                    Try
                  </a>
                  
                  <span class="hidden-xs try-space">
                    |
                  </span>
                  <br class="visible-xs">
                  <a href="https://www.ibmserviceengage.com/application-monitoring/buy" class="buy buy-link">
                    Buy
                  </a>
                </div>
              </div>
              <div class="col-sm-3 hidden-xs btn-container">
                <a href="https://www.ibmserviceengage.com/application-monitoring/learn" class="btn btn-primary learn-btn">
                  Learn More
                </a>
              </div>
            </div>
            <hr>
            <h5 class="visible-xs row offering-name">
              <a class="col-xs-12" href="https://www.ibmserviceengage.com/workload-automation/learn">
                Workload Automation
              </a>
            </h5>
            <div class="row solution">
              <div class="col-sm-2 col-xs-3 col-sm-offset-0 col-xs-offset-3">
                <a href="https://www.ibmserviceengage.com/workload-automation/learn">
                  <div class="square-icon-small blue">
                    <span class="glyphicons history">
                    </span>
                  </div>
                </a>
              </div>
              <div class="col-sm-7 col-xs-6">
                <h5 class="hidden-xs offering-name">
                  <a href="https://www.ibmserviceengage.com/workload-automation/learn">
                    Workload Automation
                  </a>
                </h5>
                <div class="hover-links">
                  <a class="explore-link explore" href="https://www.ibmserviceengage.com/workload-automation/explore">
                    Explore
                  </a>
                  
                  <span class="hidden-xs explore-space">
                    |
                  </span>
                  <br class="visible-xs">
                  <a class="try-link try" href="https://www.ibmserviceengage.com/workload-automation/try">
                    Try
                  </a>
                  
                  <span class="hidden-xs try-space">
                    |
                  </span>
                  <br class="visible-xs">
                  <a href="https://www.ibmserviceengage.com/workload-automation/buy" class="buy buy-link">
                    Buy
                  </a>
                </div>
              </div>
              <div class="col-sm-3 hidden-xs btn-container">
                <a href="https://www.ibmserviceengage.com/workload-automation/learn" class="btn btn-primary learn-btn">
                  Learn More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <label for="offcanvas-menu" class="overlay visible-sm visible-xs">
    </label>
    <nav class="offcanvas-menu visible-xs visible-sm" role="navigation">
      <ul class="container nav-contents ng-scope" ng-controller="UserController">
        <li class="navgroup-item">
          <a class="row header-button navgroup-link" ng-click="loginOpened = !loginOpened">
            <div class="col-xs-10">
              <!-- ngIf: user.info === false -->
              <span class="ng-scope" ng-if="user.info === false">
                Login
              </span>
              <!-- end ngIf: user.info === false -->
              
              <!-- ngIf: user.info -->
            </div>
            <div class="col-xs-2 expand-icon">
              <span class="glyphicons chevron-right">
              </span>
            </div>
          </a>
          <!-- ngIf: user.info === false -->
          <ul style="height: auto;" ng-if="user.info === false" collapse="loginOpened" class="navgroup-list ng-scope collapse in">
            <li>
              <a href="https://www.ibmserviceengage.com/login?url=/" virtual-page="login">
                Log in with IBM
              </a>
            </li>
            <li feature="linkedin">
              <a href="https://www.ibmserviceengage.com/auth/linkedin/login?url=/" virtual-page="login-linkedin">
                Log in with LinkedIn
              </a>
            </li>
            <li role="presentation" class="divider">
            </li>
            <li>
              <a href="https://www.ibm.com/account/profile/?page=reg&amp;template=lightperson&amp;okurl=https://www.ibmserviceengage.com/" virtual-page="register">
                Create an IBM ID
              </a>
            </li>
          </ul>
          <!-- end ngIf: user.info === false -->
          <!-- ngIf: user.info -->
        </li>
        <li>
          <ul class="menu-list ng-scope" ng-controller="UserController">
            <!-- ngIf: user.info -->
            <!-- ngIf: user.info -->
            <li>
              <a href="#" class="products-button" data-toggle="modal" data-target=".products">
                Products
              </a>
            </li>
            <li>
              <a href="https://www.ibmserviceengage.com/about">
                About
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>


      <img src="images/header_medium.jpg" border="0" class="collage">
	  


	<section class="tabby-section1">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 text-center">
              <h2 class="title-red">
                Thanks for visiting our booth in the Solution Expo at IBM InterConnect 2015.
              </h2>
            </div>
          </div>
        </div>
		
        <div class="container">
          <div class="row" ng-non-bindable="">
            <div class="col-xs-12">
                    <p>
We hope you enjoyed embracing your inner superhero! Peruse your fellow heroes in the gallery and search for your photo using the code you received in the booth.   Explore the ways IBM can help you be a hero for your organization with SaaS, on-premises and hybrid IT management solutions.

<br /><br />Share your photo on Twitter with #SaaSHero for a daily chance to win a Bluetooth® speaker from February 22-26 at 1pm during the 
Solution Expo*!
                    </p>

	

          </div>
        </div>
		</div>
      </section>

<section class="tabby-section1">
        <div class="container">
          <div class="row">	 
		  
	<div class="text-center" style="margin-left:-15%;">
	
	<div> 
		<input id="btn_submit" type="image" src="images/search.jpg"> 
        <div style="display: inline; position: absolute; margin-top: 0px; ">
			<input id="search_id" type="text" name="search" style="background: #00b2ef;border: thin #00b2ef; cursor: text; height:37px;padding-left:10px;"> 
		</div>
	</div>
	
	<div id="dialog11" title="Basic dialog" style="display: none; position: absolute;margin:0 0 auto; width:115%; ">
		
	</div>
	


	</div>  
			</div>
		</div>
</section>	  

    <div class="collage" class="collage">
    
	   
	   <?include "viewgallery.php";?>
	 </div>
	  
       <section class="tabby-section video-section dot-nav-section bottom-pad" id="be-a-hero">
        <div class="container">
          <h2>
           Super Reading Material
          </h2>
        </div>
		
        <div class="container container-sm-height top-pad bottom-pad">
          <div class="row row-sm-height top-pad text-center">


		     	<div class="row-reading">
					<div class="column-reading1">
						<a class="icon-link" href="http://servicemanagement360.com/get-data-become-storage-super-hero/" target="_blank">
							<img src="images/super-reading-material1.jpg" alt="Get data become storage super hero" border="0" /></a>
							<br /><a href="http://servicemanagement360.com/get-data-become-storage-super-hero/" target="_blank">Get the most out of your data: Become a storage super hero</a>
						</a>
					</div>
					<div class="column-reading5"></div>
					
					<div class="column-reading2">
						<a class="icon-link" href="http://servicemanagement360.com/become-superhero-business-boss/" target="_blank">
							<img src="images/super-reading-material2.jpg" alt="Become an IT Superhero to your business" border="0" /></a>
							<br /><a href="http://servicemanagement360.com/become-superhero-business-boss/" target="_blank">Become an IT Superhero to your business (and your boss) </a>
						</a>
					</div>
					
					<div class="column-reading5"></div>
					
					<div class="column-reading3">
						<a class="icon-link" href="http://servicemanagement360.com/save-time-reduce-costs-innovate-era-cloud/" target="_blank">
							<img src="images/super-reading-material3.jpg" alt="Save time and reduce costs innovate era cloud" border="0" /></a>
						</a>
						<br /><a href="http://servicemanagement360.com/save-time-reduce-costs-innovate-era-cloud/" target="_blank">How to save time, reduce costs and innovate in the era of cloud </a>
					</div>
					
					<div class="column-reading5"></div>
										
					<div class="column-reading4">
						<a class="icon-link" href="http://servicemanagement360.com/first-comes-goggles-comes-marriage-savior-service-desk/" target="_blank">
							<img src="images/super-reading-material4.jpg" alt="First comes goggles comes marriage savior service desk" border="0" /></a>
						</a>
						<br /><a href="http://servicemanagement360.com/first-comes-goggles-comes-marriage-savior-service-desk/" target="_blank"> First Comes Goggles then Comes Marriage: Be A Savior of the Service Desk </a>
					</div>
				</div>		

		
          </div>


        </div>
      </section>


 
	  
	        <section class="tabby-section dot-nav-section product-overview bottom-pad" id="visibility-control-automation">
        <div class="container tabby-section3 dot-nav-section can-we-help" style="padding-left:20px">
              <h2>
                Join the #SaaSHero conversation on Twitter and follow @IBMTivoli!
              </h2>
			
				
			</div>
        </div>

        <div class="container container-sm-height top-pad bottom-pad">
	<!--	
		     	<div class="row-twit">
					<div class="column-half1">
		  <a class="twitter-timeline"
  href="https://twitter.com/hashtag/SaaSHero"
  data-widget-id="565536125654433792"
  data-theme="dark"
  data-link-color="#cc0000"
  data-related="twitterapi,twitter"
  data-aria-polite="assertive"
  width="700px"
  height="300px">#SaaSHero Tweets
</a>

            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

			</div>

			<div class="column-half2">
				<center><img src="images/ad1.jpg" border="0" /></center>
			</div>
		</div>
		-->
		

      </section>
	  
	  
	  
	  
	  
      <section class="tabby-section video-section dot-nav-section bottom-pad" id="be-a-hero">
        <div class="container">
          <h2>
            What do goggles have to do with IT? Find out in our Champions of the Cloud series!
          </h2>
        </div>
        <article class="container resource-item top-pad bottom-pad">
          <div class="row">
				<div class="myIframe">
					<?php include "youtube.php";?>
				</div>
          </div>
        </article>
      </section>

 
 	<section class="tabby-section dot-nav-section product-overview bottom-pad" id="visibility-control-automation">
        <div class="container tabby-section3 dot-nav-section can-we-help" style="padding-left:20px">
              <h2>
                Looking for a sidekick to help you save the day? Explore IBM Service Management solutions.
              </h2>
			<div class="gray">
            Your organization is only as good as the IT services that support it, and delivering exceptional service is vital to your success. You need the tools that give you visibility, control and automation regardless of where your services run: on-premises, in the cloud or both. Service management solutions from the IBM Cloud enable you to do just that.
            </div>
        </div>

        <div class="container container-sm-height top-pad bottom-pad">
			<div class="row row-sm-height hidden-xs1 top-pad">
		
			<table width="100%">
				<tr>
					<td width="50%">
						<table>
							<tr>
								<td><a data-target=".products" data-toggle="modal" href="#"><div class="square-icon-small yellow"><span class="glyphicons magic"></span></div></a></td>
								<td><a data-target=".products" data-toggle="modal" href="#">Asset Inventory Analytics</a></td>
							</tr>	
							<tr>
								<td><a data-target=".products" data-toggle="modal" href="#"><div class="square-icon-small blue"><span class="glyphicons git_branch"></span></div></a></td>
								<td><a data-target=".products" data-toggle="modal" href="#">Endpoint Management</a></td>
							</tr>
							<tr>
								<td><a data-target=".products" data-toggle="modal" href="#"><div class="square-icon-small red"><span class="glyphicons cogwheels"></span></div></a></td>
								<td><a data-target=".products" data-toggle="modal" href="#">Enterprise Asset Management</a></td>
							</tr>							
							<tr>
								<td><a data-target=".products" data-toggle="modal" href="#"><div class="square-icon-small teal"><span class="glyphicons iphone_shake"></span></div></a></td>
								<td><a data-target=".products" data-toggle="modal" href="#">Enterprise Mobility Management</a></td>
							</tr>
						</table>
					</td>
					<td width="50%">
						<table>
							<tr>
								<td><a data-target=".products" data-toggle="modal" href="#"><div class="square-icon-small yellow"><span class="glyphicons dashboard"></span></div></a></td>
								<td><a data-target=".products" data-toggle="modal" href="#">Performance Management</a></td>
							</tr>	
							<tr>
								<td><a data-target=".products" data-toggle="modal" href="#"><div class="square-icon-small blue"><span class="glyphicons history"></span></div></a></td>
								<td><a data-target=".products" data-toggle="modal" href="#">Workload Automation</a></td>
							</tr>
							<tr>
								<td><a data-target=".products" data-toggle="modal" href="#"><div class="square-icon-small teal"><span class="glyphicons headset"></span></div></a></td>
								<td><a data-target=".products" data-toggle="modal" href="#">IT Service Management</a></td>
							</tr>							
							<tr>
								<td><a data-target=".products" data-toggle="modal" href="#"><div class="square-icon-small blue"><span class="glyphicons cloud"></span></div></a></td>
								<td><a data-target=".products" data-toggle="modal" href="#">Cloud Orchestration</a></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		
				</div>					
					
			</div>

    </section>
 
       <section class="tabby-section video-section dot-nav-section bottom-pad">
        <div class="container">
          <h2>
           Super Fun Activities
          </h2>
        </div>
		
        <div class="container container-sm-height top-pad bottom-pad">
          <div class="row row-sm-height top-pad text-center">
		     	<div class="row-reading">
						<div class="column-reading1">
							<a href="http://superhero.namegeneratorfun.com/" target="blank">
							<img src="images/super-fun-activities1.jpg" border="0">
							<div style="margin-top:10px;margin-bottom:25px;">Super Hero Name Generator</div></a>
						</div>
						
						<div class="column-reading2">
							<a href="http://marvel.com/games/play/31/create_your_own_superhero" target="blank">
							<img src="images/super-fun-activities2.jpg" border="0">
							<div style="margin-top:10px;margin-bottom:25px;">Create your own Marvel Superhero</div></a>
						</div>
						
						<div class="column-reading3">
							<a href="http://entertainment.howstuffworks.com/arts/comic-books/superhero-alter-ego-quiz.htm" target="blank">
							<img src="images/super-fun-activities3.jpg" border="0">
							<div style="margin-top:10px;margin-bottom:25px;">Alter-Ego Quiz</div></a>
						</div>
						
						<div class="column-reading4">
							<a href="http://www.buzzfeed.com/awesomer/completely-true-facts-only-nerds-will-appreciate#.apVZ6Z1DG" target="blank">
							<img src="images/super-fun-activities4.jpg" border="0">
							<div style="margin-top:10px;margin-bottom:25px;">Comic Book Facts</div></a>
						</div>
					
              </div>
            </div>

          </div>
        </article>
      </section>
  
 
      <footer class="footer-main">
        <section class="general-footer">
          <div class="container">
            <div class="row">
              <div class="col-sm-3 col-xs-6 footer-links link-container">
                <h3>
                  Solutions
                </h3>
                <ul class="solution-links">
                  <li>
                    <a class="inventory-insights-learn-link" href="https://www.ibmserviceengage.com/inventory-insights/learn">
                      Asset Inventory Analytics
                    </a>
                  </li>
                  <li>
                    <a class="endpoint-management-learn-link" href="https://www.ibmserviceengage.com/endpoint-management/learn">
                      Endpoint Management
                    </a>
                  </li>
                  <li>
                    <a class="asset-management-learn-link" href="https://www.ibmserviceengage.com/asset-management/learn">
                      Enterprise Asset Management
                    </a>
                  </li>
                  <li>
                    <a class="enterprise-mobility-learn-link" href="https://www.ibmserviceengage.com/enterprise-mobility/learn">
                      Enterprise Mobility Management
                    </a>
                  </li>
                  <li>
                    <a class="it-service-management-learn-link" href="https://www.ibmserviceengage.com/it-service-management/learn">
                      IT Service Management
                    </a>
                  </li>
                  <li>
                    <a class="application-monitoring-learn-link" href="https://www.ibmserviceengage.com/application-monitoring/learn">
                      Performance Management
                    </a>
                  </li>
                  <li>
                    <a class="workload-automation-learn-link" href="https://www.ibmserviceengage.com/workload-automation/learn">
                      Workload Automation
                    </a>
                  </li>
                  <li>
                    <a href="https://www.ibmserviceengage.com/on-premises-solutions">
                      On-Premises Solutions
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-sm-3 col-xs-6 footer-links link-container">
                <h3>
                  Support
                </h3>
                <ul>
                  <li>
                    <a href="https://www.ibmserviceengage.com/support?type=trial">
                      Trial Support
                    </a>
                  </li>
                  <li>
                    <a href="https://www.ibmserviceengage.com/support?type=subscription">
                      Subscription Support
                    </a>
                  </li>
                  <li>
                    <a href="https://www.ibm.com/developerworks/community/forums/html/forum?id=9bc5ab1c-6c2c-4b46-84ef-13f86f604f7e" target="_blank">
                      Forums
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-sm-3 col-xs-6 footer-links link-container">
                <h3>
                  About
                </h3>
                <ul>
                  <li>
                    <a href="https://www.ibmserviceengage.com/contact-us">
                      Contact Us
                    </a>
                  </li>
                  <li>
                    <a href="https://www.ibmserviceengage.com/about">
                      Why IBM?
                    </a>
                  </li>
                  <li>
                    <a href="https://www.ibmserviceengage.com/security">
                      Security
                    </a>
                  </li>
                  <li>
                    <a href="https://www.ibmserviceengage.com/partners">
                      Partners
                    </a>
                  </li>
                  <li>
                    <a href="http://www.ibm.com/legal" target="_blank">
                      Terms of Use
                    </a>
                  </li>
                  <li>
                    <a href="http://www.ibm.com/privacy" target="_blank">
                      IBM Privacy
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-sm-3 col-xs-6 footer-links follow link-container">
                <h3>
                  Follow
                </h3>
                <ul class="social-links">
                  <li>
                    <a href="https://twitter.com/ibmtivoli" target="_blank">
                      <span class="social twitter">
                      </span>
                      Twitter
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/groups?mostRecent=&amp;gid=96699" target="_blank">
                      <span class="social linked_in">
                      </span>
                      LinkedIn
                    </a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/user/ibmservicemanagement/" target="_blank">
                      <span class="social youtube">
                      </span>
                      YouTube
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <div class="base-footer">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-xs-4">
                <a href="http://www.ibm.com/" target="_blank">
                  <div class="ibm">
                  </div>
                </a>
              </div>
              <div class="col-sm-6 col-xs-8 text-right">
                © 2014 IBM Inc. All rights reserved.
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>

  </body>
</html>