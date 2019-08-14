@extends('adminhome')

@section('content')

<section class="contact dark-bg">

          <div class="color-overlay mapOverlay">

              <div class="container content" style="padding-top:60px;">

                  <div class="col-xs20 col-sm10">

                      <div class="wrapper">

                      <form action="{{url('exam/edit')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="questions_ids" value="{{$quiz[0]->id}},{{$quiz[1]->id}},{{$quiz[2]->id}},{{$quiz[3]->id}},{{$quiz[4]->id}}">
                            <div class="form-group">
                                <label class="float-right" for="selectStage">نوع الاختبار</label>
                                <div class="float-right form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_mcq"  value="1" {{ ( $quiz[0]->is_mcq == 1)?'checked':''}}>
                                    <label class="form-check-label" for="inlineRadio1">اختياري</label>
                                </div>
                                <div class="float-right form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_mcq" value="0" {{ ( $quiz[0]->is_mcq == 0)?'checked':''}}>
                                    <label class="form-check-label" for="inlineRadio2">مقالي</label>
                                </div>
                                 <br>
                            </div>
                            <div style="display: none;" id="requireInfo">
                            <div class="form-group">
                                <label class="float-right" for="selectStage">اختر المرحله</label>
                                <select class="form-control" id="selectStage" name="stage">
                                    <option value="1"{{ ( $quiz[0]->stage == 1)?'selected':''}}>المرحله الاولي </option>
                                    <option value="2"{{ ( $quiz[0]->stage == 2)?'selected':''}}>المرحله الثانيه </option>
                                    <option value="3"{{ ( $quiz[0]->stage == 3)?'selected':''}}>المرحله الثالثه </option>
                                </select>
                            </div>
                        
                            <div class="form-group" style="display: none;" id="is_adaby">
                                <label class="float-right" for="selectStage">التخصص الدراسي </label>
                                <div class="float-right form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_adaby"  value="1" {{ ( $quiz[0]->is_adaby == 1)?'checked':''}}>
                                    <label class="form-check-label" for="inlineRadio1">ادبي</label>
                                </div>
                                <div class="float-right form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_adaby" value="0" {{ ( $quiz[0]->is_adaby == 0)?'checked':''}}>
                                    <label class="form-check-label" for="inlineRadio2">علمي</label>
                                </div>
                                 <br>
                            </div>
                            
                            <div class="form-group">
                                <label class="float-right" for="selectStage">مستوي الطالب</label>
                                <div class="float-right form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_exellent"  value="1" {{ ( $quiz[0]->is_exellent == 0)?'checked':''}}>
                                    <label class="form-check-label" for="inlineRadio1">ممتاز</label>
                                </div>
                                <div class="float-right form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_exellent" value="0" {{ ( $quiz[0]->is_exellent == 0)?'checked':''}}>
                                    <label class="form-check-label" for="inlineRadio2">ضعيف</label>
                                </div><br>
                            </div>
                        </div>
                        <div style="display:none" id="mcqSection">
                                <hr><h3 class="float-right" style="background-color:aquamarine"> من فضلك قم بتحديد الاجابه الصحيحه عن طريق الضغط علي العلامه المجاوره لها</h3><hr><br>
                                <div class="form-group">

                                <label class="float-right">السؤال الاول</label>
                                <input type="text" class="form-control"  placeholder="اضف السؤال" name="q1mcq" id="q1mcq" value="{{$quiz[0]->question}}">
                                </div>
                                <div class="form-group">
                                        <label class="float-right">اجابات السؤال الاول</label>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q1mcqA1" value="{{$quiz[0]->answers[0]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q1mcqTrue" value="1" {{($quiz[0]->answers[0]->is_correct == 1)?"checked":""}}>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q1mcqA2" value="{{$quiz[0]->answers[1]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q1mcqTrue" value="2" {{($quiz[0]->answers[1]->is_correct == 1)?"checked":""}}>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q1mcqA3" value="{{$quiz[0]->answers[2]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q1mcqTrue" value="3" {{($quiz[0]->answers[2]->is_correct == 1)?"checked":""}}>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q1mcqA4" value="{{$quiz[0]->answers[3]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q1mcqTrue" value="4" {{($quiz[0]->answers[3]->is_correct == 1)?"checked":""}}>
                                            </div>
                                    </div>
                                    <hr>
                                    </div>
                                <div class="form-group">
                                    <label class="float-right">السؤال الثاني</label>
                                    <input type="text" class="form-control"  placeholder="اضف السؤال" name="q2mcq" id="q2mcq" value="{{$quiz[1]->question}}">
                                </div>
                                <div class="form-group">
                                        <label class="float-right">اجابات السؤال الثاني</label>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q2mcqA1" value="{{$quiz[1]->answers[0]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q2mcqTrue" value="1" {{($quiz[1]->answers[0]->is_correct == 1)?"checked":""}}>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q2mcqA2" value="{{$quiz[1]->answers[1]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q2mcqTrue" value="2" {{($quiz[1]->answers[1]->is_correct == 1)?"checked":""}}>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q2mcqA3" value="{{$quiz[1]->answers[2]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q2mcqTrue" value="3" {{($quiz[1]->answers[2]->is_correct == 1)?"checked":""}}>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q2mcqA4" value="{{$quiz[1]->answers[3]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q2mcqTrue" value="4" {{($quiz[1]->answers[3]->is_correct == 1)?"checked":""}}>
                                            </div>
                                    </div>
                                    <hr>
                                    </div>
                                
                                <div class="form-group">
                                    <label class="float-right">السؤال الثالث</label>
                                    <input type="text" class="form-control"  placeholder="اضف السؤال" name="q3mcq" id="q3mcq" value="{{$quiz[2]->question}}">
                                </div>
                                <div class="form-group">
                                        <label class="float-right">اجابات السؤال الثالث</label>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q3mcqA1" value="{{$quiz[2]->answers[0]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q3mcqTrue" value="1" {{($quiz[2]->answers[0]->is_correct == 1)?"checked":""}}>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q3mcqA2" value="{{$quiz[2]->answers[1]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q3mcqTrue" value="2" {{($quiz[2]->answers[1]->is_correct == 1)?"checked":""}}>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q3mcqA3" value="{{$quiz[2]->answers[2]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q3mcqTrue" value="3" {{($quiz[2]->answers[2]->is_correct == 1)?"checked":""}}>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q3mcqA4" value="{{$quiz[2]->answers[3]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q3mcqTrue" value="4" {{($quiz[2]->answers[3]->is_correct == 1)?"checked":""}}>
                                            </div>
                                    </div>
                                    <hr>
                                    </div>
                                
                                <div class="form-group">
                                    <label class="float-right">السؤال الرابع</label>
                                    <input type="text" class="form-control"  placeholder="اضف السؤال" name="q4mcq" id="q4mcq" value="{{$quiz[3]->question}}">
                                </div>
                                <div class="form-group">
                                        <label class="float-right">اجابات السؤال الرابع</label>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q4mcqA1" value="{{$quiz[3]->answers[0]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q4mcqTrue" value="1" {{($quiz[3]->answers[0]->is_correct == 1)?"checked":""}}>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q4mcqA2" value="{{$quiz[3]->answers[1]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q4mcqTrue" value="2" {{($quiz[3]->answers[1]->is_correct == 1)?"checked":""}}>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q4mcqA3" value="{{$quiz[3]->answers[2]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q4mcqTrue" value="3" {{($quiz[3]->answers[2]->is_correct == 1)?"checked":""}}>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q4mcqA4" value="{{$quiz[3]->answers[3]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q4mcqTrue" value="4" {{($quiz[3]->answers[3]->is_correct == 1)?"checked":""}}>
                                            </div>
                                    </div>
                                    <hr>
                                    </div>
                                
                                <div class="form-group">
                                    <label class="float-right">السؤال الخامس</label>
                                    <input type="text" class="form-control"  placeholder="اضف السؤال" name="q5mcq" id="q5mcq" value="{{$quiz[4]->question}}">
                                </div>
                                <div class="form-group">
                                        <label class="float-right">اجابات السؤال الخامس</label>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q5mcqA1" value="{{$quiz[4]->answers[0]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q5mcqTrue" value="1" {{($quiz[4]->answers[0]->is_correct == 1)?"checked":""}}>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q5mcqA2" value="{{$quiz[4]->answers[1]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q5mcqTrue" value="2" {{($quiz[4]->answers[1]->is_correct == 1)?"checked":""}}>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q5mcqA3" value="{{$quiz[4]->answers[2]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q5mcqTrue" value="3" {{($quiz[4]->answers[2]->is_correct == 1)?"checked":""}}>
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="text" class="form-control float-right"  placeholder="" name="q5mcqA4" value="{{$quiz[4]->answers[3]->answer}}">
                                                    <input class="form-check-input" type="radio" name="q5mcqTrue" value="4" {{($quiz[4]->answers[3]->is_correct == 1)?"checked":""}}>
                                            </div>
                                    </div>
                                    <hr>
                                    </div>
                                
                                <button type="submit" class="float-right btn btn-primary" style="color:#e74c3c;margin-bottom:5px">حفظ</button>
                            </div>

                            <div style="display:none" id="noMcqSection">
                                    <div class="form-group">
                                        <label class="float-right">السؤال الاول</label>
                                        <input type="text" class="form-control"  placeholder="" name="q1" id="q1" value="{{Request::old('q1')}}">
                                    </div>
                            
                                    <div class="form-group">
                                        <label class="float-right">السؤال الثاني</label>
                                        <input type="text" class="form-control"  placeholder="" name="q2" id="q2" value="{{Request::old('q2')}}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="float-right">السؤال الثالث</label>
                                        <input type="text" class="form-control"  placeholder="" name="q3" id="q3" value="{{Request::old('q3')}}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="float-right">السؤال الرابع</label>
                                        <input type="text" class="form-control"  placeholder="" name="q4" id="q4" value="{{Request::old('q4')}}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="float-right">السؤال الخامس</label>
                                        <input type="text" class="form-control"  placeholder="" name="q5" id="q5" value="{{Request::old('q5')}}">
                                    </div>
                                    
                                    <button type="submit" class="float-right btn btn-primary" style="color:#e74c3c;margin-bottom:5px">حفظ</button>
                                </div>   
    
                          
                            
                          </form>



                      </div> <!-- /END WRAPPER -->

                  </div>

              </div>

          </div> <!-- /END OVERLAY -->

       </section>

  @endsection

