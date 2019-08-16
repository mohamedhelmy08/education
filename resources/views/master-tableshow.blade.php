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



     <link rel="icon" href="{{asset('design/images/next_logo_LwT_icon.ico')}}">

<!--

    <link rel="apple-touch-icon" sizes="57x57" href="design/images/next-logo.jpg">



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

         <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->

    	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" >



    <!-- bootstrap  -->



    <link rel="stylesheet" href="{{asset('design/css/bootstrap.min.css')}}">





    <!-- bootstrap arabic-->



    <link rel="stylesheet" href="{{asset('design/css/bootstrap.min.css')}}">



    <link rel="stylesheet" href="{{asset('design/css/bootstrap-arabic.min.css')}}">





    <!-- FONT AWESOME -->



    <link rel="stylesheet" href="{{asset('design/css/font-awesome.min.css')}}">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">



    <!-- FORMSTONE NAVIGATION -->



    <link rel="stylesheet" href="{{asset('design/css/navigation.css')}}">





    <!-- COLORS -->







    <link rel="stylesheet" href="{{asset('design/css/colors/red.css')}}">



    <!-- CUSTOM STYLESHEET -->



    <link rel="stylesheet" href="{{asset('design/css/styles2.css')}}">



    <link rel="stylesheet" href="{{asset('design/css/style-product.css')}}">





<!-- RESPONSIVE FIXES -->



    <link rel="stylesheet" href="{{asset('design/css/responsive.css')}}">





    <!-- Jquery -->



    <script src="{{asset('design/js/jquery-2.0.3.min.js')}}"></script>

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



            <a class="navigation-logo" href="adminhome">



                <img src="{{asset('design/images/next-logo.png')}}" alt="next-logo">



            </a>



        </div>





        <!-- NAVIGATION LINKS -->



        <ul class="navigation-links" data-navigation-handle=".navbar-header">
           @if(Auth::guard('student')->check())
           <li><a href="{{url('/#home')}}">الرئيسية</a></li>
           <li><a href="{{url('/#services')}}">الحصص الجديدة</a></li>
           <li><a href="{{url('/student/exams')}}">الامتحانات</a></li>
           <li><a href="{{url('/student/profile')}}">الملف الشخصي</a></li>
           <li><a href="{{url('/#about')}}">من نحن</a></li>
           <li><a href="{{url('/#contact')}}">تواصل معنا</a></li>
            @endif
            @if(Auth::guard('web')->check())
            <li><a href="{{url('/adminhome#home')}}">الرئيسية</a></li>
            <li><a href="{{url('/student/show')}}">الطلاب</a></li>

              <li><a href="{{url('/exam/show')}}">الامتحانات</a></li>

            <li><a href="{{url('/courses')}}">الحصص الجديدة</a></li>

            <li><a href="{{url('/adminprofile')}}">الملف الشخصي</a></li>
            <li><a href="{{url('/adminhome#about')}}">من نحن</a></li>
           <li><a href="{{url('/adminhome#contact')}}">تواصل معنا</a></li>
                 @endif
              <li><a  href="{{ route('logout') }}"

                 onclick="event.preventDefault();

                               document.getElementById('logout-form').submit();">

                  {{ __('تسجيل خروج') }}

              </a>



              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                  @csrf

              </form></li>



        </ul>





    </div> <!-- /END WRAPPER -->



</nav>

@yield('content')
<footer class="dark-bg">
          <!-- SOCIAL NAVIGATION -->



          <div class="col-xs-12 col-sm-4">



              <h3>تواصل معنا</h3>



              <ul class="social-navigation">



                  <li><a href="https://facebook.com/helmy" class="icon"><i class="fa fa-facebook"></i></a></li>

              </ul>



          </div>

          <!-- COPYRIGHT -->



          <p style="padding-top: 140px">



              جميع الحقوق محفوظة © | <span dir="ltr">Next</span>&nbsp; &nbsp; &nbsp; 2019



          </p>



      </footer>





      <!-- =========================



           SCRIPTS



      ========================= -->





      <!-- =========== script type ==================== -->



      <script src='../../cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



      <script src='../../s3-us-west-2.amazonaws.com/s.cdpn.io/15309/typed.min.js'></script>



      <script src="{{asset('design/js/index.js')}}"></script>



      <!-- =========== script type ==================== -->



      <!-- Formstone Navigation -->



      <script src="{{asset('design/js/core.js')}}"></script>



      <script src="{{asset('design/js/mediaquery.js')}}"></script>



      <script src="{{asset('design/js/swap.js')}}"></script>



      <script src="{{asset('design/js/touch.js')}}"></script>



      <script src="{{asset('design/js/navigation.js')}}"></script>





      <!-- Smoothscroll -->



      <script src="{{asset('design/js/smoothscroll.js')}}"></script>





      <!-- Jquery Nav -->



      <script src="{{asset('design/js/jquery.nav.js')}}"></script>





      <!-- ImagesLoaded -->



      <script src="{{asset('design/js/jquery.imagesloaded.js')}}"></script>





      <!-- Wookmark -->



      <script src="{{asset('design/js/jquery.wookmark.min.js')}}"></script>





      <!-- bootstrap -->



      <script src="{{asset('design/js/bootstrap.min.js')}}"></script>



      <script src="{{asset('design/js/bootstrap-arabic.min.js')}}"></script>





      <!-- Retina -->



      <script src="{{asset('design/js/retina.min.js')}}"></script>





      <!-- Custom Script -->



      <script src="{{asset('design/js/custom.js')}}"></script>



      <script src="{{asset('design/js/index-product.js')}}"></script>

      <!--Data table Scripts -->

         <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

          <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script> -->

          <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script> -->

          <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>

          <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" ></script>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

          <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>

         <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" ></script>

         <script src="{{asset('js/custom.js')}}" ></script>

      </body>

      </html>
