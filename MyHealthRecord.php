<?php
session_start();
if (!isset($_SESSION ['email']))
header("Location: Home.php");

require_once 'DATABASE-CONFIG.php';
$link = mysqli_connect('localhost', 'root', '', 'health-record');
if (mysqli_connect_errno())
die("Fail to connect to DB server: " . mysqli_connect_error());

$query = "SELECT * FROM user WHERE email='" . $_SESSION ['email'] . "'";
$res = mysqli_query($link, $query);
while ($row = mysqli_fetch_array($res)) {
$id = $row['id'];
$state = $row['state'];
}

$query1 = "SELECT * FROM brief_desc WHERE user_id='" . $id . "'";
$res1 = mysqli_query($link, $query1);
while ($row1 = mysqli_fetch_array($res1)) {
$weight = $row1 ['weight'];
$height = $row1 ['height'];
$bloodType = $row1 ['blood_type'];
}
?>

<html lang="ar">
    <head>
        <meta charset="utf-8">
        <title>ملفي الطبي</title>
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
        
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/et-line-font.css">
        <link rel="stylesheet" href="css/nivo-lightbox.css">
        <link rel="stylesheet" href="css/nivo_themes/default/default.css">
        <link rel="stylesheet" href="css/style.css">
         <link rel="stylesheet" href="css/style.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
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
        <section>
            <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>
                    <a href="Home.php" class="navbar-brand">
                        <img src="images/logo.png" ></a>

                </div>

                <ul class="nav navbar-nav navbar-right">
                    <!--	<li><a href="#portfolio" class="smoothScroll">PORTFOLIO</a></li>
                            <li><a href="#pricing" class="smoothScroll">PRICING</a></li>
                    -->
                    <li><a style="direction: ltl;" href="signout.php">تسجيل الخروج  </a></li>
                    <li><a  >أهلا <?php echo$_SESSION ['name'] ?></a></li>
</div>
      </div>
                </ul>
                </nav>
            </div>
        </section>

        <!-- home section -->

        <div class="container" style="margin-top:300px">
             <div class="row">
              <div class="col-md-6 col-md-offset-3">

                <div class="progress">
                    <?php
                    if ($state == 1)
                    {
                    ?>
                    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%;">
                                                تم إكمال     20%  

                    </div>
                

                <?php
                } else if ($state == 2)
                {
                ?>
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%;">
                                            تم إكمال     40%  

                </div>
            </div>
            <?php
            } else if ($state == 3) {
            ?>
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;">
                                            تم إكمال     60%  

                </div>
             <?php
            } else if ($state == 4) {
            ?>
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;">
                                           تم إكمال     80%  

                </div>

            <?php
            }
            ?>
                </div>
                  </div>
            <?php
                    if ($state != 5)
                    {
                    ?>
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <a type="button" class="btn btn-default btn-lg btn-block" href="enterInfo.php">  
                    أكمل معلوماتك من هنا
                    <span class="glyphicon glyphicon-pencil" ></span>
              </a>
            </div>
                </div>
             <?php
                    
                    }
                    
                    ?>
            <section>
            <h4>معلومات بسيطة</h4>
            <div style="background-color: gray; border: 1px  gray; height: 1px; margin: 10px 0; width: 320px"> </div>




<!--
            <div class="row"style="margin-top:20px">
                <div class="col-md-4">
                    الوزن:
                </div>
                <div class="col-md-1">
                     <?php //echo $weight ?>
                </div>
                 <div class="col-md-1">
                    كيلو جرام
                </div>
                 </div>
                 -->
                
                
                
                
                <table> 
                    <tr>
                        <td>
                            <label for="weight">الوزن:</label>


                        </td>
                        <td > <div style="text-align:center" >

                                <?php echo $weight ?> 
                            </div>
                        </td>
                        <td>

                            كيلو جرام

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="height">الطول:</label>
                        </td>
                        <td><div style="text-align:center" >
                                <?php echo $height ?>
                            </div>
                        </td>
                        <td>
                            سانتي ميتير
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <label style="margin-top:8px;">فصيلة الدم:</label>

                        </td>
                        <td>
                            <div  style="margin-right:50px;margin-top:8px;">
                                <?php echo $bloodType ?>

                            </div>
                        </td>


                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td> 
                    </tr>

                </table>


            



       
    
</section>
            <?php 
                    if ($state == 2){
                        $query2 = "SELECT * FROM more_det WHERE user_id='" . $id . "'";
$res2 = mysqli_query($link, $query2);
while ($row2 = mysqli_fetch_array($res2)) {
$nationality = $row2 ['nationality'];
$sex = $row2 ['sex'];
$date_of_birth = $row2 ['date_of_birth'];
$mobile_phone = $row2 ['mobile_phone'];
}
            
            ?>
<section style="margin-top:40px">
            <h4>معلومات شخصية</h4>
            <div style="background-color: gray; border: 1px  gray; height: 1px; margin: 10px 0; width: 320px"> </div>




<!--
            <div class="row"style="margin-top:20px">
                <div class="col-md-4">
                    الوزن:
                </div>
                <div class="col-md-1">
                     <?php //echo $weight ?>
                </div>
                 <div class="col-md-1">
                    كيلو جرام
                </div>
                 </div>
                 -->
                
                
                
                
                <table> 
                    <tr>
                        <td>
                            <label for="weight">الجنسيه:</label>


                        </td>
                        <td > <div style="text-align:center" >

                                <?php echo $nationality ?> 
                            </div>
                        </td>
                       
                    </tr>
                    <tr>
                        <td>
                            <label for="height">الجنس :</label>
                        </td>
                        <td><div style="text-align:center" >
                                <?php if ($sex=="male"){
                                    echo "ذكر";
                                } else echo "أنثى";
                                    ?>
                            </div>
                        </td>
                        

                    </tr>

                    <tr>
                        <td>
                            <label style="margin-top:8px;">يوم الميلاد:</label>

                        </td>
                        <td>
                            <div  style="margin-right:50px;margin-top:8px;">
                                <?php echo $date_of_birth ?>

                            </div>
                        </td>


                    </tr>

                   <tr>
                        <td>
                            <label style="margin-top:8px;">رقم الجوال:</label>

                        </td>
                        <td>
                            <div  style="margin-right:50px;margin-top:8px;">
                                <?php echo $mobile_phone ?>

                            </div>
                        </td>


                    </tr>
                </table>


            



       
    
</section>
<?php
                    }
?>
            </div>
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