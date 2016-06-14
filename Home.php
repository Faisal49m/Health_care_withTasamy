<?php

require_once 'DATABASE-CONFIG.php';
$link = mysqli_connect('localhost', 'root', '', 'health-record');
if (mysqli_connect_errno())
    die("Fail to connect to DB server: " . mysqli_connect_error());
?>
    
<html lang="ar">
<head>
	<meta charset="utf-8">
	<title>الملف الطبي</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
<!--

Template 2075 Digital Team

http://www.tooplate.com/view/2075-digital-team

-->
<style type="text/css">
  @import url(http://fonts.googleapis.com/css?family=Roboto);
                        @import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);
                        * { 
                         /*   font-family: 'Roboto', sans-serif; */
                            font-family: 'Droid Arabic Kufi' , sans-serif;
                        direction: rtl;

                        }
                        
                        ar{
                        direction: rtl;
                        }

                        color{
                        color:black;
						
                        }

</style>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-circle">
       <div class="sk-circle1 sk-circle"></div>
       <div class="sk-circle2 sk-circle"></div>
       <div class="sk-circle3 sk-circle"></div>
       <div class="sk-circle4 sk-circle"></div>
       <div class="sk-circle5 sk-circle"></div>
       <div class="sk-circle6 sk-circle"></div>
       <div class="sk-circle7 sk-circle"></div>
       <div class="sk-circle8 sk-circle"></div>
       <div class="sk-circle9 sk-circle"></div>
       <div class="sk-circle10 sk-circle"></div>
       <div class="sk-circle11 sk-circle"></div>
       <div class="sk-circle12 sk-circle"></div>
    </div>
</div>

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">
				<img src="images/logo.png" ></a>
				
			
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
			<!--	<li><a href="#portfolio" class="smoothScroll">PORTFOLIO</a></li>
				<li><a href="#pricing" class="smoothScroll">PRICING</a></li>
				-->
                                <li><a href="#login-modal" data-toggle="modal" id='myBtn'>تسجيل الدخول</a></li>
				<li><a href="#team" class="smoothScroll">إنضم معنا</a></li>
				<li><a href="#contact" class="smoothScroll">تواصل معنا</a></li>
				<li><a href="#about" class="smoothScroll">من نحن ؟ </a></li>
				<li><a href="#work" class="smoothScroll">لماذا نحن هنا ؟</a></li>
				<li><a href="#home" class="smoothScroll">البداية</a></li>
			</ul>
		</div>
	</div>
</section>

<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3 style="color:black" >يساندك ، يواسيك ، يذكرك</h3>
				<h1 style="color:black">الملف الطبي</h1>
				<hr>
				<a href="#work" class="smoothScroll btn btn-danger">لماذا نحن هنا ؟</a>
				<a href="#contact" class="smoothScroll btn btn-default">تواصل معنا</a>
			</div>
		</div>
	</div>		
</section>

<!-- work section -->
<section id="work">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<h1 class="heading bold">لماذا نحن هنا ؟</h1>
					<hr>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<i class="icon-cloud medium-icon"></i>
					<h3>لنبقى معك في كل وقت</h3>
					<hr>
					<p>نحن معك في كل مكان حللت فيه ، لتبقى مواعيدك كما خططت لها ، كما تريد!</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<i class="icon-mobile medium-icon"></i>
					<h3>متوافق مع كل الأجهزة</h3>
					<hr>
					<p>سعيدًا لتحقيق الراحة لك ، يتواف برنامجنا مع كل الإصادارت .. كما تريد ! </p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
				<i class="icon-laptop medium-icon"></i>
					<h3>وثوقية عالية</h3>
					<hr>
					<p>لنحقق لك الرحلة ، يشرف على الشروع كادر من الأطباء والتقنيين << أمحق</p>
			</div>
			
		</div>
	</div>
</section>

<!-- about section -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<h1 class="heading bold">من نحن ؟
					</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<img src="images/about-img.jpg" class="img-responsive" alt="about img">
			</div>
			<div class="col-md-6 col-sm-12">
				<h3 class="bold">مشروع "مساعدك الصحي"</h3>				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#design" aria-controls="design" role="tab" data-toggle="tab">نظرة عامة</a></li>
					<li><a href="#mobile" aria-controls="mobile" role="tab" data-toggle="tab">الطبيب</a></li>
					<li><a href="#social" aria-controls="social" role="tab" data-toggle="tab">التقني</a></li>
				</ul>
				<!-- tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="design">
						<p>سعيًا لتحقيق الكفاءة العالية للرعاية الصحية ، جاء مشروع المساعد الصحي ليسد الفوّه بين الطبيب والمريض لتكتمل الحلقة ، ونصل لأهدافنا المنشودة.</p>
					</div>
					<div role="tabpanel" class="tab-pane" id="mobile">
						<p>من منبع الحاجة يكتمل الإختراع .. من بين أزقة المستشفيات انطلقة هذه الفكرية لتكون الرافد للمريض والمساند للطبيب.</p>
					</div>
					<div role="tabpanel" class="tab-pane" id="social">
						<p>Pكرّس التقنيوين موهبتهم لغرس هذه البذرة ، لتكبر وبتروي بظلالها شموس الجهل . << قوية صح ؟</p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<section id="contact" ">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<h1 style="color:black;">إنظم معنا</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 contact-info">
                            <form id="registration-form2" role="form" action="register.php?id=<?php echo $_SESSION ['name']?>" method="post">
                                        <div class="form-group">
                                            <input type="name" class="form-control "  required="required" placeholder="الاسم" name="name" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control " required="required"  placeholder="البريد الإلكتروني" name="email" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" required="required" class="form-control" placeholder="كلمة المرور"  name="password" data-validetta="required,minLength[8],maxLength[19]" ></input>
                                        </div>
                                        <div class="form-group">
                                            <button  type="submit" class="btn btn-info btn-block btn-lg" >تسجيل</button>
                                        </div>
                                      
                                        <div></div>
										


                                    </form>
				
			
		</div>
	</div>
</section>
<!-- team section -->
<!-- 
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>03</strong>
					<h1 class="heading bold">إنظم معنا </h1>
					<hr>
				</div>
			</div>
			
			
			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/team1.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Cindy</h4>
							<h3>Senior Designer</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.3s">
				<div class="team-wrapper">
					<img src="images/team2.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Mary</h4>
							<h3>Core Developer</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
				<div class="team-wrapper">
					<img src="images/team3.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Linda</h4>
							<h3>Manager</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
				<div class="team-wrapper">
					<img src="images/team4.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Sandar</h4>
							<h3>Accountant</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>
						-->

<!-- portfolio section 
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>04</strong>
					<h1 class="heading bold">OUR PORTFOLIO</h1>
					<hr>
				</div>
		
				<div class="iso-section">
					<ul class="filter-wrapper clearfix">
                   		 <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                   		 <li><a href="#" class="opc-main-bg" data-filter=".html">HTML</a></li>
                   		 <li><a href="#" class="opc-main-bg" data-filter=".photoshop">Photoshop</a></li>
                    	 <li><a href="#" class="opc-main-bg" data-filter=".wordpress">Wordpress</a></li>
                    	 <li><a href="#" class="opc-main-bg" data-filter=".mobile">Mobile</a></li>
               		</ul>
               		<div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
               			<div class="iso-box-wrapper col4-iso-box">

               				 <div class="iso-box html wordpress mobile col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/portfolio-img1.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img1.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/portfolio-img2.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img2.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box html mobile col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/portfolio-img3.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img3.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/portfolio-img4.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img4.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box html photoshop col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/portfolio-img5.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img5.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box photoshop col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/portfolio-img6.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img6.jpg" alt="portfolio img"></a>
               				 </div>

               			</div>
               		</div>

				</div>
			</div>
		</div>
	</div>
</div>		

<!-- pricing section 
<section id="pricing">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<strong>05</strong>
					<h1 class="heading bold">OUR PRICING</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="plan plan-one wow bounceIn" data-wow-delay="0.3s">
					<div class="plan_title">
						<i class="icon-mobile medium-icon"></i>
						<h3>BASIC</h3>
						<h2>$150 <span>per year</span></h2>
					</div>
					<ul>
                    	<li>100 GB Cloud Storage</li>
						<li>5 Pro Websites</li>
						<li>10 Secured Emails</li>
                        <li>24-hour Support</li>
					</ul>
					<button class="btn btn-warning">Get it now</button>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="plan plan-two wow bounceIn" data-wow-delay="0.3s">
					<div class="plan_title">
						<i class="icon-desktop medium-icon"></i>
						<h3>BUSINESS</h3>
						<h2>$260 <span>per year</span></h2>
					</div>
					<ul>
						<li>200 GB Cloud Storage</li>
						<li>10 Pro Websites</li>
						<li>20 Secured Emails</li>
                        <li>30-Minute Support</li>
					</ul>
					<button class="btn btn-warning">Take this!</button>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="plan plan-three wow bounceIn" data-wow-delay="0.3s">
					<div class="plan_title">
						<i class="icon-cloud medium-icon"></i>
						<h3>PROFESSIONAL</h3>
						<h2>$380 <span>per year</span></h2>
					</div>
					<ul>
						<li>500 GB Cloud Storage</li>
						<li>20 Pro Websites</li>
						<li>40 Secured Emails</li>
                        <li>Live Support</li>
					</ul>
					<button class="btn btn-warning">Buy Now</button>
				</div>
			</div>
		</div>
	</div>		
</section>
-->

<!-- contact section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<color>
					<h1 class="heading bold">اتصل بنا</h1>
					</color>
					<hr>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 contact-info">
					<color>
				<h2 class="heading bold">مرحبًا بك ، نحن هنا</h2>
				<p>نحن سعيدون بك ، وبملاحظاتك :)</p>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> الإيميل</h3>
					<p>hello@company.com</p>
				</div>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> الجوال</h3>
					<p>0551700156 | 0555021221</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<form action="#" method="get" class="wow fadeInUp" data-wow-delay="0.6s">
					<div class="col-md-6 col-sm-6">
						<input type="email" class="form-control" placeholder="البريد الإلكتروني" name="email">
					</div>
					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" placeholder="الاسم" name="name">
					</div>
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control" placeholder="الرسالة" rows="7" name="message"></textarea>
					</div>
					<div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8">
						<input type="submit" class="form-control" value="إرسال الرسالة">
						</color>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>حقوق النشر تعود لنسق </p>
				<hr>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="0.9s"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
 <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" align="center">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                    <img height="300" width="300"class="img-circle" id="img_logo" src="images/logo-login.png">
                                      
                                </div>

                                <!-- Begin # DIV Form -->
                                <div id="div-forms">

                                    <!-- Begin # Login Form -->

                                    <form id="myForm" action="checklogintest.php" method="POST" >
                                        <div class="modal-body">

                                           
                                                        <div>
                                                            <div id="div-login-msg">

                                                                <span id="text-login-msg">الرجاء إدخال الأيميل وكلمة المرور.</span>
                                                            </div>
                                                            <input id="login_username" class="form-control" type="text" placeholder="إيميل" name="signinemail" required>
                                                                <input id="login_password" class="form-control" type="password" placeholder="كلمة المرور" name="signinpwd" required >
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <input style="margin-top:10px" type="checkbox"> 
                                                                        <p style="margin-right:20px">   تذكرني </p>
                                                                        <label id="xc" style="color:#555"> 
                                                                          
                                                                        </label>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <div id="ack" style="color:red;">

                                                                        </div>

                                                                    </div>
                                                                    <div>
                                                                        <button id="submit" type="submit" class="btn btn-primary btn-lg btn-block">تسجيل الدخول</button>
                                                                    </div>

                                                                    <div>
                                                                        <a id="login_lost_btn" href="forgotPass.php" type="button" class="btn btn-link">نسيت كلمة المرور؟</a>
                                                                    </div>
                                                                    </div>
                                                                    </form>
                                                                    </div>
                                                                    </div>
                                                                    </div>
                                                                    </div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>