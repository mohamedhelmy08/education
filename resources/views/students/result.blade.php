@extends('studenthome')

@section('content')

<section class="contact dark-bg">

          <div class="color-overlay mapOverlay">

              <div class="container content" style="padding-top:60px;">

                  <div class="col-xs20 col-sm10">

                      <div class="wrapper">

                    <form action="#" method="post" enctype="multipart/form-data">
                      <div class="col-12">
                          @if($stanswer[0][0]== $quiz[0]->answers[0]['is_correct'])
                              <div class="form-group">

                                  <label class="float-right"> السؤال الاول : </label>
                                  <!-- <div  style="float:left"><i class="fa fa-check"></div> -->
                                  <br>
                                  <label style="color:green;" class="float-right">{{$quiz[0]->question}}</label>
                                  <div  style="float:left;color: green;"><i class="fa fa-check fa-3x"></i></div>
                              </div>
                               <div class="form-group">
                                                <div class="row" style="padding-right:10px;">
                                           <div class="col-lg-12">
                                                <label class="float-right">إجابتك : {{$stanswer[1][0]['answer']}}</label>
                                           </div>
                                      </div>
                                      <hr>
                                </div>

                                  @else
                                  <div class="form-group">

                                      <label class="float-right"> السؤال الاول : </label>
                                      <br>
                                  <label style="color:red;" class="float-right">{{$quiz[0]->question}}</i></label>
                                  <div  style="float:left;color: red;"><i class="fa fa-times fa-3x"></i></div>
                                  </div>
                                  <div class="form-group">
                                          <div class="row" style="padding-right:10px;">
                                              <div class="col-lg-12">
                                                      <label class="float-right">إجابتك : {{$stanswer[1][0]['answer']}}</label>
                                              </div>
                                              <div class="col-lg-12">
                                                      <label class="float-right">الاجابة الصحيحة : {{$quiz[0]->answers[0]['answer']}}</label>
                                              </div>
                                      </div>
                                      <hr>
                                  </div>
                                  @endif
                                  @if($stanswer[0][1]== $quiz[1]->answers[0]['is_correct'])
                                      <div class="form-group">

                                          <label class="float-right"> السؤال الثانى : </label>
                                          <br>
                                          <label style="color:green;" class="float-right">{{$quiz[1]->question}}</label>
                                          <div  style="float:left;color: green;"><i class="fa fa-check fa-3x"></i></div>
                                      </div>
                                       <div class="form-group">
                                                        <div class="row" style="padding-right:10px;">
                                                   <div class="col-lg-12">
                                                        <label class="float-right">إجابتك : {{$stanswer[1][1]['answer']}}</label>
                                                   </div>
                                              </div>
                                              <hr>
                                        </div>

                                          @else
                                          <div class="form-group">

                                              <label class="float-right"> السؤال الثانى : </label>
                                              <br>
                                          <label style="color:red;" class="float-right">{{$quiz[1]->question}}</label>
                                          <div  style="float:left;color: red;"><i class="fa fa-times fa-3x"></i></div>
                                          </div>
                                          <div class="form-group">
                                                  <div class="row" style="padding-right:10px;">
                                                      <div class="col-lg-12">
                                                              <label class="float-right">إجابتك : {{$stanswer[1][1]['answer']}}</label>
                                                      </div>
                                                      <div class="col-lg-12">
                                                              <label class="float-right">الاجابة الصحيحة : {{$quiz[1]->answers[0]['answer']}}</label>
                                                      </div>
                                              </div>
                                              <hr>
                                          </div>
                                          @endif

                                          @if($stanswer[0][2]== $quiz[2]->answers[0]['is_correct'])
                                              <div class="form-group">

                                                  <label class="float-right"> السؤال الثالث : </label>
                                                  <br>
                                                  <label style="color:green;" class="float-right">{{$quiz[2]->question}}</label>
                                                  <div  style="float:left;color: green;"><i class="fa fa-check fa-3x"></i></div>
                                              </div>
                                               <div class="form-group">
                                                                <div class="row" style="padding-right:10px;">
                                                           <div class="col-lg-12">
                                                                <label class="float-right">إجابتك : {{$stanswer[1][2]['answer']}}</label>
                                                           </div>
                                                      </div>
                                                      <hr>
                                                </div>

                                                  @else
                                                  <div class="form-group">

                                                      <label class="float-right"> السؤال الثالث : </label>
                                                      <br>
                                                  <label style="color:red;" class="float-right">{{$quiz[2]->question}}</label>
                                                  <div  style="float:left;color: red;"><i class="fa fa-times fa-3x"></i></div>
                                                  </div>
                                                  <div class="form-group">
                                                          <div class="row" style="padding-right:10px;">
                                                              <div class="col-lg-12">
                                                                      <label class="float-right">إجابتك : {{$stanswer[1][2]['answer']}}</label>
                                                              </div>
                                                              <div class="col-lg-12">
                                                                      <label class="float-right">الاجابة الصحيحة : {{$quiz[2]->answers[0]['answer']}}</label>
                                                              </div>
                                                      </div>
                                                      <hr>
                                                  </div>
                                                  @endif

                                                  @if($stanswer[0][3]== $quiz[3]->answers[0]['is_correct'])
                                                      <div class="form-group">

                                                          <label class="float-right"> السؤال الرابع : </label>
                                                          <br>
                                                          <label style="color:green;" class="float-right">{{$quiz[3]->question}}</label>
                                                          <div  style="float:left;color: green;"><i class="fa fa-check fa-3x"></i></div>
                                                      </div>
                                                       <div class="form-group">
                                                                        <div class="row" style="padding-right:10px;">
                                                                   <div class="col-lg-12">
                                                                        <label class="float-right">إجابتك : {{$stanswer[1][3]['answer']}}</label>
                                                                   </div>
                                                              </div>
                                                              <hr>
                                                        </div>

                                                          @else
                                                          <div class="form-group">

                                                              <label class="float-right"> السؤال الرابع : </label>
                                                              <br>
                                                          <label style="color:red;" class="float-right">{{$quiz[3]->question}}</label>
                                                          <div  style="float:left;color: red;"><i class="fa fa-times fa-3x"></i></div>
                                                          </div>
                                                          <div class="form-group">
                                                                  <div class="row" style="padding-right:10px;">
                                                                      <div class="col-lg-12">
                                                                              <label class="float-right">إجابتك : {{$stanswer[1][3]['answer']}}</label>
                                                                      </div>
                                                                      <div class="col-lg-12">
                                                                              <label class="float-right">الاجابة الصحيحة : {{$quiz[3]->answers[0]['answer']}}</label>
                                                                      </div>
                                                              </div>
                                                              <hr>
                                                          </div>
                                                          @endif

                                                          @if($stanswer[0][4]== $quiz[4]->answers[0]['is_correct'])
                                                              <div class="form-group">

                                                                  <label class="float-right"> السؤال الخامس : </label>
                                                                  <br>
                                                                  <label style="color:green;" class="float-right">{{$quiz[4]->question}}</label>
                                                                  <div  style="float:left;color: green;"><i class="fa fa-check fa-3x"></i></div>
                                                              </div>
                                                               <div class="form-group">
                                                                                <div class="row" style="padding-right:10px;">
                                                                           <div class="col-lg-12">
                                                                                <label class="float-right">إجابتك : {{$stanswer[1][4]['answer']}}</label>
                                                                           </div>
                                                                      </div>
                                                                      <hr>
                                                                </div>

                                                                  @else
                                                                  <div class="form-group">

                                                                      <label class="float-right"> السؤال الخامس : </label>
                                                                      <br>
                                                                  <label style="color:red;" class="float-right">{{$quiz[4]->question}}</label>
                                                                  <div  style="float:left;color: red;"><i class="fa fa-times fa-3x"></i></div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                          <div class="row" style="padding-right:10px;">
                                                                              <div class="col-lg-12">
                                                                                      <label class="float-right">إجابتك : {{$stanswer[1][4]['answer']}}</label>
                                                                              </div>
                                                                              <div class="col-lg-12">
                                                                                      <label class="float-right">الاجابة الصحيحة : {{$quiz[4]->answers[0]['answer']}}</label>
                                                                              </div>
                                                                      </div>
                                                                      <hr>
                                                                  </div>
                                                                  @endif
                                      <div class="form-group">
                                        <label class="float-right"> النتيجة :</label>
                                        <br>
                                        <h3 style="text-align:center;">{{$grade}}  إجابات صحيحة من 5 اسئلة</h3>
                                      </div>
                              </div>
                       </form>

                      </div> <!-- /END WRAPPER -->

                  </div>
              </div>


          </div> <!-- /END OVERLAY -->

       </section>

  @endsection
