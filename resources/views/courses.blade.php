@extends('adminhome')
@section('content')
<div class="container">
  <section class="services" id="services" style="padding-top: 30px;">
            <div class="wrapper">

                <!-- HEADING-->
                <h2>الحصص الجديدة </h2>
                <div class="btn-container" style="float:left;">
                  <a class="btn secondary-btn" href="addfile">إضافة حصة جديدة</a>
                  </div>
                </div>
               @if(count($errors)>0)
               <center>
                   <div class="alert alert-danger">
                       <ul>
                       @foreach($errors->all() as $error)
                       <li>{{ $error }}</li>
                       @endforeach
                       </ul>
                   </div>
                 </center>
               @endif
               @if(Session::has('alert'))
                     <center>
                         <div>
                             <?php $a = [];  $a = session()->pull('alert')  ?>
                             @if($a[0]=="Danger")
                                 <div class="alert bg-danger" role="alert"><em>&nbsp;</em><label>{{$a[1]}}</label> <a href="#" class="pull-right"><em class="fa fa-lg fa-close"  data-dismiss="alert"></em></a></div>
                             @else
                                 <div class="alert bg-success" role="alert"><em >&nbsp;</em>  <label>{{$a[1]}}</label> <a href="#" class="pull-right"><em class="fa fa-lg fa-close" data-dismiss="alert"></em></a></div>
                             @endif
                         </div>
                     </center>
                @endif

                <!-- SUB HEADING -->
                <!-- LINE -->
                <div class="main-line"></div>
                <h3 style="text-align:right;">الصف الاول الثانوى </h3>

              <div class="row services-box text-center">
                @foreach($data['first'] as $fdata)
                    <div class="col-xs-12 col-sm-3 develop">

                             <h3>{{$fdata->file_name}}</h3>
                    <div class="btn-container">
                          <a class="btn secondary-btn" href="deletefile/{{$fdata->id}}">حذف الحصة</a>
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
                    <a class="btn secondary-btn" href="deletefile/{{$adata->id}}">حذف الحصة</a>
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
                    <a class="btn secondary-btn" href="deletefile/{{$edata->id}}">حذف الحصة</a>
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
                  <a class="btn secondary-btn" href="deletefile/{{$tdata->id}}">حذف الحصة</a>
                  </div>
                </div>
            @endforeach
          </div>
     </div>
  </section>
</div>
@endsection
