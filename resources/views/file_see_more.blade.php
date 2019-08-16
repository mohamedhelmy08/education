@extends('master-student')
@section('content')
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
  @endsection
