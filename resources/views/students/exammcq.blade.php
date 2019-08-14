@extends('studenthome')

@section('content')

<section class="contact dark-bg">

          <div class="color-overlay mapOverlay">

              <div class="container content" style="padding-top:60px;">

                  <div class="col-xs20 col-sm10">

                      <div class="wrapper">

                         <form action="{{url('/student/submitmcqexam')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                       <!--<div>
                                <hr><h3 class="float-right" style="background-color:aquamarine"> من فضلك قم بتحديد الاجابه الصحيحه عن طريق الضغط علي العلامه المجاوره لها</h3><hr><br>
                                <div class="form-group">
                                    <label class="float-right">السؤال الاول</label>
                                    <input type="text" class="form-control"  placeholder="اضف السؤال" name="q1mcq" id="q1mcq" value="{{Request::old('q1mcq')}}">
                                </div>
                                <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q1mcqA1">
                                                    <input class="form-check-input" type="radio" name="q1mcqTrue" value="1" checked>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q1mcqA2">
                                                    <input class="form-check-input" type="radio" name="q1mcqTrue" value="2">
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q1mcqA3">
                                                    <input class="form-check-input" type="radio" name="q1mcqTrue" value="3">
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q1mcqA4">
                                                    <input class="form-check-input" type="radio" name="q1mcqTrue" value="4">
                                            </div>
                                    </div>
                                    <hr>
                                    </div>
                                <div class="form-group">
                                    <label class="float-right">السؤال الثاني</label>
                                    <input type="text" class="form-control"  placeholder="اضف السؤال" name="q2mcq" id="q2mcq" value="{{Request::old('q2mcq')}}">
                                </div>
                                <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q2mcqA1">
                                                    <input class="form-check-input" type="radio" name="q2mcqTrue" value="1" checked>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q2mcqA2">
                                                    <input class="form-check-input" type="radio" name="q2mcqTrue" value="2">
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q2mcqA3">
                                                    <input class="form-check-input" type="radio" name="q2mcqTrue" value="3">
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q2mcqA4">
                                                    <input class="form-check-input" type="radio" name="q2mcqTrue" value="4">
                                            </div>
                                    </div>
                                    <hr>
                                    </div>

                                <div class="form-group">
                                    <label class="float-right">السؤال الثالث</label>
                                    <input type="text" class="form-control"  placeholder="اضف السؤال" name="q3mcq" id="q3mcq" value="{{Request::old('q3mcq')}}">
                                </div>
                                <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q3mcqA1">
                                                    <input class="form-check-input" type="radio" name="q3mcqTrue" value="1" checked>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q3mcqA2">
                                                    <input class="form-check-input" type="radio" name="q3mcqTrue" value="2">
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q3mcqA3">
                                                    <input class="form-check-input" type="radio" name="q3mcqTrue" value="3">
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q3mcqA4">
                                                    <input class="form-check-input" type="radio" name="q3mcqTrue" value="4">
                                            </div>
                                    </div>
                                    <hr>
                                    </div>

                                <div class="form-group">
                                    <label class="float-right">السؤال الرابع</label>
                                    <input type="text" class="form-control"  placeholder="اضف السؤال" name="q4mcq" id="q4mcq" value="{{Request::old('q4mcq')}}">
                                </div>
                                <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q4mcqA1">
                                                    <input class="form-check-input" type="radio" name="q4mcqTrue" value="1" checked>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q4mcqA2">
                                                    <input class="form-check-input" type="radio" name="q4mcqTrue" value="2">
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q4mcqA3">
                                                    <input class="form-check-input" type="radio" name="q4mcqTrue" value="3">
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q4mcqA4">
                                                    <input class="form-check-input" type="radio" name="q4mcqTrue" value="4">
                                            </div>
                                    </div>
                                    <hr>
                                    </div>

                                <div class="form-group">
                                    <label class="float-right">السؤال الخامس</label>
                                    <input type="text" class="form-control"  placeholder="اضف السؤال" name="q5mcq" id="q5mcq" value="{{Request::old('q5mcq')}}">
                                </div>
                                <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q5mcqA1">
                                                    <input class="form-check-input" type="radio" name="q5mcqTrue" value="1" checked>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q5mcqA2">
                                                    <input class="form-check-input" type="radio" name="q5mcqTrue" value="2">
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q5mcqA3">
                                                    <input class="form-check-input" type="radio" name="q5mcqTrue" value="3">
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q5mcqA4">
                                                    <input class="form-check-input" type="radio" name="q5mcqTrue" value="4">
                                            </div>
                                    </div>
                                    <hr>
                                    </div>

                                <button type="submit" class="float-right btn btn-primary" style="color:#e74c3c;margin-bottom:5px">حفظ</button>
                            </div>
                          </form> -->
                      <div class="col-12">
                         <hr><h3 class="float-right" style="background-color:aquamarine"> من فضلك قم بتحديد الاجابه الصحيحه عن طريق الضغط علي العلامه المجاوره لها</h3><hr><br>
                                  <div class="form-group">

                                  <label class="float-right"> السؤال الاول : </label>
                                  <br>
                                  <label class="float-right">{{$quiz[0]->question}}</label>
                                  </div>
                                  <div class="form-group">
                                          <div class="row" style="padding-right:10px;">
                                              <div class="col-lg-12">
                                                      <input class="form-check-input" type="radio" name="q1mcqTrue" value="1,{{$quiz[0]->answers[0]['answer']}}">
                                                      <label class="float-right">{{$quiz[0]->answers[0]['answer']}}</label>
                                              </div>
                                              <div class="col-lg-12">
                                                      <input class="form-check-input" type="radio" name="q1mcqTrue" value="2,{{$quiz[0]->answers[1]['answer']}}">
                                                      <label class="float-right">{{$quiz[0]->answers[1]['answer']}}</label>
                                              </div>
                                              <div class="col-lg-12">
                                                      <input class="form-check-input" type="radio" name="q1mcqTrue" value="3,{{$quiz[0]->answers[2]['answer']}}">
                                                      <label class="float-right">{{$quiz[0]->answers[2]['answer']}}</label>
                                              </div>
                                              <div class="col-lg-12">
                                                      <input class="form-check-input" type="radio" name="q1mcqTrue" value="4,{{$quiz[0]->answers[3]['answer']}}">
                                                      <label class="float-right">{{$quiz[0]->answers[3]['answer']}}</label>
                                              </div>
                                      </div>
                                      <hr>
                                      </div>
                                  <div class="form-group">
                                      <label class="float-right"> السوال  الثانى : </label>
                                      <br>
                                      <label >{{$quiz[1]->question}}</label>

                                  </div>
                                  <div class="form-group">
                                          <div class="row" style="padding-right:10px;">
                                              <div class="col-lg-12">
                                                      <input class="form-check-input" type="radio" name="q2mcqTrue" value="1,{{$quiz[1]->answers[0]['answer']}}" >
                                                      <label >{{$quiz[1]->answers[0]['answer']}}</label>
                                              </div>
                                              <div class="col-lg-12">
                                                      <input class="form-check-input" type="radio" name="q2mcqTrue" value="2,{{$quiz[1]->answers[1]['answer']}}" >
                                                      <label >{{$quiz[1]->answers[1]['answer']}}</label>
                                              </div>
                                              <div class="col-lg-12">
                                                      <input class="form-check-input" type="radio" name="q2mcqTrue" value="3,{{$quiz[1]->answers[2]['answer']}}" >
                                                      <label >{{$quiz[1]->answers[2]['answer']}}</label>
                                              </div>
                                              <div class="col-lg-12">
                                                      <input class="form-check-input" type="radio" name="q2mcqTrue" value="4,{{$quiz[1]->answers[3]['answer']}}" >
                                                      <label >{{$quiz[1]->answers[3]['answer']}}</label>
                                              </div>
                                      </div>
                                      <hr>
                                      </div>

                                  <div class="form-group">
                                    <label class="float-right"> السؤال الثالث :</label>
                                    <br>
                                    <label >{{$quiz[2]->question}}</label>
                                  </div>
                                  <div class="form-group">
                                              <div class="row" style="padding-right:10px;">
                                                <div class="col-lg-12" >
                                                      <input class="form-check-input" type="radio" name="q3mcqTrue" value="1,{{$quiz[2]->answers[0]['answer']}}" >
                                                      <label >{{$quiz[2]->answers[0]['answer']}}</label>
                                              </div>
                                              <div class="col-lg-12" >
                                                    <input class="form-check-input" type="radio" name="q3mcqTrue" value="2,{{$quiz[2]->answers[1]['answer']}}" >
                                                    <label >{{$quiz[2]->answers[1]['answer']}}</label>
                                            </div>
                                            <div class="col-lg-12" >
                                                  <input class="form-check-input" type="radio" name="q3mcqTrue" value="3,{{$quiz[2]->answers[2]['answer']}}" >
                                                  <label >{{$quiz[2]->answers[2]['answer']}}</label>
                                          </div>
                                          <div class="col-lg-12" >
                                                <input class="form-check-input" type="radio" name="q3mcqTrue" value="4,{{$quiz[2]->answers[3]['answer']}}" >
                                                <label >{{$quiz[2]->answers[3]['answer']}}</label>
                                        </div>
                                      </div>
                                      <hr>
                                      </div>

                                  <div class="form-group">
                                    <label class="float-right"> السؤال الرابع :</label>
                                    <br>
                                    <label >{{$quiz[3]->question}}</label>
                                  </div>
                                  <div class="form-group">
                                          <div class="row" style="padding-right:10px;">
                                              <div class="col-lg-12">
                                                      <input class="form-check-input" type="radio" name="q4mcqTrue" value="1,{{$quiz[3]->answers[0]['answer']}}">
                                                        <label >{{$quiz[3]->answers[0]['answer']}}</label>
                                              </div>
                                              <div class="col-lg-12">
                                                      <input class="form-check-input" type="radio" name="q4mcqTrue" value="2,{{$quiz[3]->answers[1]['answer']}}">
                                                        <label >{{$quiz[3]->answers[1]['answer']}}</label>
                                              </div>
                                              <div class="col-lg-12">
                                                      <input class="form-check-input" type="radio" name="q4mcqTrue" value="3,{{$quiz[3]->answers[2]['answer']}}">
                                                        <label >{{$quiz[3]->answers[2]['answer']}}</label>
                                              </div>
                                              <div class="col-lg-12">
                                                      <input class="form-check-input" type="radio" name="q4mcqTrue" value="4,{{$quiz[3]->answers[3]['answer']}}">
                                                        <label >{{$quiz[3]->answers[3]['answer']}}</label>
                                              </div>
                                      </div>
                                      <hr>
                                      </div>

                                  <div class="form-group">
                                    <label class="float-right"> السؤال الخامس :</label>
                                    <br>
                                    <label >{{$quiz[4]->question}}</label>
                                  </div>
                                  <div class="form-group">
                                          <div class="row" style="padding-right:10px;">
                                              <div class="col-lg-12">
                                                      <input class="form-check-input" type="radio" name="q5mcqTrue" value="1,{{$quiz[4]->answers[0]['answer']}}" >
                                                      <label >{{$quiz[4]->answers[0]['answer']}}</label>
                                              </div>
                                              <div class="col-lg-12">
                                                      <input class="form-check-input" type="radio" name="q5mcqTrue" value="2,{{$quiz[4]->answers[1]['answer']}}" >
                                                      <label >{{$quiz[4]->answers[1]['answer']}}</label>
                                              </div>
                                              <div class="col-lg-12">
                                                      <input class="form-check-input" type="radio" name="q5mcqTrue" value="3,{{$quiz[4]->answers[2]['answer']}}" >
                                                      <label >{{$quiz[4]->answers[2]['answer']}}</label>
                                              </div>
                                              <div class="col-lg-12">
                                                      <input class="form-check-input" type="radio" name="q5mcqTrue" value="4,{{$quiz[4]->answers[3]['answer']}}" >
                                                      <label >{{$quiz[4]->answers[3]['answer']}}</label>
                                              </div>
                                      </div>
                                      <hr>
                                      </div>
                                      <input  type="hidden" name="q_num" value="{{$quiz[0]->quiz_number}}" >
                                      @if(App\StudentAnswer::select('is_examed')->where('quiz_id','=',$quiz[0]->quiz_number)->where('is_mcq','=',1)->where('student_id','=',1)->get()->first()['is_examed']== null || App\StudentAnswer::select('is_examed')->where('quiz_id','=',$quiz[0]->quiz_number)->where('is_mcq','=',1)->where('student_id','=',1)->get()->last()['is_examed']== '1')
                                      <div class="form-group row mb-0">

                                          <div class="col-md-12 offset-md-4">

                                              <button type="submit" class="btn btn-primary">

                                                  {{ __('النتيجة') }}
                                              </button>

                                          </div>

                                      </div>
                                      @else
                                      <div class="form-group row mb-0">

                                          <div class="col-md-12 offset-md-4" style="text-align:center;">

                                            <label>لقد قمت اباجراء هذا الامتحان لا يمكن اعادته مرة اخرى</label>

                                          </div>

                                      </div>
                                      @endif
                              </div>
                       </form>

                      </div> <!-- /END WRAPPER -->

                  </div>

              </div>

          </div> <!-- /END OVERLAY -->

       </section>

  @endsection
