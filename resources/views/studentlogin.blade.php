<!DOCTYPE html>

<html lang="en" dir="rtl">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="UTF-8">

<meta property="og:title" content="Next" />
<meta property="og:site_name" content="Next" />

<meta property="og:url" content="#" />
<meta property="og:image" content="design/images/ieasoft-logo.png" />
<meta property="og:type" content="company" />
<meta property="og:description" content="Next هى سلسلة لتعليم الرياضيات لطلاب الثانوية العامة" />



<meta property="og:locale" content="ar" />


    <title>Next | For Math Learn</title>
<meta name="description" content="موقع خاص بتعليم الرياضيات">
<meta name="keywords" content="تعليم رياضيات امتحانات  علم ">
<link rel="canonical" href="ar.html"/>

    <meta name="author" content="teacher">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- SITE TITLE -->

    <title>Next</title>


    <!-- =========================

          FAV AND TOUCH ICONS

    ========================= -->

     <link rel="icon" href="design/images/next_logo_LwT_icon.ico">
    <!-- <link rel="apple-touch-icon" sizes="57x57" href="design/images/IeasoftFaveIcon.jpg">

    <link rel="apple-touch-icon" sizes="60x60" href="design/images/IeasoftFaveIcon.jpg">

    <link rel="apple-touch-icon" sizes="72x72" href="
    design/images/IeasoftFaveIcon.jpg">

    <link rel="apple-touch-icon" sizes="76x76" href="design/images/IeasoftFaveIcon.jpg">

    <link rel="apple-touch-icon" sizes="114x114" href="design/images/IeasoftFaveIcon.jpg">

    <link rel="apple-touch-icon" sizes="120x120" href="design/images/IeasoftFaveIcon.jpg">

    <link rel="apple-touch-icon" sizes="144x144" href="design/images/IeasoftFaveIcon.jpg">

    <link rel="apple-touch-icon" sizes="152x152" href="design/images/IeasoftFaveIcon.jpg">

    <link rel="apple-touch-icon" sizes="180x180" href="design/images/IeasoftFaveIcon.jpg">
 -->

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


    <!-- FORMSTONE NAVIGATION -->

    <link rel="stylesheet" href="design/css/navigation.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">


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
                        <li><a href="/">الرئيسية</a></li>
                        <li><a href="studentregister">إشترك معنا ؟</a></li>

                </ul>
    </div> <!-- /END WRAPPER -->

</nav>
  <section class="contact dark-bg">
            <div class="color-overlay mapOverlay">
                <div class="container content" style="padding-top:130px;">
                    <div class="col-xs20 col-sm10">
                        <div class="wrapper">
                          @if($errors->any())
                          <h4 style="color:red;">{{$errors->first()}}</h4>
                          @endif

                            <form method="POST" action="{{ route('studentlogin') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                              @csrf
                            <div class="col-12">
                            <div class="col-6">
                              @error('phone')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                                <!-- PHONE NUMBER -->
                                <!-- <label for="phone">الهاتف</label> -->
                                <input id="phone" name="phone" type="tel" value=""
                                       placeholder="الهاتف"  class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required  autofocus oninvalid="this.setCustomValidity('من فضلك دخل حقل الهاتف')"
  oninput="this.setCustomValidity('')">
                             </div>
                             <div class="col-6">
                               @error('password')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                                 <!-- Password -->
                                 <!-- <label for="password">كلمة المرور</label> -->
                                 <input  placeholder="كلمة المرور" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" oninvalid="this.setCustomValidity('من فضلك ادخل كلمة المرور')"
oninput="this.setCustomValidity('')">
                              </div>
                              <!-- <div class="form-group row">
                                  <div class="col-md-6 offset-md-4">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                          <label for="password" >
                                              {{ __('تذكرنى') }}
                                          </label>
                                      </div>
                                  </div>
                              </div> -->
                              <div class="form-group row mb-0">
                                <div class="col-md-4">

                                     @if (Route::has('password.request'))
                                         <!-- <a class="btn btn-link" href="{{ route('password.request') }}"> -->
                                         <a class="btn btn-link" href="#">
                                             {{ __('هل نسيت كلمة المرور؟') }}
                                         </a>
                                     @endif
                                 </div>
                                  <div class="col-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('دخول') }}
                                      </button>
                                    </div>
                              </div>
                          </div>
                            </form>

                        </div> <!-- /END WRAPPER -->
                    </div>
                </div>
            </div> <!-- /END OVERLAY -->
         </section>
         <footer class="dark-bg">
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

                 جميع الحقوق محفوظة © | <span dir="ltr">Next </span> &nbsp; &nbsp; &nbsp;2019

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

</body>
</html>
