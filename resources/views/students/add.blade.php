@extends('layouts.app')

@section('content')
<div class="container">
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
</div>
  @endsection