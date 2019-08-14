@extends('adminhome')

@section('content')

<section class="contact dark-bg">

          <div class="color-overlay mapOverlay">

              <div class="container content" style="padding-top:60px;">

                  <div class="col-xs20 col-sm10">

                      <div class="wrapper">
                        <form action="{{url('/student/submitnotexam')}}" method="post" enctype="multipart/form-data">
                              {{csrf_field()}}
                              <div class="col-12">
                                  <div class="form-group">
                                      <label class="float-right">  السؤال الاول:</label>
                                      <br>
                                      <label>{{$questions[0]->question}}</label>
                                  </div>

                                  <div class="form-group">
                                      <label class="float-right">السؤال الثانى :</label>
                                      <br>
                                      <label>{{$questions[1]->question}}</label>
                                  </div>

                                  <div class="form-group">
                                      <label class="float-right">السؤال الثالث :</label>
                                      <br>
                                      <label>{{$questions[2]->question}}</label>
                                  </div>

                                  <div class="form-group">
                                      <label class="float-right"> السؤال الرابع :</label>
                                      <br>
                                      <label>{{$questions[3]->question}}</label>
                                  </div>

                                  <div class="form-group">
                                      <label class="float-right">السؤال الخامس  : </label>
                                      <br>
                                      <label>{{$questions[4]->question}}</label>
                                  </div>

                              </div>
                              @if(App\StudentAnswer::select('is_examed')->where('quiz_id','=',$questions[0]->quiz_number)->where('student_id','=',1)->get()->first()[0] === 0 || App\StudentAnswer::select('is_examed')->where('quiz_id','=',$questions[0]->quiz_number)->where('student_id','=',1)->get()->first()=== null)
                              <input type="hidden"  value="{{$questions[0]->quiz_number}}" name="q_num">
                              <div class="col-12">
                               <!-- Upload file -->
                               <label class="file-input" for="file-input">أضف صورة للحل</label>

                               <input type="file" id="upload" class="custom-file-input" name="img" required >

                              </div>
                              <div class="form-group row mb-0">

                                  <div class="col-md-12 offset-md-4">

                                      <button type="submit" class="btn btn-primary">

                                          {{ __('إضافة حل ') }}

                                      </button>

                                  </div>

                              </div>
                              @else
                              <div class="form-group">
                                  <label class="float-right">لقد قمت باجراء هذا الاختبار لا يمكنك اعادته</label>
                                  <br>
                              </div>
                              @endif
                            </form>


                      </div> <!-- /END WRAPPER -->

                  </div>

              </div>

          </div> <!-- /END OVERLAY -->

       </section>

  @endsection
