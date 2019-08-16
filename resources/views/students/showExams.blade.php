@extends('master-tableshow')
@section('content')

<div class="content container " style="padding-top:120px;">
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
                            <td> الاختبار {{ $quiz->quiz_number }}</td>
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
                            <td>{{ ($quiz->is_mcq == '1')?'إختيارى':"مقالى" }}</td>
                          @if($quiz->is_mcq == '1')
                            @if(App\StudentAnswer::select('is_examed')->where('quiz_id','=',$quiz->quiz_number)->where('is_mcq','=',1)->where('student_id','=',Auth::guard()->user()->id)->get()->first()['is_examed']== null)
                            <td><form action="takeexam/{{$quiz->quiz_number}}/{{$quiz->is_mcq}}" style="text-align:center;"><input type="submit" class="btn btn-success" value="ابدأ الاختبار" style="margin-left:5px;"></form>
                             </td>
                             @elseif(App\StudentAnswer::select('is_examed')->where('quiz_id','=',$quiz->quiz_number)->where('is_mcq','=',1)->where('student_id','=',Auth::guard()->user()->id)->get()->last()['is_examed']== '1')
                             <td><form action="takeexam/{{$quiz->quiz_number}}/{{$quiz->is_mcq}}" style="text-align:center;"><input type="submit" class="btn btn-success" value="إعادة الاختبار" style="margin-left:5px;"></form>
                                 <a  class="btn btn-primary" href="examresult/{{$quiz->quiz_number}}/{{App\StudentAnswer::select('is_examed')->where('quiz_id','=',$quiz->quiz_number)->where('is_mcq','=',1)->get()->first()['is_examed']}}" style="margin-left:5px;">عرض النتيجة</a>
                             </td>
                             @else
                             <td>
                               <a  class="btn btn-primary" href="examresult/{{$quiz->quiz_number}}/1" style="margin-left:5px;">عرض النتيجة الاولى</a>
                                 <a  class="btn btn-primary" href="examresult/{{$quiz->quiz_number}}/2" style="margin-left:5px;"> عرض النتيجة الثانية</a>
                             </td>
                             @endif
                          @else
                            @if(App\StudentAnswer::select('is_examed')->where('quiz_id','=',$quiz->quiz_number)->where('is_mcq','=',0)->where('student_id','=',Auth::guard()->user()->id)->get()->first()['is_examed']=== null)
                            <td><form action="takeexam/{{$quiz->quiz_number}}/{{$quiz->is_mcq}}" style="text-align:center;"><input type="submit" class="btn btn-success" value="ابدأ الاختبار" style="margin-left:5px;"></form>
                             </td>
                             @else
                             <td>
                             <a  class="btn btn-primary" href="takeexam/{{$quiz->quiz_number}}/{{$quiz->is_mcq}}" style="margin-left:5px;">عرض الاختبار</a>
                           </td>
                             @endif
                          @endif
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

  @endsection
