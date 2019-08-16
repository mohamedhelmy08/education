@extends('master-tableshow')
@section('content')
<div class="content container " style="padding-top:120px;">
  <form action="add" method="GET" style="padding-bottom:30px;">

  <input type="submit" class="btn btn-primary float-right" value="اضافه"><br>

  </form>
        <table id="mydatattable" class="table table-striped table-bordered" style="width:100%;text-align:right">
            <thead>
                <tr>
                    <th>رقم الاختبار</th>
                    <th>المرحله</th>
                    <th>التخصص</th>
                    <th>المستوي</th>
                    <th>نوع الاختبار</th>
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
                            <td>{{ ($quiz->is_mcq == '1')?'اختياري':"مقالي" }}</td>
                            <td><form action="edit/{{$quiz->is_mcq}}/{{$quiz->quiz_number}}/{{$quiz->stage}}/{{$quiz->is_excellent}}/{{$quiz->is_adaby}}"><input type="submit" class="btn btn-success float-right" value="تعديل" style="margin-left:5px;"></form>
                                <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#exampleModal" id='deleteBtn' onclick="assignData('delete/{{$quiz->is_mcq}}/{{$quiz->quiz_number}}/{{$quiz->stage}}/{{$quiz->is_excellent}}/{{$quiz->is_adaby}}')">حذف</button></td>
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
                    <th>نوع الاختبار</th>
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

             هل حقا تريد حذف الامتحانات

            </div>

            <div class="modal-footer">

              <button type="button" class="btn standard-btn" data-dismiss="modal" style="margin-left:5px;float:right;">اغلاق</button>

              <form action ="" id="deleteConfirm"><input type="submit" class="btn btn-primary float-right" value="حذف"></form>

            </div>

          </div>

        </div>

      </div>
@endsection
