@extends('master-student')
@section('content')

 <section class="contact dark-bg">

             <div class="color-overlay mapOverlay">

                 <div class="container content" style="padding-top:60px;">
                   @if(count($errors)>0)
                       <div class="alert alert-danger">
                           <ul>
                           @foreach($errors->all() as $error)
                               <li>{{ $error }}</li>
                           @endforeach
                           </ul>
                       </div>
                   @endif

                 @if(Session::has('alert'))
                       <center>
                           <div>
                               <?php $a = [];  $a = session()->pull('alert')  ?>
                               @if($a[0]=="Danger")
                                   <div class="alert alert-danger">
                                       <label>{{$a[1]}}</label>
                                   </div>
                               @else
                                   <div class="alert alert-success">
                                      <label>{{$a[1]}}</label>
                                   </div>
                               @endif
                           </div>
                       </center>
                  @endif
                     <div class="col-xs20 col-sm10">

                         <div class="wrapper">
                           <div class="col-md-3"style="float:right;padding-left:40px;">
                               <h3>الملف الشخصى</h3>
                           </div>
                           <ul class="social-navigation" style="float:left;padding-left:40px;">



                               <li><a href="#" class="count icon"><i>{{$examscount}}<br> اختبارات</i></a></li>
                               <li><a href="#" class="icon count"><i>{{$donexams}}<br> منفذة</i></a></li>
                               <li><a href="#" class="icon count"><i>{{round($donexams/$examscount*100,1)}}%<br> النسبة</i></a></li>


                           </ul>
                       <form action="#" method="post" enctype="multipart/form-data">
                         <div class="col-12">
                            <div  class="row" style="padding-top: 10px;
                            padding-right: 10px;padding-left: 10px;">
                                      <div  class="col-md-2" style="float:left;padding-left:10px;padding-bottom:20px;">
                                        <div>
                                                  <img src="/profile/{{$students->img}}"class="" alt="..." id="upfile1" style="cursor:pointer" height="100" width="150" align="right">
                                        </div>
                                      </div>
                                        <div  class="col-md-8">
                                            <div class="form-group">
                                                <input class="" disabled="" placeholder="الاسم" type="text" value="{{$students->name}}">
                                            </div>
                                        </div>
                                        <div  class="col-md-8">
                                            <div class="form-group">
                                                <input class="" disabled=""  placeholder="الهاتف" type="text" value="{{$students->phone}}">
                                            </div>
                                        </div>
                                        <div  class="col-md-8">
                                            <div class="form-group">
                                                <input class="" disabled=""  placeholder="العنوان" type="text" value="{{$students->address}}">
                                            </div>
                                        </div>
                                      <div  class="col-md-8">
                                        <div class="row">
                                            <div  class="col-md-6">
                                                <div class="form-group">
                                                  @if($students->stage == 1)
                                                  <input class="" disabled=""  placeholder="المرحلة" type="text" value="المرحلة الاولى">
                                                   @elseif($students->stage ==2)
                                                   @if($students->is_adaby == 1)
                                                   <input class="" disabled=""  placeholder="المرحلة" type="text" value="المرحلة الثانية  / أدبى">
                                                   @else
                                                   <input class="" disabled=""  placeholder="المرحلة" type="text" value="المرحلة الثانية  / علمى">
                                                   @endif
                                                  @else
                                                  <input class="" disabled=""  placeholder="المرحلة" type="text" value="المرحلة الثالثة">
                                                  @endif
                                                </div>
                                            </div>
                                            <div  class="col-md-6">
                                                <div class="form-group">
                                                  @if($students->is_excellent == 1)
                                                    <input class="" disabled=""  placeholder="المستوى" type="text" value="ممتاز">
                                                  @else
                                                  <input class="" disabled=""  placeholder="المستوى" type="text" value="ضعيف">
                                                  @endif
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                    <div  class="col-md-12">
                                          <button type="button" style=" margin-right:20px;margin-bottom:10px;width:154.67px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModalpass"   > تغير كلمة  المرور </button>
                                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#profileexampleModal"   > تعديل الملف الشخصى   </button>

                                    </div>

                             </div>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </section>

            <!-- Profile Modal-->
<div class="modal fade float-right" id="profileexampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">تعديل الملف الشخصى</h5>
      </div>
      <div class="modal-body">
      <form  id="edit-form" method="POST" action="{{url('/student/editprofile/'.$students->id)}}" enctype="multipart/form-data">
             @csrf

            <input  name="name" class="form-control" placeholder="الاسم" type="text" value="{{$students->name}}">
            <br/>
            <input name ="phone" class="form-control" placeholder="الهاتف" type="text" value="{{$students->phone}}">
            <br/>
             <label class="file-input" for="file-input">اختر صورة</label>

             <input type="file" id="upload" class="custom-file-input" name="img" required oninvalid="this.setCustomValidity('من فضلك ارفق ملف')"

                oninput="this.setCustomValidity('')" >
            </br>

           <label class="select-box">

              <select id="selectStage" required=""  name="stage"  oninvalid="this.setCustomValidity('من فضلك اختر مرحلة')"

                 oninput="this.setCustomValidity('')">

                  <!-- LABEL FOR OPTIONAL SELECT BOX-->

                  <option class="optional-select-box-label" disabled  selected> إختر المرحلة</option>

                  <option value="1" {{($students->stage == 1)?'selected':''}}>المرحله الاولي </option>

                  <option value="2" {{($students->stage == 2)?'selected':''}}>المرحله الثانيه /أدابى</option>
                  <option value="3" {{($students->stage == 2)?'selected':''}}>المرحله الثانيه  / علمى </option>

                  <option value="4" {{($students->stage == 3)?'selected':''}}>المرحله الثالثه </option>

              </select>

          </label>
            <input name ="address" class="form-control" placeholder="العنوان" type="text" value="{{$students->address}}">
            </form>
          </div>
      <div class="modal-footer">
            <button class="btn btn-standard" type="button" data-dismiss="modal">الغاء</button>
            <a class="btn btn-standard" href="{{ url('/student/editprofile/'.$students->id) }}"
           onclick="event.preventDefault();
                         document.getElementById('edit-form').submit();">
            {{ __('تعديل') }}
              </a>
      </div>
        </div>
      </div>
  </div>
                <!-- Change Password Modal-->
<div class="modal fade" id="exampleModalpass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">تغير كلمة المرور</h5>
          </div>
          <div class="modal-body">
           <form action="{{ url('/student/update_student_password') }}" method="post" id="changpass-form" enctype="multipart/form-data">
                    {{csrf_field()}}
              <div class="form-group{{ $errors->has('old') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">كلمة المرور القديمة</label>

                            <div>
                                <input id="password" type="password" class="form-control" name="old" required="Please fill this">

                                @if ($errors->has('old'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('old') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class=" control-label">كلمة مرور جديدة</label>

                                <div>
                                    <input id="password" type="password" class="form-control" name="password" required="Please fill this">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                      <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="control-label">أكد كلمة المرور</label>

                                <div>
                                    <input id="password-confirm" type="password" class="form-control" name="cpassword" required="Please fill this">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                  </div>
           </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-standard" type="button" data-dismiss="modal">الغاء</button>
            <a class="btn btn-standard" href="{{ url('/student/update_student_password') }}"
           onclick="event.preventDefault();
                         document.getElementById('changpass-form').submit();">
            {{ __('تغير كلمة المرور') }}
              </a>
          </div>
        </div>
      </div>
  </div>
    </div>
  @endsection
