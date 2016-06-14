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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/et-line-font.css">
        <link rel="stylesheet" href="css/nivo-lightbox.css">
        <link rel="stylesheet" href="css/nivo_themes/default/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
        <link rel="stylesheet" href="css/mdb.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

        <script>
            $(document).ready(function() {
    $('.mdb-select').material_select();
  });
             $('.mdb-select').material_select('destroy');
            </script>

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
    </div>
</section>

<!-- home section -->
<div class="container" style="margin-top: 300px">
    <div class="row">
        <?php
        if ($state == 0) {
            ?>
            <div class="col-md-8 col-md-offset-4" >
                <div class="progress " style="margin-top: 20px">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
                        <span class="sr-only">1% Complete (success)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-4" >
                <div class="progress " >
                    <div class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                        2%
                    </div>
                </div>
            </div>
        </div>
        <h1>معلومات بسيطة</h1>
        <div style="background-color: gray; border: 1px  gray; height: 1px; margin: 10px 0; width: 320px"> </div>



        <form class="form-horizontal" role="form" action="addStuff.php?id=<?php echo$id ?>" method="POST">

            <div class="form-group" style="margin-top:20px">
                <table style=""> 
                    <tr>
                        <td>
                            <label for="weight">الوزن:</label>


                        </td>
                        <td > <div class="col-sm-5">

                                <input type="number" class="form-control" id="weight" name="weight" placeholder="الوزن" required>
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
                        <td><div class="col-sm-5" >
                                <input style="" type="number" class="form-control" id="height" name="height" placeholder="الطول" required>
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
                            <div class="btn-group" data-toggle="buttons" style="margin-right:50px;margin-top:8px;">
                                <label class="btn btn-default">
                                    <input type="radio" name="bloodType" id="option1" autocomplete="off" value="A+"> +A
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="bloodType" id="option2" autocomplete="off" value="A+"> +B
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="bloodType" id="option3" autocomplete="off" value="AB+"> +AB
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="bloodType" id="option3" autocomplete="off" value="0+"> +O
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="bloodType" id="option3" autocomplete="off" value="A-"> -A
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="bloodType" id="option3" autocomplete="off" value="B-"> -B
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="bloodType" id="option3" autocomplete="off" value="AB-"> -AB
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="bloodType" id="option3" autocomplete="off" value="O-"> -O
                                </label>

                            </div>
                        </td>


                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td> 
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="form-group" >
                            <div class="col-sm-offset-2 col-sm-10" >
                                <button type="submit" class="btn-lg btn-default">إدخال</button>
                            </div>
                        </div>
                    </td>
                    </tr>
                </table>


            </div>



        </form>
    </div>

    <?php
} else if ($state == 1) {
    ?>


    <!-- More Deatials Section two where state =1 -->



    <h3>معلومات بسيطة &#x2714;</h3>
    <div class="col-md-8 col-md-offset-4" >
        <div class=" progress " style="margin-top: 20px">
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">1% Complete (success)</span>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-md-offset-4" >
        <div class="progress" >
            <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                تم إكمال     20%  
            </div>
        </div>
    </div>
    </div>

    <h1> معلومات شخصية </h1>
    <div style="background-color: gray; border: 1px  gray; height: 1px; margin: 10px 0; width: 350px"> </div>



    <form class="form-horizontal" role="form" action="addStuff.php?id=<?php echo$id ?>" method="POST">

        <div class="form-group" style="margin-top:20px">
            <table style=""> 
                <tr>
                    <td>
                        <label for="nationality">الجنسيه:</label>


                    </td>
                    <td > 

                        <select style="margin-right:14px"class="form-control" name="nationality">
                            <option value="">أختر جنسيتك</option>
                            <option value="afghan">Afghan</option>
                            <option value="albanian">Albanian</option>
                            <option value="algerian">Algerian</option>
                            <option value="american">American</option>
                            <option value="andorran">Andorran</option>
                            <option value="angolan">Angolan</option>
                            <option value="antiguans">Antiguans</option>
                            <option value="argentinean">Argentinean</option>
                            <option value="armenian">Armenian</option>
                            <option value="australian">Australian</option>
                            <option value="austrian">Austrian</option>
                            <option value="azerbaijani">Azerbaijani</option>
                            <option value="bahamian">Bahamian</option>
                            <option value="bahraini">Bahraini</option>
                            <option value="bangladeshi">Bangladeshi</option>
                            <option value="barbadian">Barbadian</option>
                            <option value="barbudans">Barbudans</option>
                            <option value="batswana">Batswana</option>
                            <option value="belarusian">Belarusian</option>
                            <option value="belgian">Belgian</option>
                            <option value="belizean">Belizean</option>
                            <option value="beninese">Beninese</option>
                            <option value="bhutanese">Bhutanese</option>
                            <option value="bolivian">Bolivian</option>
                            <option value="bosnian">Bosnian</option>
                            <option value="brazilian">Brazilian</option>
                            <option value="british">British</option>
                            <option value="bruneian">Bruneian</option>
                            <option value="bulgarian">Bulgarian</option>
                            <option value="burkinabe">Burkinabe</option>
                            <option value="burmese">Burmese</option>
                            <option value="burundian">Burundian</option>
                            <option value="cambodian">Cambodian</option>
                            <option value="cameroonian">Cameroonian</option>
                            <option value="canadian">Canadian</option>
                            <option value="cape verdean">Cape Verdean</option>
                            <option value="central african">Central African</option>
                            <option value="chadian">Chadian</option>
                            <option value="chilean">Chilean</option>
                            <option value="chinese">Chinese</option>
                            <option value="colombian">Colombian</option>
                            <option value="comoran">Comoran</option>
                            <option value="congolese">Congolese</option>
                            <option value="costa rican">Costa Rican</option>
                            <option value="croatian">Croatian</option>
                            <option value="cuban">Cuban</option>
                            <option value="cypriot">Cypriot</option>
                            <option value="czech">Czech</option>
                            <option value="danish">Danish</option>
                            <option value="djibouti">Djibouti</option>
                            <option value="dominican">Dominican</option>
                            <option value="dutch">Dutch</option>
                            <option value="east timorese">East Timorese</option>
                            <option value="ecuadorean">Ecuadorean</option>
                            <option value="egyptian">Egyptian</option>
                            <option value="emirian">Emirian</option>
                            <option value="equatorial guinean">Equatorial Guinean</option>
                            <option value="eritrean">Eritrean</option>
                            <option value="estonian">Estonian</option>
                            <option value="ethiopian">Ethiopian</option>
                            <option value="fijian">Fijian</option>
                            <option value="filipino">Filipino</option>
                            <option value="finnish">Finnish</option>
                            <option value="french">French</option>
                            <option value="gabonese">Gabonese</option>
                            <option value="gambian">Gambian</option>
                            <option value="georgian">Georgian</option>
                            <option value="german">German</option>
                            <option value="ghanaian">Ghanaian</option>
                            <option value="greek">Greek</option>
                            <option value="grenadian">Grenadian</option>
                            <option value="guatemalan">Guatemalan</option>
                            <option value="guinea-bissauan">Guinea-Bissauan</option>
                            <option value="guinean">Guinean</option>
                            <option value="guyanese">Guyanese</option>
                            <option value="haitian">Haitian</option>
                            <option value="herzegovinian">Herzegovinian</option>
                            <option value="honduran">Honduran</option>
                            <option value="hungarian">Hungarian</option>
                            <option value="icelander">Icelander</option>
                            <option value="indian">Indian</option>
                            <option value="indonesian">Indonesian</option>
                            <option value="iranian">Iranian</option>
                            <option value="iraqi">Iraqi</option>
                            <option value="irish">Irish</option>
                            <option value="israeli">Israeli</option>
                            <option value="italian">Italian</option>
                            <option value="ivorian">Ivorian</option>
                            <option value="jamaican">Jamaican</option>
                            <option value="japanese">Japanese</option>
                            <option value="jordanian">Jordanian</option>
                            <option value="kazakhstani">Kazakhstani</option>
                            <option value="kenyan">Kenyan</option>
                            <option value="kittian and nevisian">Kittian and Nevisian</option>
                            <option value="kuwaiti">Kuwaiti</option>
                            <option value="kyrgyz">Kyrgyz</option>
                            <option value="laotian">Laotian</option>
                            <option value="latvian">Latvian</option>
                            <option value="lebanese">Lebanese</option>
                            <option value="liberian">Liberian</option>
                            <option value="libyan">Libyan</option>
                            <option value="liechtensteiner">Liechtensteiner</option>
                            <option value="lithuanian">Lithuanian</option>
                            <option value="luxembourger">Luxembourger</option>
                            <option value="macedonian">Macedonian</option>
                            <option value="malagasy">Malagasy</option>
                            <option value="malawian">Malawian</option>
                            <option value="malaysian">Malaysian</option>
                            <option value="maldivan">Maldivan</option>
                            <option value="malian">Malian</option>
                            <option value="maltese">Maltese</option>
                            <option value="marshallese">Marshallese</option>
                            <option value="mauritanian">Mauritanian</option>
                            <option value="mauritian">Mauritian</option>
                            <option value="mexican">Mexican</option>
                            <option value="micronesian">Micronesian</option>
                            <option value="moldovan">Moldovan</option>
                            <option value="monacan">Monacan</option>
                            <option value="mongolian">Mongolian</option>
                            <option value="moroccan">Moroccan</option>
                            <option value="mosotho">Mosotho</option>
                            <option value="motswana">Motswana</option>
                            <option value="mozambican">Mozambican</option>
                            <option value="namibian">Namibian</option>
                            <option value="nauruan">Nauruan</option>
                            <option value="nepalese">Nepalese</option>
                            <option value="new zealander">New Zealander</option>
                            <option value="ni-vanuatu">Ni-Vanuatu</option>
                            <option value="nicaraguan">Nicaraguan</option>
                            <option value="nigerien">Nigerien</option>
                            <option value="north korean">North Korean</option>
                            <option value="northern irish">Northern Irish</option>
                            <option value="norwegian">Norwegian</option>
                            <option value="omani">Omani</option>
                            <option value="pakistani">Pakistani</option>
                            <option value="palauan">Palauan</option>
                            <option value="panamanian">Panamanian</option>
                            <option value="papua new guinean">Papua New Guinean</option>
                            <option value="paraguayan">Paraguayan</option>
                            <option value="peruvian">Peruvian</option>
                            <option value="polish">Polish</option>
                            <option value="portuguese">Portuguese</option>
                            <option value="qatari">Qatari</option>
                            <option value="romanian">Romanian</option>
                            <option value="russian">Russian</option>
                            <option value="rwandan">Rwandan</option>
                            <option value="saint lucian">Saint Lucian</option>
                            <option value="salvadoran">Salvadoran</option>
                            <option value="samoan">Samoan</option>
                            <option value="san marinese">San Marinese</option>
                            <option value="sao tomean">Sao Tomean</option>
                            <option value="saudi">Saudi</option>
                            <option value="scottish">Scottish</option>
                            <option value="senegalese">Senegalese</option>
                            <option value="serbian">Serbian</option>
                            <option value="seychellois">Seychellois</option>
                            <option value="sierra leonean">Sierra Leonean</option>
                            <option value="singaporean">Singaporean</option>
                            <option value="slovakian">Slovakian</option>
                            <option value="slovenian">Slovenian</option>
                            <option value="solomon islander">Solomon Islander</option>
                            <option value="somali">Somali</option>
                            <option value="south african">South African</option>
                            <option value="south korean">South Korean</option>
                            <option value="spanish">Spanish</option>
                            <option value="sri lankan">Sri Lankan</option>
                            <option value="sudanese">Sudanese</option>
                            <option value="surinamer">Surinamer</option>
                            <option value="swazi">Swazi</option>
                            <option value="swedish">Swedish</option>
                            <option value="swiss">Swiss</option>
                            <option value="syrian">Syrian</option>
                            <option value="taiwanese">Taiwanese</option>
                            <option value="tajik">Tajik</option>
                            <option value="tanzanian">Tanzanian</option>
                            <option value="thai">Thai</option>
                            <option value="togolese">Togolese</option>
                            <option value="tongan">Tongan</option>
                            <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                            <option value="tunisian">Tunisian</option>
                            <option value="turkish">Turkish</option>
                            <option value="tuvaluan">Tuvaluan</option>
                            <option value="ugandan">Ugandan</option>
                            <option value="ukrainian">Ukrainian</option>
                            <option value="uruguayan">Uruguayan</option>
                            <option value="uzbekistani">Uzbekistani</option>
                            <option value="venezuelan">Venezuelan</option>
                            <option value="vietnamese">Vietnamese</option>
                            <option value="welsh">Welsh</option>
                            <option value="yemenite">Yemenite</option>
                            <option value="zambian">Zambian</option>
                            <option value="zimbabwean">Zimbabwean</option>
                        </select>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <label style="margin-top:4px"for="height">الجنس:</label>
                    </td>
                    <td>
                        <div class="btn-group" data-toggle="buttons" style="margin-right:14px;margin-top:8px;">
                            <label class="btn btn-default">
                                <input type="radio" name="sex" id="option2" autocomplete="off" value="female"> أنثى
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" name="sex" id="option1" autocomplete="off" value="male"> ذكر
                            </label>



                        </div>
                    </td>


                </tr>

                <tr>
                    <td>
                        <label style="margin-top:8px;">يوم الولادة:</label>

                    </td>
                    <td>
                        <div class="col-sm-12" >
                            <input type="date" class="form-control" id="height" name="dateofBirth"  required>
                        </div>
                    </td>


                </tr>

                <tr>
                    <td>   <label style="margin-top:8px;">رقم الجوال:</label> </td>
                    <td><div class="col-sm-12" >
                            <input type="text" class="form-control" id="height" name="mobile" placeholder="رقم الجوال" required>
                        </div></td>
                    <td></td> 
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <div class="form-group" >
                        <div class="col-sm-offset-2 col-sm-10" >
                            <button type="submit" class="btn-lg btn-default">إدخال</button>
                        </div>
                    </div>
                </td>
                </tr>
            </table>


        </div>



    </form>
    </div>


    <?php
} else if ($state == 2) {
    ?>
    <!-- Even moooooooooooooore Deatials Section three where state =2 -->




    <h3>معلومات بسيطة &#x2714;</h3>
    <h3>معلومات شخصية &#x2714;</h3>
    <div class="col-md-8 col-md-offset-4" >
        <div class="progress" style="margin-top: 20px">
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                <span class="sr-only">1% Complete (success)</span>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-8 col-md-offset-4" >
        <div class="progress" >
            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                تم إكمال     40%  
            </div>
        </div>
    </div>


    <h1> معلومات دقيقة </h1>
    <div style="background-color: gray; border: 1px  gray; height: 1px; margin: 10px 0; width: 350px"> </div>



    <form class="form-horizontal" role="form" action="addStuff.php?id=<?php echo$id ?>" method="POST">

        <div class="form-group" style="margin-top:20px">
            <table style=""> 
                <tr>
                    <td>
                        <label for="nationality">الجنسية:</label>


                    </td>
                    <td > 
                        <div>
                        <select class="mdb-select" name="nationality">
                            <option value="" disabled selected>أختر جنسيتك</option>
                            <option value="afghan">Afghan</option>
                            <option value="albanian">Albanian</option>
                            <option value="algerian">Algerian</option>
                            <option value="american">American</option>
                            <option value="andorran">Andorran</option>
                            <option value="angolan">Angolan</option>
                            <option value="antiguans">Antiguans</option>
                            <option value="argentinean">Argentinean</option>
                            <option value="armenian">Armenian</option>
                            <option value="australian">Australian</option>
                            <option value="austrian">Austrian</option>
                            <option value="azerbaijani">Azerbaijani</option>
                            <option value="bahamian">Bahamian</option>
                            <option value="bahraini">Bahraini</option>
                            <option value="bangladeshi">Bangladeshi</option>
                            <option value="barbadian">Barbadian</option>
                            <option value="barbudans">Barbudans</option>
                            <option value="batswana">Batswana</option>
                            <option value="belarusian">Belarusian</option>
                            <option value="belgian">Belgian</option>
                            <option value="belizean">Belizean</option>
                            <option value="beninese">Beninese</option>
                            <option value="bhutanese">Bhutanese</option>
                            <option value="bolivian">Bolivian</option>
                            <option value="bosnian">Bosnian</option>
                            <option value="brazilian">Brazilian</option>
                            <option value="british">British</option>
                            <option value="bruneian">Bruneian</option>
                            <option value="bulgarian">Bulgarian</option>
                            <option value="burkinabe">Burkinabe</option>
                            <option value="burmese">Burmese</option>
                            <option value="burundian">Burundian</option>
                            <option value="cambodian">Cambodian</option>
                            <option value="cameroonian">Cameroonian</option>
                            <option value="canadian">Canadian</option>
                            <option value="cape verdean">Cape Verdean</option>
                            <option value="central african">Central African</option>
                            <option value="chadian">Chadian</option>
                            <option value="chilean">Chilean</option>
                            <option value="chinese">Chinese</option>
                            <option value="colombian">Colombian</option>
                            <option value="comoran">Comoran</option>
                            <option value="congolese">Congolese</option>
                            <option value="costa rican">Costa Rican</option>
                            <option value="croatian">Croatian</option>
                            <option value="cuban">Cuban</option>
                            <option value="cypriot">Cypriot</option>
                            <option value="czech">Czech</option>
                            <option value="danish">Danish</option>
                            <option value="djibouti">Djibouti</option>
                            <option value="dominican">Dominican</option>
                            <option value="dutch">Dutch</option>
                            <option value="east timorese">East Timorese</option>
                            <option value="ecuadorean">Ecuadorean</option>
                            <option value="egyptian">Egyptian</option>
                            <option value="emirian">Emirian</option>
                            <option value="equatorial guinean">Equatorial Guinean</option>
                            <option value="eritrean">Eritrean</option>
                            <option value="estonian">Estonian</option>
                            <option value="ethiopian">Ethiopian</option>
                            <option value="fijian">Fijian</option>
                            <option value="filipino">Filipino</option>
                            <option value="finnish">Finnish</option>
                            <option value="french">French</option>
                            <option value="gabonese">Gabonese</option>
                            <option value="gambian">Gambian</option>
                            <option value="georgian">Georgian</option>
                            <option value="german">German</option>
                            <option value="ghanaian">Ghanaian</option>
                            <option value="greek">Greek</option>
                            <option value="grenadian">Grenadian</option>
                            <option value="guatemalan">Guatemalan</option>
                            <option value="guinea-bissauan">Guinea-Bissauan</option>
                            <option value="guinean">Guinean</option>
                            <option value="guyanese">Guyanese</option>
                            <option value="haitian">Haitian</option>
                            <option value="herzegovinian">Herzegovinian</option>
                            <option value="honduran">Honduran</option>
                            <option value="hungarian">Hungarian</option>
                            <option value="icelander">Icelander</option>
                            <option value="indian">Indian</option>
                            <option value="indonesian">Indonesian</option>
                            <option value="iranian">Iranian</option>
                            <option value="iraqi">Iraqi</option>
                            <option value="irish">Irish</option>
                            <option value="israeli">Israeli</option>
                            <option value="italian">Italian</option>
                            <option value="ivorian">Ivorian</option>
                            <option value="jamaican">Jamaican</option>
                            <option value="japanese">Japanese</option>
                            <option value="jordanian">Jordanian</option>
                            <option value="kazakhstani">Kazakhstani</option>
                            <option value="kenyan">Kenyan</option>
                            <option value="kittian and nevisian">Kittian and Nevisian</option>
                            <option value="kuwaiti">Kuwaiti</option>
                            <option value="kyrgyz">Kyrgyz</option>
                            <option value="laotian">Laotian</option>
                            <option value="latvian">Latvian</option>
                            <option value="lebanese">Lebanese</option>
                            <option value="liberian">Liberian</option>
                            <option value="libyan">Libyan</option>
                            <option value="liechtensteiner">Liechtensteiner</option>
                            <option value="lithuanian">Lithuanian</option>
                            <option value="luxembourger">Luxembourger</option>
                            <option value="macedonian">Macedonian</option>
                            <option value="malagasy">Malagasy</option>
                            <option value="malawian">Malawian</option>
                            <option value="malaysian">Malaysian</option>
                            <option value="maldivan">Maldivan</option>
                            <option value="malian">Malian</option>
                            <option value="maltese">Maltese</option>
                            <option value="marshallese">Marshallese</option>
                            <option value="mauritanian">Mauritanian</option>
                            <option value="mauritian">Mauritian</option>
                            <option value="mexican">Mexican</option>
                            <option value="micronesian">Micronesian</option>
                            <option value="moldovan">Moldovan</option>
                            <option value="monacan">Monacan</option>
                            <option value="mongolian">Mongolian</option>
                            <option value="moroccan">Moroccan</option>
                            <option value="mosotho">Mosotho</option>
                            <option value="motswana">Motswana</option>
                            <option value="mozambican">Mozambican</option>
                            <option value="namibian">Namibian</option>
                            <option value="nauruan">Nauruan</option>
                            <option value="nepalese">Nepalese</option>
                            <option value="new zealander">New Zealander</option>
                            <option value="ni-vanuatu">Ni-Vanuatu</option>
                            <option value="nicaraguan">Nicaraguan</option>
                            <option value="nigerien">Nigerien</option>
                            <option value="north korean">North Korean</option>
                            <option value="northern irish">Northern Irish</option>
                            <option value="norwegian">Norwegian</option>
                            <option value="omani">Omani</option>
                            <option value="pakistani">Pakistani</option>
                            <option value="palauan">Palauan</option>
                            <option value="panamanian">Panamanian</option>
                            <option value="papua new guinean">Papua New Guinean</option>
                            <option value="paraguayan">Paraguayan</option>
                            <option value="peruvian">Peruvian</option>
                            <option value="polish">Polish</option>
                            <option value="portuguese">Portuguese</option>
                            <option value="qatari">Qatari</option>
                            <option value="romanian">Romanian</option>
                            <option value="russian">Russian</option>
                            <option value="rwandan">Rwandan</option>
                            <option value="saint lucian">Saint Lucian</option>
                            <option value="salvadoran">Salvadoran</option>
                            <option value="samoan">Samoan</option>
                            <option value="san marinese">San Marinese</option>
                            <option value="sao tomean">Sao Tomean</option>
                            <option value="saudi">Saudi</option>
                            <option value="scottish">Scottish</option>
                            <option value="senegalese">Senegalese</option>
                            <option value="serbian">Serbian</option>
                            <option value="seychellois">Seychellois</option>
                            <option value="sierra leonean">Sierra Leonean</option>
                            <option value="singaporean">Singaporean</option>
                            <option value="slovakian">Slovakian</option>
                            <option value="slovenian">Slovenian</option>
                            <option value="solomon islander">Solomon Islander</option>
                            <option value="somali">Somali</option>
                            <option value="south african">South African</option>
                            <option value="south korean">South Korean</option>
                            <option value="spanish">Spanish</option>
                            <option value="sri lankan">Sri Lankan</option>
                            <option value="sudanese">Sudanese</option>
                            <option value="surinamer">Surinamer</option>
                            <option value="swazi">Swazi</option>
                            <option value="swedish">Swedish</option>
                            <option value="swiss">Swiss</option>
                            <option value="syrian">Syrian</option>
                            <option value="taiwanese">Taiwanese</option>
                            <option value="tajik">Tajik</option>
                            <option value="tanzanian">Tanzanian</option>
                            <option value="thai">Thai</option>
                            <option value="togolese">Togolese</option>
                            <option value="tongan">Tongan</option>
                            <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                            <option value="tunisian">Tunisian</option>
                            <option value="turkish">Turkish</option>
                            <option value="tuvaluan">Tuvaluan</option>
                            <option value="ugandan">Ugandan</option>
                            <option value="ukrainian">Ukrainian</option>
                            <option value="uruguayan">Uruguayan</option>
                            <option value="uzbekistani">Uzbekistani</option>
                            <option value="venezuelan">Venezuelan</option>
                            <option value="vietnamese">Vietnamese</option>
                            <option value="welsh">Welsh</option>
                            <option value="yemenite">Yemenite</option>
                            <option value="zambian">Zambian</option>
                            <option value="zimbabwean">Zimbabwean</option>
                        </select>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <label style="margin-top:4px"for="height">الجنس:</label>
                    </td>
                    <td>
                        <div class="btn-group" data-toggle="buttons" style="margin-right:14px;margin-top:8px;">
                            <label class="btn btn-default">
                                <input type="radio" name="sex" id="option2" autocomplete="off" value="female"> أنثى
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" name="sex" id="option1" autocomplete="off" value="male"> ذكر
                            </label>



                        </div>
                    </td>


                </tr>

                <tr>
                    <td>
                        <label style="margin-top:8px;">يوم الولادة:</label>

                    </td>
                    <td>
                        <div class="col-sm-12" >
                            <input type="date" class="form-control" id="height" name="dateofBirth"  required>
                        </div>
                    </td>


                </tr>

                <tr>
                    <td>   <label style="margin-top:8px;">رقم الجوال:</label> </td>
                    <td><div class="col-sm-12" >
                            <input type="text" class="form-control" id="height" name="mobile" placeholder="رقم الجوال" required>
                        </div></td>
                    <td></td> 
                </tr>
                <tr>
                    <td> <div class="md-form">
    <input type="text" id="form1" class="form-control">
    <label for="form1" dir="rtl">رقم الجوال: </label>
</div></td>

                </tr>
                <tr>
                    <td></td>
                    <td></td>

                    <td>
                        <div class="form-group" >
                            <div class="col-sm-offset-2 col-sm-10" >
                                <button type="submit" class="btn-lg btn-default">إدخال</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>


        </div>



    </form>
    </div>
    </div>




    <?php
}
?>
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
<script src="js/mdb.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/custom.js"></script>


</body>
</html>