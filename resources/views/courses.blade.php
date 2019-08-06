@extends('adminhome')
@section('content')
     <section class="course dark-bg" style="padding-top:15px;">
            <div class="color-overlay mapOverlay">
                <div class="container" style="padding-top:60px;">
                    <div class="col-xs20 col-sm10">
                        <div class="wrapper">
                            <form method="POST" action="{{ route('studentregister') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                              @csrf
                              <div class="col-8">

                                <!-- NAME -->
                                  <label for="file_name"> إسم الملف </label>
                                  <input id="name" name="file_name" type="text" value=""
                                         placeholder="إسم الملف "  class="form-control" value="" required  autofocus>
                            </div>
                               <div class="col-8">
                                   <!-- STAGE -->
                                   <label class="select-box">
                                      <select id="select" required=""  name="stage">
                                          <!-- LABEL FOR OPTIONAL SELECT BOX-->
                                          <option class="optional-select-box-label" disabled  selected> إختر المرحلة</option>
                                          <option value ="1">الصف الاول الثانوى</option>
                                          <option value ="2">الصف الثانى الثانوى</option>
                                          <option value ="3">الصف الثالث الثانوى</option>
                                      </select>
                                  </label>
                                </div>
                                <div class="col-8">
                                 <!-- Upload file -->
                                 <label class="file-input" for="file-input">أرفق ملف الحصة الجديدة</label>
                                 <input type="file" id="upload" class="custom-file-input" name="file">
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
