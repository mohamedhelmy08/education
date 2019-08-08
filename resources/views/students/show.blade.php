@extends('adminhome')

@section('content')

<div class="" style="margin-top:100px;height:400px">
    <form action="add" method="GET">
    <input type="submit" class="btn btn-primary float-right" value="اضافه"><br>
    </form>
    <table id="mydatattable" class="table table-striped table-bordered" style="width:100%;text-align:right">
        <thead>
            <tr>
                <th>الاسم</th>
                <th>المرحله</th>
                <th>المستوي</th>
                <th>حاله الطالب</th>
                <th>تغير الحاله</th>
                <th>الاجراء</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($students))   
                @foreach ($students as $student) 
                    <tr style="background-color:{{($student->is_approved == 0)?'#fabbb6':'' }}">
                        <td>{{ $student->name }}</td>
                        <td>@if( $student->stage == 1)
                            المرحله الاولي 
                         @elseif($student->stage ==2)
                            المرحله الثانيه
                        @else
                            المرحله الثالثه
                        @endif
                        <td>{{ ($student->is_excellent == '1')?'ممتاز':"ضعيف" }}</td>
                        <td>{{ ($student->is_approved == '1')?'مقبول':"مرفوض" }}</td>
                        <td><form action="edit/state/{{$student->id}}" method="post" id="changeStateForm">
                                @csrf
                                <select class="form-control" id="changeState" name="is_approved" onchange="submit()">
                                        <option>اختر حاله الطالب </option>
                                        <option value="1" >مقبول</option>
                                        <option value="0" >مرفوض</option>
                                    </select> 
                            </form>
                        </td>
                        <td width="22%"><form action="edit/{{$student->id}}"><input type="submit" class="btn btn-success float-right" value="تعديل" style="margin-left:5px;"></form>
                            <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#exampleModal" id='deleteBtn' onclick="assignData('delete/{{$student->id}}')">حذف</button></td>
                    </tr>
                @endforeach
            @else
                    <tr colspan='4'>لا يوجد طلاب</tr>
            @endif
        </tbody>
        <tfoot>
            <tr>
                <th>الاسم</th>
                <th>المرحله</th>
                <th>المستوي</th>
                <th>حاله الطالب</th>
                <th>تغير الحاله</th>                
                <th>الاجراء</th>
            </tr>
        </tfoot>
    </table>
</div>
      
      <!-- Modal -->
      <div class="modal fade float-right" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">حذف الطالب </h5>
            </div>
            <div class="modal-body">
             هل حقا تريد حذف الطالب
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-left:5px;">اغلاق</button>
              <form action ="" id="deleteConfirm"><input type="submit" class="btn btn-primary float-right" value="حذف"></form>
            </div>
          </div>
        </div>
      </div>
  @endsection