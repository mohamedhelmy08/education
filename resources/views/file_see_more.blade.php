<!DOCTYPE html>

<html lang="en" dir="rtl">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

<meta charset="UTF-8">

<meta property="og:title" content="Next | For Math Learn" />
<meta property="og:site_name" content="Next | For Math Learn" />

<meta property="og:url" content="#" />
<meta property="og:type" content="company" />
<meta property="og:description" content="Next هى سلسلة لتعليم الرياضيات لطلاب الثانوية العامة" />



<meta property="og:locale" content="ar" />


    <title>Next | For Math Learn</title>
<meta name="description" content="موقع خاص بتعليم الرياضيات">
<meta name="keywords" content="تعليم رياضيات امتحانات  علم ">
<link rel="canonical" href="ar.html"/>

    <meta name="author" content="Next">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- SITE TITLE -->

    <title>Next | For Math Learn</title>


    <!-- =========================

          FAV AND TOUCH ICONS

    ========================= -->

    <link rel="icon" href="design/images/next_logo_LwT_icon.ico">

  <!--   <link rel="apple-touch-icon" sizes="57x57" href="design/images/next-logo.jpg">

    <link rel="apple-touch-icon" sizes="60x60" href="design/images/next-logo.jpg">

    <link rel="apple-touch-icon" sizes="72x72" href="
    design/images/next-logo.jpg">

    <link rel="apple-touch-icon" sizes="76x76" href="design/images/next-logo.jpg">

    <link rel="apple-touch-icon" sizes="114x114" href="design/images/next-logo.jpg">

    <link rel="apple-touch-icon" sizes="120x120" href="design/images/next-logo.jpg">

    <link rel="apple-touch-icon" sizes="144x144" href="design/images/next-logo.jpg">

    <link rel="apple-touch-icon" sizes="152x152" href="design/images/next-logo.jpg">

    <link rel="apple-touch-icon" sizes="180x180" href="design/images/next-logo.jpg"> -->


    <!-- =========================

         STYLESHEET

         ========================= -->


    <!-- bootstrap  -->

    <link rel="stylesheet" href="design/css/bootstrap.min.css">


    <!-- bootstrap arabic-->

    <link rel="stylesheet" href="design/css/bootstrap.min.css">

    <link rel="stylesheet" href="design/css/bootstrap-arabic.min.css">


    <!-- FONT AWESOME -->

    <link rel="stylesheet" href="design/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

    <!-- FORMSTONE NAVIGATION -->

    <link rel="stylesheet" href="design/css/navigation.css">


    <!-- COLORS -->


    <link rel="stylesheet" href="design/css/colors/red.css">


    <!-- CUSTOM STYLESHEET -->

    <link rel="stylesheet" href="design/css/styles.css">

    <link rel="stylesheet" href="design/css/style-product.css">


<!-- RESPONSIVE FIXES -->

    <link rel="stylesheet" href="design/css/responsive.css">


    <!-- Jquery -->

    <script src="design/js/jquery-2.0.3.min.js"></script>
    <script src='../../www.google.com/recaptcha/api.js'></script>


    <script>

        //make sure that js is enabled

        $('html').addClass('js');

    </script>


    <!--[if IE]>

    <style>label {
        display: block;
    }</style>

    <![endif]-->



</head>


<body>

<!-- =========================

     PRELOADER

     ========================== -->

<!--<div class="preloader">

</div>-->


<!-- =========================

     NAVIGATION

     ========================== -->

<nav class="navigation dark-bg">

    <div class="wrapper">


        <!-- NAVIGATION HEADER -->

        <div class="navbar-header">

            <!-- LOGO -->

            <a class="navigation-logo" href="/">

                <img src="design/images/next-logo.png" alt="next-logo">
            </a>

        </div>


        <!-- NAVIGATION LINKS -->

        <ul class="navigation-links" data-navigation-handle=".navbar-header">
                <li><a href="/#home">الرئيسية</a></li>
                <li><a href="/#services">الحصص الجديدة</a></li>
                <li><a href="/#about">من نحن</a></li>
              <li><a href="/#contact">تواصل معنا</a></li>
              <li><a href="studentlogin">تسجيل دخول </a></li>
              <li><a href="studentregister">إشترك معنا ؟</a></li>

        </ul>


    </div> <!-- /END WRAPPER -->

</nav>



            <!-- =========================
     HOME
}
}
}
========================= -->
  <section class="services" id="services" style="padding-top: 30px;">
            <div class="wrapper">

                <!-- HEADING-->
                <h2>الحصص الجديدة </h2>

                <!-- SUB HEADING -->
                <p class="sub-heading">خدماتنا ذات الجودة العالية متنوعة ويمكنك معرفة الكثير عنها من هنا</p>

                <!-- LINE -->
                <div class="main-line"></div>
                <h3 style="text-align:right;">الصف الاول الثانوى </h3>

              <div class="row services-box text-center">
                @foreach($data['first'] as $fdata)
                    <div class="col-xs-12 col-sm-3 develop">

                             <h3>{{$fdata->file_name}}</h3>
                    <div class="btn-container">
                      <a class="btn secondary-btn" href="downloadfile/{{$fdata->file}}">تحميل</a>
                      </div>
                    </div>
                @endforeach
              </div>
              <hr>
                <!--====================second stage adaby================================-->

                <h3 style="text-align:right;">الصف الثانى الثانوى - أدبى  </h3>
            <div class="row services-box text-center">
              @foreach($data['adaby'] as $adata)
                  <div class="col-xs-12 col-sm-3 develop">

                           <h3>{{$adata->file_name}}</h3>
                  <div class="btn-container">
                    <a class="btn secondary-btn" href="deletefile/{{$adata->file}}"> تحميل</a>
                    </div>
                  </div>
              @endforeach
            </div>
            <hr>
                <!--==================second stage 3lmy=================================-->

                <h3 style="text-align:right;">الصف الثانى الثانوى - علمى </h3>

            <div class="row services-box text-center">

              @foreach($data['elmy'] as $edata)
                  <div class="col-xs-12 col-sm-3 develop">

                           <h3>{{$edata->file_name}}</h3>
                  <div class="btn-container">
                    <a class="btn secondary-btn" href="deletefile/{{$edata->file}}">تحميل</a>
                    </div>
                  </div>
              @endforeach

            </div>
            <hr>
                <!-- ===================third stage======================-->

                <h3 style="text-align:right;">الصف الثالث الثانوى </h3>
          <div class="row services-box text-center">
            @foreach($data['third'] as $tdata)
                <div class="col-xs-12 col-sm-3 develop">

                         <h3>{{$tdata->file_name}}</h3>
                <div class="btn-container">
                  <a class="btn secondary-btn" href="deletefile/{{$tdata->file}}"> تحميل</a>
                  </div>
                </div>
            @endforeach
          </div>
     </div>
  </section>
  <footer class="dark-bg">

      <!-- BACK TO TOP -->

      <a class="icon back-to-top" href="https://ieasoft.net/design/https://ieasoft.net/index.php/ar/home/#home"><i
                  class="fa fa-home"></i></a>


      <!-- SOCIAL NAVIGATION -->

      <div class="col-xs-12 col-sm-4">

          <h3>تواصل معنا</h3>

          <ul class="social-navigation">

              <li><a href="https://facebook.com/ieasoft" class="icon"><i class="fa fa-facebook"></i></a></li>

              <li><a href="https://twitter.com/ieasoft" class="icon"><i class="fa fa-twitter"></i></a></li>

              <li><a href="https://www.linkedin.com/company/ieasoft" class="icon"><i class="fa fa-linkedin"></i></a></li>



          </ul>

      </div>
      <!-- COPYRIGHT -->

      <p style="padding-top: 140px">

          جميع الحقوق محفوظة © | <span dir="ltr"> Next </span>&nbsp; &nbsp; &nbsp;2019

      </p>

  </footer>


  <!-- =========================

       SCRIPTS

  ========================= -->


  <!-- =========== script type ==================== -->

  <script src='../../cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src='../../s3-us-west-2.amazonaws.com/s.cdpn.io/15309/typed.min.js'></script>

  <script src="design/js/index.js"></script>

  <!-- =========== script type ==================== -->

  <!-- Formstone Navigation -->

  <script src="design/js/core.js"></script>

  <script src="design/js/mediaquery.js"></script>

  <script src="design/js/swap.js"></script>

  <script src="design/js/touch.js"></script>

  <script src="design/js/navigation.js"></script>


  <!-- Smoothscroll -->

  <script src="design/js/smoothscroll.js"></script>


  <!-- Jquery Nav -->

  <script src="design/js/jquery.nav.js"></script>


  <!-- ImagesLoaded -->

  <script src="design/js/jquery.imagesloaded.js"></script>


  <!-- Wookmark -->

  <script src="design/js/jquery.wookmark.min.js"></script>


  <!-- bootstrap -->

  <script src="design/js/bootstrap.min.js"></script>

  <script src="design/js/bootstrap-arabic.min.js"></script>


  <!-- Retina -->

  <script src="design/js/retina.min.js"></script>


  <!-- Custom Script -->

  <script src="design/js/custom.js"></script>

  <script src="design/js/index-product.js"></script>

  </body>
  </html>