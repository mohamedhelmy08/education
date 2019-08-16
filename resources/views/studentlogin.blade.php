@extends('master-student')
@section('content')
  <section class="contact dark-bg">
            <div class="color-overlay mapOverlay">
                <div class="container content" style="padding-top:130px;">
                    <div class="col-xs20 col-sm10">
                        <div class="wrapper">
                          @if($errors->any())
                          <h4 style="color:red;">{{$errors->first()}}</h4>
                          @endif

                            <form method="POST" action="{{ route('studentlogin') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                              @csrf
                            <div class="col-12">
                            <div class="col-6">
                              @error('phone')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                                <!-- PHONE NUMBER -->
                                <!-- <label for="phone">الهاتف</label> -->
                                <input id="phone" name="phone" type="tel" value=""
                                       placeholder="الهاتف"  class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required  autofocus oninvalid="this.setCustomValidity('من فضلك دخل حقل الهاتف')"
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
                                 <input  placeholder="كلمة المرور" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" oninvalid="this.setCustomValidity('من فضلك ادخل كلمة المرور')"
oninput="this.setCustomValidity('')">
                              </div>
                              <!-- <div class="form-group row">
                                  <div class="col-md-6 offset-md-4">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                          <label for="password" >
                                              {{ __('تذكرنى') }}
                                          </label>
                                      </div>
                                  </div>
                              </div> -->
                              <div class="form-group row mb-0">
                                <div class="col-md-4">

                                     @if (Route::has('password.request'))
                                         <!-- <a class="btn btn-link" href="{{ route('password.request') }}"> -->
                                         <a class="btn btn-link" href="#">
                                             {{ __('هل نسيت كلمة المرور؟') }}
                                         </a>
                                     @endif
                                 </div>
                                  <div class="col-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('دخول') }}
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
