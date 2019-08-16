@extends('master-student')
@section('content')
        <header class="home dark-bg" id="home">

            <div class="color-overlay">

                <div class="wrapper">



                    <!-- HEADING -->

                    <h1>

                       مرحبا بك فى سلسلة Next

                    </h1>



                    <!-- SUB HEADING -->

                    <p class="sub-heading">

                      <span class="colored-text"></span><br/>



                    </p>



                    <!-- BUTTON -->

                    <div class="btn-container">

                        <a class="btn secondary-btn" href="#contact">تواصل معنا</a>

                    </div>


                    <!-- BUTTON -->
                    @if(! Auth::guard('student')->check())
                    <div class="btn-container">

                        <a class="btn standard-btn" href="studentregister">إشترك معنا</a>

                    </div>
                     @endif


                </div> <!-- /END WRAPPER -->

            </div> <!-- /END COLOR OVERLAY -->

        </header>



        <!-- =========================

     ABOUT

========================= -->

        <section class="about" id="about">

            <div class="wrapper">



                <!-- HEADING -->

                <h2>ما هى سلسلة Next ؟ </h2>



                <!-- LINE -->

                <div class="main-line"></div>





                <div class="col-12 aboutEdited">

                    <!-- HEADING -->

                    <h3 class="text-center">يمكنك التعرف علينا من خلال الأسطر القليلة القادمة</h3>



                    <!-- PARAGRAPH -->

                    <p class="lead">

                       <p>سلسة نيكست  هى سلسة تعليمة فى مادة الرياضيات للمرحلة الثانوية تهدف للعلو بمستوى الطلاب الاكاديمى من خلال الشرح الوافى والامتحانات المتواصلة على كل اجزاء المنهج  سلسة نيكست  هى سلسة تعليمة فى مادة الرياضيات للمرحلة الثانوية تهدف للعلو بمستوى الطلاب الاكاديمى من خلال الشرح الوافى والامتحانات المتواصلة على كل اجزاء المنهج</p>

                    </p>



                    <!-- HEADING -->

                    <h3 class="text-center">لماذا نحن</h3>

                    <div class="main-line"></div>

                    <div class="row text-center">



                                                    <div class="col-xs-12 col-sm-6 fa-about">



                                <i class="fa fa-clock-o fa-5x"></i>

                                <h3>



                                                                            إلتزامنا بالوقت



                                </h3>



                            </div>

                                                    <div class="col-xs-12 col-sm-6 fa-about">



                                <i class="fa fa-star fa-5x"></i>

                                <h3>



                                                                            جودة العمل التى تراه فى أعمالنا



                                </h3>



                            </div>

                                                    <div class="col-xs-12 col-sm-6 fa-about">



                                <i class="fa fa-money fa-5x"></i>

                                <h3>



                                                                            أسعارنا الجيدة فى مقابل الجودة



                                </h3>



                            </div>

                                                    <div class="col-xs-12 col-sm-6 fa-about">



                                <i class="fa fa-code fa-5x"></i>

                                <h3>



                                                                            خدماتنا المتنوعة والمتكاملة



                                </h3>



                            </div>





                    </div>

                </div>



            </div> <!-- /END WRAPPER -->

        </section>





        <section class=" container services" id="services">

            <div class="wrapper">



                <!-- HEADING-->

                <h2>الحصص الجديدة </h2>



                <!-- SUB HEADING -->

                <p class="sub-heading">خدماتنا ذات الجودة العالية متنوعة ويمكنك معرفة الكثير عنها من هنا</p>



                <!-- LINE -->

                <div class="main-line"></div>

                <h3 style="text-align:right;">الصف الاول الثانوى </h3>



                    <div class="row services-box text-center">

                      @foreach(App\Course::where('stage','=',1)->where('is_adaby','=','0')->paginate(8) as $fdata)

                          <div class="col-xs-12 col-sm-4 develop">



                                   <h3>{{$fdata->file_name}}</h3>

                          <div class="btn-container">
                                <a class="btn secondary-btn" href="downloadfile/{{$fdata->file}}">تحميل</a>
                            </div>

                          </div>

                      @endforeach

                    </div>

                      <!--====================second stage adaby================================-->



                      <h3 style="text-align:right;">الصف الثانى الثانوى - أدبى  </h3>

                  <div class="row services-box text-center">

                    @foreach(App\Course::where('stage','=',2)->where('is_adaby','=','1')->paginate(8) as $adata)

                        <div class="col-xs-12 col-sm-4 develop">



                                 <h3>{{$adata->file_name}}</h3>

                        <div class="btn-container">
                          <a class="btn secondary-btn" href="downloadfile/{{$adata->file}}"> تحميل</a>
                          </div>

                        </div>

                    @endforeach

                  </div>

                      <!--==================second stage 3lmy=================================-->



                      <h3 style="text-align:right;">الصف الثانى الثانوى - علمى </h3>



                  <div class="row services-box text-center">



                    @foreach(App\Course::where('stage','=',2)->where('is_adaby','=','0')->paginate(8) as $edata)

                        <div class="col-xs-12 col-sm-4 develop">



                                 <h3>{{$edata->file_name}}</h3>

                        <div class="btn-container">
                          <a class="btn secondary-btn" href="downloadfile/{{$edata->file}}">تحميل</a>
                          </div>

                        </div>

                    @endforeach

                  </div>

                      <!-- ===================third stage======================-->



                      <h3 style="text-align:right;">الصف الثالث الثانوى </h3>

                <div class="row services-box text-center">

                  @foreach(App\Course::where('stage','=',3)->where('is_adaby','=','0')->paginate(8) as $tdata)

                      <div class="col-xs-12 col-sm-4 develop">



                               <h3>{{$tdata->file_name}}</h3>

                      <div class="btn-container">
                        <a class="btn secondary-btn" href="downloadfile/{{$tdata->file}}"> تحميل</a>
                        </div>

                      </div>

                  @endforeach

                </div>

                <h3><a style="text-decoration: underline;padding-top:15px;" href="see_more"> المزيد</a></h3>

           </div>

        </section>

            <!-- =========================

     CONTACT

========================= -->



        <section class="contact dark-bg" id="contact">

            <div class="color-overlay mapOverlay">

                <div class="container">

                    <div class="col-xs-12 col-sm-5">



                        <!-- HEADING -->

                        <h2>تواصل معنا</h2>



                        <!-- LINE -->

                        <div class="main-line"></div>



                        <!-- CONTACT INFORMATION -->

                        <ul class="styled-icon-list">

                            <!-- SINGLE LIST ITEM -->

                            <li>

                                <!-- ICON -->

                                <div class="icon adjust">

                                    <i class="fa fa-phone"></i>

                                </div>

                                <!-- CONTENT -->

                                <p class="list-content"><span>0020-1092-513663 <i class="fa fa-whatsapp" style="color:red" aria-hidden="true" title="تواصل معنا على الواتساب "></i></span> او

                                    <span>002-050-2236672</span></p>

                            </li>



                            <!-- SINGLE LIST ITEM -->

                            <li>

                                <!-- ICON -->

                                <div class="icon adjust">

                                    <i class="fa fa-envelope-o"></i>

                                </div>

                                <!-- CONTENT -->

                                <p class="list-content">

                                    <span><a href="mailto:info@next.com">info@next.com</a></span>

                                </p>

                            </li>



                            <!-- SINGLE LIST ITEM -->

                            <li>

                                <!-- ICON -->

                                <div class="icon">

                                    <i class="fa fa-map-marker"></i>

                                </div>

                                <!-- CONTENT -->

                                <p class="list-content"><span>54 شارع عمر بن عبدالعزيز - حى الجامعة - المنصورة - مصر</span></p>

                            </li>

                         </ul>

                    </div>

                      <div class="col-xs-12 col-sm-7">

                              <div class="wrapper">
                                  <div class="col-12">
                                  <img src="{{asset('profile/1565122326.jpg')}}">
                                 </div>
                              </div> <!-- /END WRAPPER -->

                          </div>

                          <div class="col-xs-12 col-sm-2"></div>

                      </div>

                    <div class="col-xs-12 col-sm-2"></div>

            </div> <!-- /END OVERLAY -->

         </section>
@endsection
