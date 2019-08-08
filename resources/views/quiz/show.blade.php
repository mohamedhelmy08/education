@extends('adminhome')

@section('content')
<div class="" style="margin-top:100px;height:400px">
    <form action="add" method="GET">
    <input type="submit" class="btn btn-primary float-right" value="اضافه"><br>
    </form>
    <table id="mydatattable" class="table table-striped table-bordered" style="width:100%;text-align:right">
        <thead>
            <tr>
                <th>رقم الاختبار</th>
                <th>المرحله</th>
                <th>التخصص</th>
                <th>المستوي</th>                
                <th>الاجراء</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($quizes))   
                @foreach ($quizes as $quiz) 
                    <tr>
                        <td> الختبار {{ $quiz->quiz_number }}</td>
                        <td>@if( $quiz->stage == 1)
                            المرحله الاولي 
                         @elseif($quiz->stage ==2)
                            المرحله الثانيه
                        @else
                            المرحله الثالثه
                        @endif</td>
                        <td>@if( $quiz->is_adaby == 1)
                           ادبي 
                         @elseif($quiz->is_adaby == 0)
                           علمي
                        @else
                            غير معرف
                        @endif</td>
                        <td>{{ ($quiz->is_excellent == '1')?'ممتاز':"ضعيف" }}</td>
                        <td><form action="edit/{{$quiz->id}}"><input type="submit" class="btn btn-success float-right" value="تعديل" style="margin-left:5px;"></form>
                            <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#exampleModal" id='deleteBtn' onclick="assignData('delete/{{$quiz->id}}')">حذف</button></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
                <th>رقم الاختبار</th>
                <th>المرحله</th>
                <th>التخصص</th>
                <th>المستوي</th>                
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