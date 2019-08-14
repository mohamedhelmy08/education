@extends('adminhome')

@section('content')

<section class="contact dark-bg">

          <div class="color-overlay mapOverlay">

              <div class="container content" style="padding-top:60px;">

                  <div class="col-xs20 col-sm10">

                      <div class="wrapper">

                        <form action="save" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="float-right" for="selectStage">نوع الاختبار</label>
                                <div class="float-right form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_mcq"  value="1">
                                    <label class="form-check-label" for="inlineRadio1">اختياري</label>
                                </div>
                                <div class="float-right form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_mcq" value="0">
                                    <label class="form-check-label" for="inlineRadio2">مقالي</label>
                                </div>
                                 <br>
                            </div>
                            <div style="display: none;" id="requireInfo">
                            <div class="form-group">
                                <label class="float-right" for="selectStage">اختر المرحله</label>
                                <select class="form-control" id="selectStage" name="stage">
                                    <option value="1">المرحله الاولي </option>
                                    <option value="2">المرحله الثانيه </option>
                                    <option value="3">المرحله الثالثه </option>
                                </select>
                            </div>
                        
                            <div class="form-group" style="display: none;" id="is_adaby">
                                <label class="float-right" for="selectStage">التخصص الدراسي </label>
                                <div class="float-right form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_adaby"  value="1" checked>
                                    <label class="form-check-label" for="inlineRadio1">ادبي</label>
                                </div>
                                <div class="float-right form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_adaby" value="0">
                                    <label class="form-check-label" for="inlineRadio2">علمي</label>
                                </div>
                                 <br>
                            </div>
                            
                            <div class="form-group">
                                <label class="float-right" for="selectStage">مستوي الطالب</label>
                                <div class="float-right form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_exellent"  value="1" checked>
                                    <label class="form-check-label" for="inlineRadio1">ممتاز</label>
                                </div>
                                <div class="float-right form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_exellent" value="0">
                                    <label class="form-check-label" for="inlineRadio2">ضعيف</label>
                                </div><br>
                            </div>
                        </div>
                        <div style="display:none" id="mcqSection">
                                <hr><h3 class="float-right" style="background-color:aquamarine"> من فضلك قم بتحديد الاجابه الصحيحه عن طريق الضغط علي العلامه المجاوره لها</h3><hr><br>
                                <div class="form-group">
                                    <label class="float-right">السؤال الاول</label>
                                    <input type="text" class="form-control"  placeholder="اضف السؤال" name="q1mcq" id="q1mcq" value="{{Request::old('q1mcq')}}">
                                </div>
                                <div class="form-group">
                                        <label class="float-right">اجابات السؤال الاول</label>
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
                                        <label class="float-right">اجابات السؤال الثاني</label>
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
                                        <label class="float-right">اجابات السؤال الثالث</label>
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
                                        <label class="float-right">اجابات السؤال الرابع</label>
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
                                        <label class="float-right">اجابات السؤال الخامس</label>
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

