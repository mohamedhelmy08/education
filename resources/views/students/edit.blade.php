@extends('adminhome')



@section('content')

  <section class="contact dark-bg">

            <div class="color-overlay mapOverlay">

                <div class="container content" style="padding-top:60px;">

                    <div class="col-xs20 col-sm10">

                        <div class="wrapper">

                           <form action="{{url('/student/edit/'.$student->id)}}" method="post" enctype="multipart/form-data">                              {{csrf_field()}}

                            <div class="col-12">

                              <div class="col-4" style="float:left;padding-bottom:20px;">

                                <img src='{{asset('profile/'.$student->img)}}' width =' 150px' height= '150px'>

                                <input type="hidden" name="old_img" value="{{$student->img}}">

                              </div>

                              <div class="col-6">

                                @error('name')

                                    <span class="invalid-feedback" role="alert">

                                        <strong>{{ $message }}</strong>

                                    </span>

                                @enderror

                                  <!-- NAME -->

                                  <!-- <label for="name">الاسم</label> -->

                                  <input id="name" name="name" type="text" value="{{$student->name}}"

                                         placeholder="الاسم"  class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required   oninvalid="this.setCustomValidity('من فضلك ادخل حقل الاسم ')"

                                          oninput="this.setCustomValidity('')"  autofocus>

                            </div>

                            <div class="col-6">

                              @error('phone')

                                  <span class="invalid-feedback" role="alert">

                                      <strong>{{ $message }}</strong>

                                  </span>

                              @enderror

                                <!-- PHONE NUMBER -->

                                <!-- <label for="phone">الهاتف</label> -->

                                <input id="phone" required name="phone" type="tel" value="{{$student->phone}}"

                                       placeholder="الهاتف"  class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"  oninvalid="this.setCustomValidity('من فضلك ادخل حقل الهاتف ')"

                                         oninput="this.setCustomValidity('')">

                             </div>

                               <div class="col-6">

                                 @error('address')

                                     <span class="invalid-feedback" role="alert">

                                         <strong>{{ $message }}</strong>

                                     </span>

                                 @enderror

                                   <!-- ADDRESS -->

                                   <!-- <label for="address">العنوان</label> -->

                                   <input id="address" name="address" type="text" value="{{$student->address}}"

                                          placeholder="العنوان"  class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" required  autofocus oninvalid="this.setCustomValidity('من فضلك دخل حقل العنوان')"

                                      oninput="this.setCustomValidity('')">

                                </div>

                                <div class="col-6">

                                 <!-- Upload file -->

                                 @error('file')

                                     <span class="invalid-feedback" role="alert">

                                         <strong>{{ $message }}</strong>

                                     </span>

                                 @enderror

                                 <label class="file-input" for="file-input">اختر صورة</label>

                                 <input type="file" id="upload" class="custom-file-input @error('img') is-invalid @enderror" name="img" required oninvalid="this.setCustomValidity('من فضلك ارفق ملف')"

                              oninput="this.setCustomValidity('')" >

                                </div>

                               <div class="col-6">

                                 @error('stage')

                                     <span class="invalid-feedback" role="alert">

                                         <strong>{{ $message }}</strong>

                                     </span>

                                 @enderror

                                   <!-- STAGE -->

                                   <label class="select-box">

                                      <select id="selectStage" required=""  name="stage"  oninvalid="this.setCustomValidity('من فضلك اختر مرحلة')"

                                         oninput="this.setCustomValidity('')">

                                          <!-- LABEL FOR OPTIONAL SELECT BOX-->

                                          <option class="optional-select-box-label" disabled  selected> إختر المرحلة</option>

                                          <option value="1" {{($student->stage == 1)?'selected':''}}>المرحله الاولي </option>

                                          <option value="2" {{($student->stage == 2)?'selected':''}}>المرحله الثانيه </option>

                                          <option value="3" {{($student->stage == 3)?'selected':''}}>المرحله الثالثه </option>

                                      </select>

                                  </label>

                                </div>

                                <div class="form-group" style="display: none;padding-right:15px;" id="is_adaby" >

                                    <label class="float-right" for="selectStage">التخصص الدراسي </label>

                                    <div class="float-right form-check form-check-inline">

                                        <input class="form-check-input" type="radio" name="is_adaby"  value="1" {{($student->is_adaby == 1)?'checked':''}}>

                                        <label class="form-check-label" for="inlineRadio1">ادبي</label>

                                    </div>

                                    <div class="float-right form-check form-check-inline">

                                        <input class="form-check-input" type="radio" name="is_adaby" value="0" {{($student->is_adaby == 0)?'checked':''}}>

                                        <label class="form-check-label" for="inlineRadio2">علمي</label>

                                    </div>

                                     <br>

                                </div>

                                <div class="col-6">

                                    <label class="float-right" for="selectStage">مستوي الطالب</label>

                                    <div class="float-right form-check form-check-inline">

                                        <input class="form-check-input" type="radio" name="is_exellent"  value="1"  {{($student->is_excellent == 1)?'checked':''}}>

                                        <label class="form-check-label" for="inlineRadio1">ممتاز</label>

                                    </div>

                                    <div class="float-right form-check form-check-inline">

                                        <input class="form-check-input" type="radio" name="is_exellent" value="0"  {{($student->is_excellent == 0)?'checked':''}}>

                                        <label class="form-check-label" for="inlineRadio2">ضعيف</label>

                                    </div><br>

                                </div>

                              <div class="form-group row mb-0">

                                  <div class="col-md-8 offset-md-4">

                                      <button type="submit" class="btn btn-primary">

                                          {{ __('حفظ') }}

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

    @endsection

