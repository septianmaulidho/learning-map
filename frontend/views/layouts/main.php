<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="container">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <!-- blue line -->
            <div class="col-lg-12-top">

            </div>
            <!-- End of blue line -->
            <div class="navbar navbar-undermerabi">
                <div class="container">
                    <div class="col-lg-12">
                        <div class="phtext4m">
                            <a href="index.html"><i class="fa fa-heartbeat fa-3x"></i></a>
                        </div>
                        <div class="logotext">
                            HEALTHCARE <span class="meraba1">AGENCY</span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-lg-8 gverd">
                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                                <span class="sr-only">open navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!--<a class="navbar-brand" href="#"> Company name</a>-->
                        </div>
                        <div class="collapse navbar-collapse" id="responsive-menu">


                            <ul class="nav navbar-nav">
                                <li><a href="#home">HOME</a></li>
                                <li><a href="#about">ABOUT</a></li>
                                <li><a href="#ourteam">OUR TEAM</a></li>
                                <li><a href="#services">SERVICES</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.html">Blog Left</a></li>
                                        <li><a href="blog-right.html">Blog Right</a></li>

                                    </ul>
                                </li>
                                <li><a href="#products">GALLERY</a></li>
                                <li><a href="#contacts">CONTACT</a></li>

                            </ul>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>





        </div>
    </div>

    <div id="home">
    </div>
    <div id="about">
        <div class="container-fluid1"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 text-center">
                    <h2><span class="merabi">Welcome to</span> HEALTHCARE <span class="meraba">AGENCY</span></h2>

                    <p class="mecoo">Our medical specialists care about you & your family's health</p>
                </div>

            </div>

        </div>
    </div>
    <div class="container-fluid">

        <div id="parallax2" class="parallax">
            <div class="bg2 parallax-bg"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="parallax-content visible-lg visible-md hidden-sm hidden-xs">
                    <div class="parallax_txt1">need a doctor for check-up ?</div>
                    <div class="parallax_txt2">just make an appointment</div>


                </div>
            </div>
        </div>
    </div>

    <div id="ourteam"></div>
    <div class="container-fluid1"></div>
    <div class="container">
        <div class="row">

            <div class="col-lg-12 text-center">
                <h2><span class="merabi">The</span> Medical Specialists</h2>

                <p class="mecoo">Lorem ipsum dolor sit amet vitae facilisus non troppo pradae</p>
            </div>

            <div class="col-lg-12">
                <div id="banner_wrapper">
                    <div id="banner">

                        <div class="carousel-box">
                            <div class="inner">
                                <div class="carousel main">
                                    <ul>
                                        <li>
                                            <div class="banner">
                                                <div class="banner_inner">
                                                    <a href="more.html">

                                                        <figure><img src="images/banner1.jpg" alt="" class="img"><em></em></figure>
                                                        <div class="caption">
                                                            <center>
                                                                <div class="text2">Dr. Alex Ferguson</div>
                                                            </center>
                                                            <center>
                                                                <div class="textorange">CANCER SPECIALIST</div>
                                                            </center>
                                                            <center>
                                                                <div class="btn btn-default">APPOINTMENT</div>
                                                            </center>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="banner">
                                                <div class="banner_inner">
                                                    <a href="more.html">

                                                        <figure><img src="images/banner2.jpg" alt="" class="img"><em></em></figure>
                                                        <div class="caption">

                                                            <center>
                                                                <div class="text2">Dr. David Vachini</div>
                                                            </center>
                                                            <center>
                                                                <div class="textorange">HEART SURGUN</div>
                                                            </center>
                                                            <center>
                                                                <div class="btn btn-default">APPOINTMENT</div>
                                                            </center>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="banner">
                                                <div class="banner_inner">
                                                    <a href="more.html">

                                                        <figure><img src="images/banner3.jpg" alt="" class="img"><em></em></figure>
                                                        <div class="caption">

                                                            <center>
                                                                <div class="text2">Dr. Anye Brown</div>
                                                            </center>
                                                            <center>
                                                                <div class="textorange">SENIOR NURSE</div>
                                                            </center>
                                                            <center>
                                                                <div class="btn btn-default">APPOINTMENT</div>
                                                            </center>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="banner">
                                                <div class="banner_inner">
                                                    <a href="more.html">

                                                        <figure><img src="images/banner4.jpg" alt="" class="img"><em></em></figure>
                                                        <div class="caption">

                                                            <center>
                                                                <div class="text2">Dr. Laura Smith</div>
                                                            </center>
                                                            <center>
                                                                <div class="textorange">PEDIATRIC</div>
                                                            </center>
                                                            <center>
                                                                <div class="btn btn-default">APPOINTMENT</div>
                                                            </center>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="banner">
                                                <div class="banner_inner">
                                                    <a href="more.html">

                                                        <figure><img src="images/banner1.jpg" alt="" class="img"><em></em></figure>
                                                        <div class="caption">


                                                            <center>
                                                                <div class="text2">Dr. Alex Frugosen</div>
                                                            </center>
                                                            <center>
                                                                <div class="textorange">CANCER SPECIALIST</div>
                                                            </center>
                                                            <center>
                                                                <div class="btn btn-default">APPOINTMENT</div>
                                                            </center>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="banner">
                                                <div class="banner_inner">
                                                    <a href="more.html">

                                                        <figure><img src="images/banner2.jpg" alt="" class="img"><em></em></figure>
                                                        <div class="caption">

                                                            <center>
                                                                <div class="text2">Dr. Alex Frugosen</div>
                                                            </center>
                                                            <center>
                                                                <div class="textorange">HEART SURGUN</div>
                                                            </center>
                                                            <center>
                                                                <div class="btn btn-default">APPOINTMENT</div>
                                                            </center>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="banner">
                                                <div class="banner_inner">
                                                    <a href="more.html">

                                                        <figure><img src="images/banner3.jpg" alt="" class="img"><em></em></figure>
                                                        <div class="caption">


                                                            <center>
                                                                <div class="text2">Dr. Viola Amatti</div>
                                                            </center>
                                                            <center>
                                                                <div class="textorange">SENIOR NURSE</div>
                                                            </center>
                                                            <center>
                                                                <div class="btn btn-default">APPOINTMENT</div>
                                                            </center>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="banner">
                                                <div class="banner_inner">
                                                    <a href="more.html">

                                                        <figure><img src="images/banner4.jpg" alt="" class="img"><em></em></figure>
                                                        <div class="caption">


                                                            <center>
                                                                <div class="text2">Dr. Lia Frugman</div>
                                                            </center>
                                                            <center>
                                                                <div class="textorange">PEDIATRIC</div>
                                                            </center>
                                                            <center>
                                                                <div class="btn btn-default">APPOINTMENT</div>
                                                            </center>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="services"></div>
    <div class="container-fluid">
        <div class="row  visible-lg visible-md hidden-sm hidden-xs">
            <div id="parallax2" class="parallax">
                <div class="bg2 parallax-bg"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="parallax-content visible-lg visible-md hidden-sm hidden-xs">
                        <div class="parallax_txt2">Why Choose us ?</div>
                        <div class="parallax_txt1">You have a number of reason to prefer us !</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <center>
                    <h2><span class="merabi">Hospital</span> Departments</h2>
                </center><br>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Emergency / Critical Care
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-6 col-md-3">
                                        <a href="#" class="thumbnail">
                                            <img src="images/critical-care.jpg">
                                        </a>
                                    </div>
                                    <p class="text">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. <br>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. <br>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Dental Clinic
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-6 col-md-3">
                                        <a href="#" class="thumbnail">
                                            <img src="images/emergency-dentists.jpg">
                                        </a>
                                    </div>
                                    <p class="text">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. <br>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. <br>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Primary Health Care
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-6 col-md-3">
                                        <a href="#" class="thumbnail">
                                            <img src="images/primary.jpg">
                                        </a>
                                    </div>
                                    <p class="text">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. <br>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. <br>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="text"> <br><br>
                    </p>
                </div>
            </div>
        </div>


    </div>

    <div id="products">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <div class="page_title5">
                        <h3><span><em class="l"></em>Photo Gallery<em class="r"></em></span></h3>
                    </div>
                    <br><br>
                    <div id="options" class="clearfix">
                        <ul id="filters" class="pagination option-set clearfix" data-option-key="filter">
                            <li><a href="#filter" data-option-value="*" class="selected">All Photos</a></li>
                            <li><a href="#filter" data-option-value=".isotope-filter1">Section 1</a></li>
                            <li><a href="#filter" data-option-value=".isotope-filter2">Section 2</a></li>
                        </ul>
                    </div><!-- #options -->

                    <div class="isotope-box">
                        <div id="container" class="clearfix">
                            <ul class="thumbnails" id="isotope-items">
                                <li class="element isotope-filter1">
                                    <div class="thumb-isotope">
                                        <div class="thumbnail clearfix">
                                            <a href="images/gallery/gallery01.jpg" rel="prettyPhoto[mix]" title="Photo" class="p">
                                                <figure>
                                                    <img src="images/gallery01.jpg" alt=""><em></em>
                                                </figure>
                                                <div class="caption">Phasellus consequat ac ante ornare.</div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="element isotope-filter2">
                                    <div class="thumb-isotope">
                                        <div class="thumbnail clearfix">
                                            <a href="images/gallery/gallery02.jpg" rel="prettyPhoto[mix]" title="Photo" class="p">
                                                <figure>
                                                    <img src="images/gallery02.jpg" alt=""><em></em>
                                                </figure>
                                                <div class="caption">Phasellus consequat ac ante ornare.</div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="element isotope-filter1">
                                    <div class="thumb-isotope">
                                        <div class="thumbnail clearfix">
                                            <a href="images/gallery/gallery03.jpg" rel="prettyPhoto[mix]" title="Photo" class="p">
                                                <figure>
                                                    <img src="images/gallery03.jpg" alt=""><em></em>
                                                </figure>
                                                <div class="caption">Phasellus consequat ac ante ornare.</div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="element isotope-filter2">
                                    <div class="thumb-isotope">
                                        <div class="thumbnail clearfix">
                                            <a href="images/gallery/gallery04.jpg" rel="prettyPhoto[mix]" title="Photo" class="p">
                                                <figure>
                                                    <img src="images/gallery04.jpg" alt=""><em></em>
                                                </figure>
                                                <div class="caption">Phasellus consequat ac ante ornare.</div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="element isotope-filter1">
                                    <div class="thumb-isotope">
                                        <div class="thumbnail clearfix">
                                            <a href="images/gallery/gallery05.jpg" rel="prettyPhoto[mix]" title="Photo" class="p">
                                                <figure>
                                                    <img src="images/gallery05.jpg" alt=""><em></em>
                                                </figure>
                                                <div class="caption">Phasellus consequat ac ante ornare.</div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="element isotope-filter2">
                                    <div class="thumb-isotope">
                                        <div class="thumbnail clearfix">
                                            <a href="images/gallery/gallery06.jpg" rel="prettyPhoto[mix]" title="Photo" class="p">
                                                <figure>
                                                    <img src="images/gallery06.jpg" alt=""><em></em>
                                                </figure>
                                                <div class="caption">Phasellus consequat ac ante ornare.</div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="element isotope-filter1">
                                    <div class="thumb-isotope">
                                        <div class="thumbnail clearfix">
                                            <a href="images/gallery/gallery07.jpg" rel="prettyPhoto[mix]" title="Photo" class="p">
                                                <figure>
                                                    <img src="images/gallery07.jpg" alt=""><em></em>
                                                </figure>
                                                <div class="caption">Phasellus consequat ac ante ornare.</div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="element isotope-filter2">
                                    <div class="thumb-isotope">
                                        <div class="thumbnail clearfix">
                                            <a href="images/gallery/gallery08.jpg" rel="prettyPhoto[mix]" title="Photo" class="p">
                                                <figure>
                                                    <img src="images/gallery08.jpg" alt=""><em></em>
                                                </figure>
                                                <div class="caption">Phasellus consequat ac ante ornare.</div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="element isotope-filter2">
                                    <div class="thumb-isotope">
                                        <div class="thumbnail clearfix">
                                            <a href="images/gallery/gallery03.jpg" rel="prettyPhoto[mix]" title="Photo" class="p">
                                                <figure>
                                                    <img src="images/gallery03.jpg" alt=""><em></em>
                                                </figure>
                                                <div class="caption">Phasellus consequat ac ante ornare.</div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="element isotope-filter1">
                                    <div class="thumb-isotope">
                                        <div class="thumbnail clearfix">
                                            <a href="images/gallery/gallery04.jpg" rel="prettyPhoto[mix]" title="Photo" class="p">
                                                <figure>
                                                    <img src="images/gallery04.jpg" alt=""><em></em>
                                                </figure>
                                                <div class="caption">Phasellus consequat ac ante ornare.</div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="element isotope-filter2">
                                    <div class="thumb-isotope">
                                        <div class="thumbnail clearfix">
                                            <a href="images/gallery/gallery01.jpg" rel="prettyPhoto[mix]" title="Photo" class="p">
                                                <figure>
                                                    <img src="images/gallery01.jpg" alt=""><em></em>
                                                </figure>
                                                <div class="caption">Phasellus consequat ac ante ornare.</div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="element isotope-filter2">
                                    <div class="thumb-isotope">
                                        <div class="thumbnail clearfix">
                                            <a href="images/gallery/gallery02.jpg" rel="prettyPhoto[mix]" title="Photo" class="p">
                                                <figure>
                                                    <img src="images/gallery02.jpg" alt=""><em></em>
                                                </figure>
                                                <div class="caption">Phasellus consequat ac ante ornare.</div>
                                            </a>
                                        </div>
                                    </div>
                                </li>



                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div id="contacts">
            <div class="page_title2"><span><em class="l"></em>contact info<em class="r"></em></span></div>

            <div class="row">
                <div class="col-sm-4">

                    <h3 class="page_title">Our Address</h3>

                    <div class="thumb4">
                        <div class="thumbnail clearfix">
                            <figure><img src="images/contacts01.jpg" alt="" width="100%"></figure>
                            <div class="caption">

                                Mayo Clinic Rochester 200<br>
                                1st St SW Rochester, <br>
                                MN 55905. United States<br><br>

                                Telephone: +1 800 123 1234<br>
                                E-mail: <a href="#">info@companyname.com</a>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-sm-4">

                    <h3 class="page_title">Our departments</h3>

                    <div class="location1 clearfix">
                        <i class="fa fa-map-marker"></i>
                        <span>
                            <div class="txt1">Location name</div>
                            <div class="txt2">Quisque accumsan nisl eros, vel sagittis justo consequat in. Sed ut gravida enim, sed lobortis nibh. Etiam dapibus felis in libero ultricies rutrum. </div>
                        </span>
                    </div>

                    <div class="location1 clearfix">
                        <i class="fa fa-map-marker"></i>
                        <span>
                            <div class="txt1">Location name</div>
                            <div class="txt2">Quisque accumsan nisl eros, vel sagittis justo consequat in. Sed ut gravida enim, sed lobortis nibh. Etiam dapibus felis in libero ultricies rutrum. </div>
                        </span>
                    </div>

                    <div class="location1 clearfix">
                        <i class="fa fa-map-marker"></i>
                        <span>
                            <div class="txt1">Location name</div>
                            <div class="txt2">Quisque accumsan nisl eros, vel sagittis justo consequat in. Sed ut gravida enim, sed lobortis nibh. Etiam dapibus felis in libero ultricies rutrum. </div>
                        </span>
                    </div>

                    <div class="location1 clearfix">
                        <i class="fa fa-map-marker"></i>
                        <span>
                            <div class="txt1">Location name</div>
                            <div class="txt2">Quisque accumsan nisl eros, vel sagittis justo consequat in. Sed ut gravida enim, sed lobortis nibh. Etiam dapibus felis in libero ultricies rutrum. </div>
                        </span>
                    </div>



                </div>
                <div class="col-sm-4">

                    <h3 class="page_title">Contact Form</h3>

                    <div id="note"></div>
                    <div id="fields">
                        <form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!');">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">

                                        <input type="text" class="form-control" id="inputName" name="name" value="Full Name" onBlur="if(this.value=='') this.value='Full Name'" onFocus="if(this.value =='Full Name' ) this.value=''">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">

                                        <input type="text" class="form-control" id="inputEmail" name="email" value="E-mail address" onBlur="if(this.value=='') this.value='E-mail address'" onFocus="if(this.value =='E-mail address' ) this.value=''">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">

                                        <input type="text" class="form-control" id="inputPhone" name="phone" value="Phone" onBlur="if(this.value=='') this.value='Phone'" onFocus="if(this.value =='Phone' ) this.value=''">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">

                                        <textarea class="form-control" rows="5" id="inputMessage" name="content" onBlur="if(this.value=='') this.value='Message'" onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group capthca">
                                        <label for="inputCapthca" class="sr-only">Capthca</label>
                                        <input type="text" class="form-control" id="inputCapthca" name="capthca" value="Capthca" onBlur="if(this.value=='') this.value='Capthca'" onFocus="if(this.value =='Capthca' ) this.value=''">
                                    </div>
                                    <div class="form-group img">
                                        <img src="captcha/captcha.php">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn-default btn-cf-submit">Submit</button>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>




    <div cass="container-fluid">
        <div id="google_map">
            <figure class="google_map">
                <div style="width: 100%"><iframe width="100%" height="350" src="http://www.maps.ie/create-google-map/map.php?width=100%&amp;height=350&amp;hl=en&amp;q=Mayo%20Clinic%20Rochester%20200%201st%20St%20SW%20Rochester%2C%20MN%2055905%20United%20States+(Mayo%20Clinic)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="http://www.maps.ie/create-google-map/">Embed Google Map</a> by <a href="http://www.maps.ie/">Maps.ie</a></iframe></div><br />


        </div>
    </div>


    <footer>
        <div class="navbar navbar-inverse navbar-bottom">
            <div class="container-fluid">
                <div class="row">


                    <div class="col-lg-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                                <span class="sr-only">open navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!--<a class="navbar-brand" href="#"> Company name</a>-->
                        </div>
                        <div class="container">
                            <div class="collapse navbar-collapse" id="responsive-menu">`
                                <ul class="nav navbar-nav">
                                    <li><a href="index.html">HOME</a></li>
                                    <li><a href="index.html#about">ABOUT</a></li>
                                    <li><a href="index.html#ourteam">OUR TEAM</a></li>
                                    <li><a href="index.html#services">SERVICES</a></li>
                                    <li class="dropup">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog.html">Blog Left</a></li>
                                            <li><a href="blog-right.html">Blog Right</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="index.html#products">GALLERY</a></li>
                                    <li><a href="index.html#contacts">CONTACT</a></li>
                                    <div class="phtext4b">
                                        <a href="index.html"><img class="merabino-bottom" src="images/logob.png"></a> HEALTHCARE <span class="meraba1b">AGENCY</span>
                                    </div>
                                </ul>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </footer>



    <script src="js/bootstrap.min.js"></script>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>