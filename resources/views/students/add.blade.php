@extends('master-admin')
@section('content')

<!-- <form action="save" method="post" enctype="multipart/form-data">

    {{csrf_field()}}

    <div class="form-group">

      <label class="float-right">الاسم</label>

    <input type="text" class="form-control"  placeholder="ادخل الاسم" name="name" value="{{Request::old('name')}}">

    </div>



    <div class="form-group">

        <label class="float-right">رقم الموبايل </label>

        <input type="text" class="form-control"  placeholder="ادخل رقم الموبايل"name="phone" value="{{Request::old('phone')}}">

    </div>



    <div class="form-group">

        <label class="float-right">كلمه المرور</label>

        <input type="password" class="form-control"  placeholder="ادخل كلمه المرور"name="password">

    </div>



    <div class="form-group">

        <label class="float-right">اعد كتابه كلمه المرور </label>

        <input type="password" class="form-control"  placeholder="اعد كتابه كلمه المرور "name="cpassword">

    </div>



    <div class="form-group">

            <label class="float-right">العنوان</label>

            <input type="text" class="form-control"  placeholder="ادخل العنوان"name="address" value="{{Request::old('address')}}">

        </div>



    <div class="form-group">

        <label class="float-right">اختر صوره</label>

        <div class="input-group">

            <div class="custom-file">

                <input type="file" class="custom-file-input" name="img">

                <label class="custom-file-label" for="inputGroupFile04">اختر صوره</label>

            </div>

        </div>

    </div>



    <div class="form-group">

        <label class="float-right" for="selectStage">اختر المرحله</label>

        <select class="form-control" id="selectStage" name="stage">

            <option>اختر المرحله</option>

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







    <button type="submit" class="float-right btn btn-primary">حفظ</button>

  </form>

</div> -->

<section class="contact dark-bg">

          <div class="color-overlay mapOverlay">

              <div class="container content" style="padding-top:60px;">

                  <div class="col-xs20 col-sm10">

                      <div class="wrapper">

                        <form action="{{url('/student/save')}}" method="post" enctype="multipart/form-data">

                            {{csrf_field()}}

                          <div class="col-12">

                            <div class="col-6">

                              @error('name')

                                  <span class="invalid-feedback" role="alert">

                                      <strong>{{ $message }}</strong>

                                  </span>

                              @enderror

                                <!-- NAME -->

                                <!-- <label for="name">الاسم</label> -->

                                <input id="name" name="name" type="text" value="{{Request::old('name')}}"

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

                              <input id="phone" required name="phone" type="tel" value="{{Request::old('phone')}}"

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

                                <input  placeholder="تاكيد كلمة المرور " id="password-confirm" type="password" class="form-control" name="cpassword" required autocomplete="new-password"  oninvalid="this.setCustomValidity('من فضلك اكد كلمة مرورك')"

oninput="this.setCustomValidity('')" >

                             </div>

                             <div class="col-6">

                               @error('address')

                                   <span class="invalid-feedback" role="alert">

                                       <strong>{{ $message }}</strong>

                                   </span>

                               @enderror

                                 <!-- ADDRESS -->

                                 <!-- <label for="address">العنوان</label> -->

                                 <input id="address" name="address" type="text" value="{{Request::old('address')}}"

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
