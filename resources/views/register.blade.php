@extends('master-student')
@section('content')
  <section class="contact dark-bg">
            <div class="color-overlay mapOverlay">
                <div class="container" style="padding-top:60px;">
                    <div class="col-xs20 col-sm10">
                        <div class="wrapper">
                            <form method="POST" action="{{ route('studentregister') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                              @csrf
                            <div class="col-12">
                              <div class="col-6">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                  <!-- NAME -->
                                  <!-- <label for="name">الاسم</label> -->
                                  <input id="name" name="name" type="text" value=""
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
                                <input id="phone" required name="phone" type="tel" value=""
                                       placeholder="الهاتف"  class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"  oninvalid="this.setCustomValidity('من فضلك ادخل حقل الهاتف ')"
  oninput="this.setCustomValidity('')">
                             </div>
                             <div class="col-6">
                               @error('password')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                                 <!-- Password -->
                                 <!-- <label for="password">كلمة المرور</label> -->
                                 <input  placeholder="كلمة المرور" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  oninvalid="this.setCustomValidity('من فضلك ادخل كلمة المرور')"
oninput="this.setCustomValidity('')">
                              </div>
                              <div class="col-6">
                                  <!--Confirm Password -->
                                  <!-- <label for="password">تاكيد كلمة المرور</label> -->
                                  <input  placeholder="تاكيد كلمة المرور " id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  oninvalid="this.setCustomValidity('من فضلك اكد كلمة مرورك')"
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
                                          <option value ="1">الصف الاول الثانوى</option>
                                          <option value ="2">الصف الثانى الثانوى</option>
                                          <option value ="3">الصف الثالث الثانوى</option>
                                      </select>
                                  </label>
                                </div>
                                <div class="form-group" style="display: none;padding-right:15px;" id="is_adaby" >
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
                               <div class="col-6">
                                 @error('address')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                                   <!-- ADDRESS -->
                                   <!-- <label for="address">العنوان</label> -->
                                   <input id="address" name="address" type="text" value=""
                                          placeholder="العنوان"  class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" required  autofocus oninvalid="this.setCustomValidity('من فضلك دخل حقل العنوان')"
     oninput="this.setCustomValidity('')">
                                </div>
                              <div class="form-group row mb-0">
                                  <div class="col-md-8 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('تسجيل') }}
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
