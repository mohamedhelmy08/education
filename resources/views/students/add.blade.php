@extends('adminhome')

@section('content')
<div class="" style="margin-top:100px">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="save" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
      <div class="float-right">الاسم</div>
    <input type="text" class="form-control"  placeholder="ادخل الاسم" name="name" value="{{Request::old('name')}}">
    </div>

    <div class="form-group">
        <div class="float-right">رقم الموبايل </div>
        <input type="text" class="form-control"  placeholder="ادخل رقم الموبايل"name="phone" value="{{Request::old('phone')}}">
    </div>

    <div class="form-group">
        <div class="float-right">كلمه المرور</div>
        <input type="password" class="form-control"  placeholder="ادخل كلمه المرور"name="password">
    </div>

    <div class="form-group">
        <div class="float-right">اعد كتابه كلمه المرور </div>
        <input type="password" class="form-control"  placeholder="اعد كتابه كلمه المرور "name="cpassword">
    </div>

    <div class="form-group">
            <div class="float-right">العنوان</div>
            <input type="text" class="form-control"  placeholder="ادخل العنوان"name="address" value="{{Request::old('address')}}">
        </div>

    <div class="form-group">
        <div class="float-right">اختر صوره</div>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="img">
                <div class="custom-file-label" for="inputGroupFile04">اختر صوره</div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="float-right" for="selectStage">اختر المرحله</div>
        <select class="form-control" id="selectStage" name="stage">
            <option>اختر المرحله</option>
            <option value="1">المرحله الاولي </option>
            <option value="2">المرحله الثانيه </option>
            <option value="3">المرحله الثالثه </option>
        </select>
    </div>

    <div class="form-group" style="display: none;" id="is_adaby">
        <div class="float-right" for="selectStage">التخصص الدراسي </div>
        <div class="float-right form-check form-check-inline">
            <input class="form-check-input" type="radio" name="is_adaby"  value="1" checked>
            <div class="form-check-label" for="inlineRadio1">ادبي</div>
        </div>
        <div class="float-right form-check form-check-inline">
            <input class="form-check-input" type="radio" name="is_adaby" value="0">
            <div class="form-check-label" for="inlineRadio2">علمي</div>
        </div>
         <br>
    </div>
    
    <div class="form-group">
        <div class="float-right" for="selectStage">مستوي الطالب</div>
        <div class="float-right form-check form-check-inline">
            <input class="form-check-input" type="radio" name="is_exellent"  value="1" checked>
            <div class="form-check-label" for="inlineRadio1">ممتاز</div>
        </div>
        <div class="float-right form-check form-check-inline">
            <input class="form-check-input" type="radio" name="is_exellent" value="0">
            <div class="form-check-label" for="inlineRadio2">ضعيف</div>
        </div><br>
    </div>


    
    <button type="submit" class="float-right btn btn-primary" style="color:#e74c3c;margin-bottom:5px">حفظ</button>
  </form>
</div>
  @endsection