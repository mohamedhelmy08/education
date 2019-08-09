@extends('adminhome')
@section('content')
     <section class="course dark-bg" style="padding-top:60px;">
            <div class="color-overlay mapOverlay">
                <div class="container conten2" style="padding-top:60px;">
                    <div class="col-xs20 col-sm10">
                        <div class="wrapper">
                            <form method="POST" action="{{ route('addfile') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                              @csrf
                              <div class="col-8">
                                @error('file_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!-- NAME -->
                                  <!-- <label for="file_name"> إسم الملف </label> -->
                                  <input id="name" name="file_name" type="text" value=""
                                         placeholder="إسم الملف "  class="form-control @error('file_name') is-invalid @enderror" value="" required  autofocus oninvalid="this.setCustomValidity('من فضلك ادخل اسم الملف')"
    oninput="this.setCustomValidity('')">
                            </div>
                               <div class="col-8">
                                   <!-- STAGE -->
                                   @error('stage')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                                   <label class="select-box">
                                      <select id="selectStage" required=""  name="stage" oninvalid="this.setCustomValidity('من فضلك اختر مرحلة')"
 oninput="this.setCustomValidity('')">
                                          <!-- LABEL FOR OPTIONAL SELECT BOX-->
                                          <option class="optional-select-box-label" disabled  selected> إختر المرحلة</option>
                                          <option value ="1">الصف الاول الثانوى</option>
                                          <option value ="2">الصف الثانى الثانوى</option>
                                          <option value ="3">الصف الثالث الثانوى</option>
                                      </select>
                                  </label>
                                </div>
                                <div class="col-8" style="display: none;text-align:center;" id="is_adaby">
                                <label>التخصص الدراسي </label>
                                <div>
                                    <input  type="radio" name="is_adaby"  value="1" checked>
                                    <label>ادبي</label>
                                </div>
                                <div>
                                    <input  type="radio" name="is_adaby" value="0">
                                    <label>علمي</label>
                                </div>
                                </div>
                                <div class="col-8">
                                 <!-- Upload file -->
                                 @error('file')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                                 <label class="file-input" for="file-input">أرفق ملف الحصة الجديدة</label>
                                 <input type="file" id="upload" class="custom-file-input @error('file') is-invalid @enderror" name="file" required oninvalid="this.setCustomValidity('من فضلك ارفق ملف')"
oninput="this.setCustomValidity('')" >
                                </div>
                              <div class="form-group row mb-0">
                                  <div class="col-md-11 offset-md-2">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('إضافة حصة جديدة') }}
                                      </button>
                                  </div>
                              </div>
                            </form>

                        </div> <!-- /END WRAPPER -->
                    </div>
                </div>
            </div> <!-- /END OVERLAY -->
         </section>
@endsection
