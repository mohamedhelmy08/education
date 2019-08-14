<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Quiz;
use App\Answer;
use App\StudentAnswer;
use Auth;
use DB;

class StudentsController extends Controller
{
    //
    public function index()
    {   //dd(Auth::guard());
        return view('student');
    }
    public function add(Request $request)
    {
        if($request->isMethod('post')){
            $this->validate($request,[
                "name" => 'required|min:2',
                "phone" => 'required|min:11|unique:students|numeric',
                "address" => 'required|min:2',
                "password" => 'required|min:2',
                "cpassword" => 'required|min:2|same:password',]
                ,
                ['name.required' => 'من فضلك ادخل حقل الاسم',
                'phone.required' => 'من فضلك ادخل حقل رقم الموبايل',
                'phone.numeric' => 'رقم الموبايل لابد ان يكون ارقام',
                'phone.unique' => 'رقم الموبايل موجود بالفعل ',
                'address.required' => 'من فضلك ادخل حقل العنوان',
                'password.required' => 'من فضلك ادخل حقل كلمه المرور',
                'cpassword.required' => 'من فضلك ادخل حقل اعاده كلمه المرور',
                'cpassword.same' => 'اعاده كلمه المرور غير متطابق',
                'name.min' => 'الاسم اقل من حرفين',
                'phone.min' => 'رقم الموبايل اقل من 11 رقم',
                'address.min' => 'العنوان اقل من حرفين ',
                'password.min' => 'كلمه المرور اقل من 2',
                ]);
            $img_name = 'avatar.png';
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $img_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/profile');
                $image->move($destinationPath, $img_name);
            }

            $student = new Student();
            $student->name = $request->name;
            $student->phone = $request->phone;
            $student->stage = ($request->stage != "اختر المرحله")?$request->stage : 0;
            $student->is_excellent = $request->is_exellent;
            $student->img = $img_name;
            $student->address = $request->address;
            $student->is_approved = 1;
            $student->password = md5($request->password);
            if($request->stage == 2){
                  $student->is_adaby = $request->is_adaby;
            }else
                $student->is_adaby = 2;

            $student->save();

            return redirect('student/show');
        }
        return view('students.add');
    }

    public function showAll(Request $request)
    {
        $students = Student::all();

        return view('students.show')->with(['students'=>$students]);
    }

    public function edit(Request $request,$id)
    {
        if($request->isMethod('post')){
            $this->validate($request,[
                "name" => 'required|min:2',
                "phone" => 'required|min:11|numeric',
                "address" => 'required|min:2',]
                ,
                ['name.required' => 'من فضلك ادخل حقل الاسم',
                'phone.required' => 'من فضلك ادخل حقل رقم الموبايل',
                'phone.numeric' => 'رقم الموبايل لابد ان يكون ارقام',
                'address.required' => 'من فضلك ادخل حقل العنوان',
                'name.min' => 'الاسم اقل من حرفين',
                'phone.min' => 'رقم الموبايل اقل من 11 رقم',
                'address.min' => 'العنوان اقل من حرفين ',
                'password.min' => 'كلمه المرور اقل من 2',
            ]);

            $img_name = $request->old_img;
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $img_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/profile');
                $image->move($destinationPath, $img_name);
                if($request->old_img != 'avatar.png')
                    unlink($destinationPath.'/'.$request->old_img);
            }
            $student = Student::find($id);
            $student->name = $request->name;
            $student->phone = $request->phone;
            $student->stage = ($request->stage != "اختر المرحله")?$request->stage : 0;
            $student->is_excellent = $request->is_exellent;
            $student->img = $img_name;
            $student->address = $request->address;
            if($request->stage == 2){
                  $student->is_adaby = $request->is_adaby;
            }else
                $student->is_adaby = 2;
            $student->save();
            return redirect('student/show');
        }
      $student = Student::find($id);
      return view('students.edit')->with(['student'=>$student]);
    }

    public function delete(Request $request,$id)
    {
     if($id){
        $student = Student::find($id);
        if($student->img != 'avatar.png'){
            unlink('profile/'.$student->img);
        }
        $student->delete();
        return redirect('student/show');
     }
    }

    public function changeState(Request $request,$id)
    {
        $student = Student::find($id);
        $student->is_approved = $request->is_approved;
        $student->save();
        return redirect('student/show');
    }
    public function showStudentExams()
    {
        $id=0;
        if (Auth::guard('student')->check()){
        $id = Auth::guard()->id();
        }
        //dd($id);
        $student_state = DB::table('students')->select('is_excellent','is_adaby','stage')->where('id',$id)->first();
        $quizes = Quiz::select('quiz_number','is_excellent','stage','is_adaby','is_mcq')->where('is_excellent','=',$student_state->is_excellent)->where('stage','=',$student_state->stage)->where('is_adaby','=',$student_state->is_adaby)->groupBy('quiz_number','stage','is_excellent','is_adaby','is_mcq')->get();

        return view('students.showExams')->with(['quizes'=>$quizes,'st_id',$id]);
    }
    public function takeExam($q_num,$mcq)
    {
       if ($mcq == 1) {
          $questions = Quiz::where('quiz_number',$q_num)->where('is_mcq',$mcq)->get();
          foreach($questions as $question){
          $answers = Answer::where('quiz_id',$question->id)->get()->toArray();
          $question->answers = $answers;
          }
          //dd($questions);
         // $data = DB::table('quizes')->join('answers','answers.quiz_id','=','quizes.id')->where('quiz_number',$q_num)->get();
          return view('students.exammcq')->with(['quiz'=>$questions]);
       }else{
         $data = DB::table('quizes')->where('quiz_number',$q_num)->get()->toArray();
         //dd($data);

       return view('students.examnote')->with(['questions'=>$data]);
     }
    }
    public function submitMcqExam(Request $request)
    {
      //$is_examed = 0;
      $is_examed = DB::table('students_answers')->select('is_examed')->where('quiz_id',$request->q_num)->where('is_mcq',1)->get()->first();
      // dd($is_examed);
      if ($is_examed === null) {
          $is_examed =1;
      }else{
      $is_examed =  $is_examed->is_examed +1;
      }
      //dd($is_examed);
      $answers = array();
      $st_id=0;
      $grade=0;
      if (Auth::guard('student')->check()){
      $st_id = Auth::guard()->id();
      }
      //dd($request->q1mcqTrue);
      $stanswers = new StudentAnswer;
         $ans_arr1 = explode (",", $request->q1mcqTrue);
         $ans_arr2 = explode (",", $request->q2mcqTrue);
         $ans_arr3 = explode (",", $request->q3mcqTrue);
         $ans_arr4 = explode (",", $request->q4mcqTrue);
         $ans_arr5 = explode (",", $request->q5mcqTrue);
          $answers[0][] = $ans_arr1[0];
          $answers[0][] = $ans_arr2[0];
          $answers[0][] = $ans_arr3[0];
          $answers[0][] = $ans_arr4[0];
          $answers[0][] = $ans_arr5[0];
          $answers[1][] = $ans_arr1[1];
          $answers[1][] = $ans_arr2[1];
          $answers[1][] = $ans_arr3[1];
          $answers[1][] = $ans_arr4[1];
          $answers[1][] = $ans_arr5[1];
         $examanswer = implode(', ', $answers[0]);
         $stanswers->answer = $examanswer;
         $stanswers->quiz_id = $request->q_num;
         $stanswers->student_id = $st_id;
         $stanswers->is_mcq = 1;
         $stanswers->is_examed = $is_examed;
         $correctAnswers = DB::table('answers')->join('quizes','quizes.id','answers.quiz_id')->select('is_correct')->where('quizes.quiz_number',$request->q_num)->where('quizes.is_mcq',1)->where('answers.is_correct','<>',0)->get()->toArray();
        //dd($correctAnswers);
          for ($i=0; $i < count($answers[0]); $i++) {
              if ($answers[0][$i]== $correctAnswers[$i]->is_correct) {
                $grade++;
              }
          }
        $stanswers->grades = $grade;
        $stanswers->save();
        $questions = Quiz::where('quiz_number',$request->q_num)->where('is_mcq',1)->get();
        foreach($questions as $question){
        $qanswers = Answer::where('quiz_id',$question->id)->where('is_correct','<>',0)->get()->toArray();
        $question->answers = $qanswers;
        }
        //die($questions);
        return redirect('student/examresult/'.$request->q_num.'/'.$is_examed);
      //return redirect('student/examresult')->with(['quiz'=>$questions,'grade'=>$grade,'stanswer'=>$answers]);
    }
    public function submitNoteExam(Request $request)
    {
      $is_examed = 0;
      $is_examed++;
      $st_id=0;
      if (Auth::guard('student')->check()){
      $st_id = Auth::guard()->id();
      }
      $img_name = $request->old_img;
      if ($request->hasFile('img')) {
          $image = $request->file('img');
          $img_name = time().'.'.$image->getClientOriginalExtension();
          $destinationPath = public_path('/exam');
          $image->move($destinationPath, $img_name);
      }
      $stanswers = new StudentAnswer;
         $stanswers->quiz_id = $request->q_num;
         $stanswers->student_id = $st_id;
         $stanswers->is_examed = $is_examed;
         $stanswers->img = $img_name;
       $stanswers->save();
      return redirect('student/exams');
    }
    public function getExamResult($q_num,$is_examed)
    {
      //dd($is_examed);
      $allanswers =array();
      $result=array();
      $st_id=0;
      if (Auth::guard('student')->check()){
      $st_id = Auth::guard()->id();
      }
      $questions = Quiz::where('quiz_number',$q_num)->where('is_mcq',1)->get();
      foreach($questions as $question){
      $qanswers = Answer::where('quiz_id',$question->id)->where('is_correct','<>',0)->get()->toArray();
      $question->answers = $qanswers;
      $allanswers[] = Answer::where('quiz_id',$question->id)->get()->toArray();
      }
      $stanswers = StudentAnswer::select('answer','grades')->where('quiz_id',$q_num)->where('student_id',$st_id)->where('is_examed',$is_examed)->where('is_mcq',1)->get()->toArray();
     //dd($stanswers);
      $stgrade = $stanswers[0]['grades'];

      $stanswers = explode (",", $stanswers[0]['answer']);
      //dd($stanswers);
        for ($i=0; $i <count($allanswers) ; $i++) {
          $result[0][] = $stanswers[$i];
          $result[1][]=$allanswers[$i][$stanswers[$i]-1];
        }

       return view('students.result')->with(['quiz'=>$questions,'grade'=>$stgrade,'stanswer'=>$result]);
     //}
    }
}
