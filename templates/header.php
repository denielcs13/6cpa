<?php 
use SixCpa\Assets;
?>
        <div id="top" class="ribbon">
        	<div class="wrapper clearfix">
                <div class="accessibility">
                    <a href="#navigation" class="visuallyhidden focusable">Skip to navigation</a>
                    <a href="#content" class="visuallyhidden focusable">Skip to Content</a>
                </div>
                <div class="group">
                    <ul class="globalNav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <form class="clearfix">
                        <input type="search" class="search" placeholder="search" title="search"/>
                        <input type="submit" class="go" value="go" title="go"/>
                    </form>
				</div>              
            </div><!--wrapper-->
        </div><!--ribbon-->



        <header>

            <div class="banner clearfix" role="banner"><div class="wrapper">
                <h1 class="logo">
                	<a href="#" id="logo">6th Community Pharmacy Agreement</a>
                </h1>
                <a href="#" id="menuToggle">Menu</a>
                <nav>
                    <ul>
                        <li><a href="#">About 6CPA</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Registration &amp; Claiming Portal</a></li>
                    </ul>
                </nav>
            </div></div><!--banner-->

            
            <div class="initiatives" id="navigation">

                <div class="navArea">
                    <nav class="wrapper">
                        <a href="#" class="fab">Portal Access</a>
                     
                        <ul class="clearfix">
                            <li><a href="#" class="map" aria-controls="flyout-map">Medication Adherence Programmes</a></li>
                            <li><a href="#" class="mmp" aria-controls="flyout-mmp">Medication Management Programmes</a></li>
                            <li><a href="#" class="ptp" aria-controls="flyout-ptp">Pharmacy Trial Programme</a></li>
                            <li><a href="#" class="atsi" aria-controls="flyout-atsi">Aboriginal &amp;&nbsp;Torres Strait Islander Specific Programmes</a></li>
                            <li><a href="#" class="rsp" aria-controls="flyout-rsp">Rural Support Programmes</a></li>
                            <li><a href="#" class="ehealth" aria-controls="flyout-ehealth">eHealth Programmes</a></li>
                            <li><a href="#" class="resources" aria-controls="flyout-resources">Resources</a></li>
                        </ul>
                    </nav>
                </div><!--wrapper-->
    
                <div class="navBG">
                	<div class="rel">
                        <div class="bg"></div>
                        <div class="wrapper">
                            <img src="<?php echo Assets\asset_path('img/banner_01.jpg'); ?>" alt="" title="" />
                        </div><!--wrapper-->
                    </div>
                </div><!--navBG-->

            </div><!--initiatives-->
            
        </header>


<!-- ============== FLYOUTS ============== -->
 
        <div aria-hidden="true" id="flyout-map" class="flyOut map">
        <!-- Medication Adherence Programmes -->
        	<div class="wrapper">
                <div class="spacer clearfix">
                
                    <div class="promo">
                        <div class="padding">
                            <h2>Improve medication compliance</h2>
                            <p>Medication Adherence Programmes improve medication compliance through the provision of community pharmacy services</p>
                            <p class="buttonBox"><a href="#" class="button">More Information</a></p>
                        </div>
                    </div><!--promo-->
                    
                    <div class="subNav">
                        <ul role="navigation" class="padding">
                            <li><a href="#">Dose Administration Aids (DAA)</a></li>
                            <li><a href="#">Staged Supply</a></li>
                        </ul>
                    </div><!--subNav-->
                    
					<a href="#" class="navButton" title="close" aria-controls="flyout-map">close</a>
                </div><!--spacer-->
            </div><!--wrapper-->
        </div>
        
<!--flyOut-->

        <div aria-hidden="true" id="flyout-mmp" class="flyOut mmp">
        <!--Medication Management Programmes-->
            <div class="wrapper">
                <div class="spacer clearfix">
                    
                    <div class="promo">
                        <div class="padding">
                            <h2>Support quality use of medicine services</h2>
                            <p>Medication Management Programmes support quality use of medicine services that are designed to reduce adverse medicine events and associated hospital admissions or medical presentations</p>
                            <p class="buttonBox"><a href="#" class="button">More Information</a></p>
                        </div>
                    </div><!--promo-->
                
                    <div class="subNav">
                        <ul role="navigation" class="padding">
                            <li><a href="#">Clinical Interventions</a></li>
                            <li><a href="#">MedsChecks &amp; Diabetes MedsCheck</a></li>
                            <li><a href="#">Home Medicines Reviews</a></li>
                            <li><a href="#">Residential Medication Management Review</a></li>
                            <li><a href="#">Quality Use of Medicines</a></li>
                        </ul>
                    </div><!--subNav-->
                    
                    <a href="#" class="navButton" title="close" aria-controls="flyout-mmp">close</a>
            	</div><!--spacer-->
            </div><!--wrapper-->
        </div>
        
<!--flyOut-->

        <div aria-hidden="true" id="flyout-ptp" class="flyOut ptp">
        <!-- Pharmacy Trial Programme  -->
        	<div class="wrapper">
                <div class="spacer clearfix">
                    
                    <div class="promo">
                        <div class="padding">
                            <h2>Extend the role of pharmacists in the delivery of health services</h2>
                            <p>The Pharmacy Trial Programme will be established by the Commonwealth to trial new and expanded community pharmacy programmes which seek to improve clinical outcomes for consumers and extend the role of pharmacists in the delivery of health services through community pharmacy</p>
                            <p class="buttonBox"><a href="#" class="button">More Information</a></p>
                        </div>
                    </div><!--promo-->
            
                    <div class="subNav">
                    	<p style="width:80%; color:#829619; font-size: 1.3em; text-align:center; margin-right:0">Programme information will be provided as it becomes available</p>
                    	<!--
                        <ul role="navigation" class="padding">
                            <li><a href="#">link title</a></li>
                        </ul>
                        -->
	                	<a href="#" class="navButton" title="close" aria-controls="flyout-ptp">close</a>
                    </div><!--subNav-->
                </div><!--spacer-->
            </div><!--wrapper-->
        </div>
        
<!--flyOut-->

        <div aria-hidden="true" id="flyout-rsp" class="flyOut rsp">
        <!-- Rural Support Programmes -->
        	<div class="wrapper">
                <div class="spacer clearfix">

                    <div class="promo">
                        <div class="padding">
                            <h2>Improve access for people living in rural and remote regions</h2>
                            <p>Rural Support Programmes support targeted programmes and services to improve access to PBS medicines and services for people living in rural and remote regions of Australia</p>
                            <p class="buttonBox"><a href="#" class="button">More Information</a></p>
                        </div>
                    </div><!--promo-->
            
                    <div class="subNav">
                        <ul role="navigation" class="padding">
                            <li><a href="#">Continuing Professional Education</a></li>
                            <li><a href="#">Intern Incentive Allowance for Rural Pharmacies</a></li>
                            <li><a href="#">Rural Intern Training Allowance</a></li>
                            <li><a href="#">Emergency Locum Service</a></li>
                            <li><a href="#">Rural Pharmacy Scholarship Scheme</a></li>
                            <li><a href="#">Rural Pharmacy Student Placement Allowance</a></li>
                            <li><a href="#">Rural Pharmacy Liaison Officer Programme</a></li>
                            <li><a href="#">Rural Pharmacy Maintenance Allowance</a></li>
                        </ul>
                        
	                	<a href="#" class="navButton" title="close" aria-controls="flyout-rsp">close</a>
                    </div><!--subNav-->
                </div><!--spacer-->
            </div><!--wrapper-->
        </div>
        
<!--flyOut-->

        <div aria-hidden="true" id="flyout-atsi" class="flyOut atsi">
        <!-- Aboriginal & Torres Strait Islander Specific Programmes -->
        	<div class="wrapper">
                <div class="spacer clearfix">
                    
                    <div class="promo">
                        <div class="padding">
                            <h2>Improve quality use of medicines and culturally-appropriate services</h2>
                            <p>Aboriginal &amp; Torres Strait Islander Specific Programmes support targeted programmes and services which improve quality use of medicines and culturally-appropriate services for Aboriginal and Torres Strait Islander consumers</p>
                            <p class="buttonBox"><a href="#" class="button">More Information</a></p>
                        </div>
                    </div><!--promo-->
            
                    <div class="subNav">
                        <ul role="navigation" class="padding">
                            <li><a href="#">Aboriginal &amp; Torres Strait Islander Pharmacy Scholarship Scheme</a></li>
                            <li><a href="#">Aboriginal &amp; Torres Strait Islander Pharmacy Assistant Traineeship Scheme</a></li>
                            <li><a href="#">QUMAX – Quality Use of Medicines Maximised for Aboriginal &amp; Torres Strait Islander People</a></li>
                            <li><a href="#">S100 Pharmacy Support Allowance</a></li>
                        </ul>
                    </div><!--subNav-->
                	<a href="#" class="navButton" title="close" aria-controls="flyout-atsi">close</a>
                </div><!--spacer-->
            </div><!--wrapper-->
        </div>
        
<!--flyOut-->

        <div aria-hidden="true" id="flyout-ehealth" class="flyOut ehealth">
        <!-- eHealth Programmes -->
        	<div class="wrapper">
                <div class="spacer clearfix">
                    
                    <div class="promo">
                        <div class="padding">
                            <h2>Sharing of information as part of a personally-controlled electronic health record</h2>
                            <p>EHealth Programmes support initiatives designed to improve outcomes through sharing of information as part of a personally-controlled electronic health record</p>
                            <p class="buttonBox"><a href="#" class="button">More Information</a></p>
                        </div>
                    </div><!--promo-->
            
                    <div class="subNav">
                        <ul role="navigation" class="padding">
                            <li><a href="#">Electronic Prescription Fee</a></li>
                        </ul>
                    </div><!--subNav-->
                	<a href="#" class="navButton" title="close" aria-controls="flyout-ehealth">close</a>
                </div><!--spacer-->
            </div><!--wrapper-->
        </div>
        
<!--flyOut-->

        <div aria-hidden="true" id="flyout-resources" class="flyOut resources">
        <!-- Resources -->
        	<div class="wrapper">
                <div class="spacer clearfix">

                    <div class="promo">
                        <div class="padding">
                            <h2>Programme Resources</h2>
                            <p>6CPA Programme Resources and useful information</p>
                            <p class="buttonBox"><a href="#" class="button">More Information</a></p>
                        </div>
                    </div><!--promo-->
            
                    <div class="subNav">
                        <ul role="navigation" class="padding">
                            <li><a href="#">Programme Rules</a></li>
                            <li><a href="#">Frequently Asked Questions</a></li>
                            <li><a href="#">User Guides</a></li>
                            <li><a href="#">Claim Templates</a></li>
                            <li><a href="#">Forms</a></li>
                            <li><a href="#">Factsheets</a></li>
                            <li><a href="#">Promotional Resources</a></li>
                            <li><a href="#">Previous Research and Development Projects</a></li>
                            <li><a href="#">Community Pharmacy Service Charter</a></li>
                            <li><a href="#">Useful Contacts</a></li>
                        </ul>
                    </div><!--subNav-->
                	<a href="#" class="navButton" title="close" aria-controls="flyout-resources">close</a>
                </div><!--spacer-->
            </div><!--wrapper-->
        </div>
        
<!--flyOut-->

<!-- ============== /FLYOUTS ============== -->