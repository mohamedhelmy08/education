<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\Answer;
use App\Student;
use Auth;

use DB;
class QuizController extends Controller
{
    //

    public function add(Request $request)
    {

        $questionresult = array();
        $mcqQ = array();
        $mcqA = array();
        if($request->isMethod('post')){

            if($request->is_mcq == 1){
                $this->validate($request,[
                        "q1mcq" => 'required',
                        "q2mcq" => 'required',
                        "q3mcq" => 'required',
                        "q4mcq" => 'required',
                        "q5mcq" => 'required',
                    ],[
                        'q1mcq.required' => 'من فضلك ادخل حقل السؤال',
                        'q2mcq.required' => 'من فضلك ادخل حقل السؤال',
                        'q3mcq.required' => 'من فضلك ادخل حقل السؤال',
                        'q4mcq.required' => 'من فضلك ادخل حقل السؤال',
                        'q5mcq.required' => 'من فضلك ادخل حقل السؤال',
                    ]);
                if($request->q1mcq != null){

                    $mcqA[] = array(
                        'a' => $request->q1mcqA1,
                        'true'=> ($request->q1mcqTrue == 1)?1:0,
                    );
                    $mcqA[] = array(
                        'a' => $request->q1mcqA2,
                        'true'=> ($request->q1mcqTrue == 2)?2:0,
                        );
                    $mcqA[] = array(
                        'a' => $request->q1mcqA3,
                        'true'=> ($request->q1mcqTrue == 3)?3:0,
                        );
                    $mcqA[] = array(
                        'a' => $request->q1mcqA4,
                        'true'=> ($request->q1mcqTrue == 4)?4:0,
                        );

                    $mcqQ = array(
                        'question' => $request->q1mcq,
                        'answer' => $mcqA,
                    );
                    $mcqA = array();
                    $questionresult[] = $mcqQ;
                }

                if($request->q2mcq != null){

                    $mcqA[] = array(
                        'a' => $request->q2mcqA1,
                        'true'=> ($request->q2mcqTrue == 1)?1:0,
                    );
                    $mcqA[] = array(
                        'a' => $request->q2mcqA2,
                        'true'=> ($request->q2mcqTrue == 2)?2:0,
                    );
                    $mcqA[] = array(
                        'a' => $request->q2mcqA3,
                        'true'=> ($request->q2mcqTrue == 3)?3:0,
                    );
                    $mcqA[] = array(
                        'a' => $request->q2mcqA4,
                        'true'=> ($request->q2mcqTrue == 4)?4:0,
                    );

                    $mcqQ = array(
                        'question' => $request->q2mcq,
                        'answer' => $mcqA,
                    );
                    $mcqA = array();
                    $questionresult[] = $mcqQ;
                }

                if($request->q3mcq != null){

                    $mcqA[] = array(
                        'a' => $request->q3mcqA1,
                        'true'=> ($request->q3mcqTrue == 1)?1:0,
                    );
                    $mcqA[] = array(
                        'a' => $request->q3mcqA2,
                        'true'=> ($request->q3mcqTrue == 2)?2:0,
                    );
                    $mcqA[] = array(
                        'a' => $request->q3mcqA3,
                        'true'=> ($request->q3mcqTrue == 3)?3:0,
                    );
                    $mcqA[] = array(
                        'a' => $request->q3mcqA4,
                        'true'=> ($request->q3mcqTrue == 4)?4:0,
                    );

                    $mcqQ = array(
                        'question' => $request->q3mcq,
                        'answer' => $mcqA,
                    );
                    $mcqA = array();
                    $questionresult[] = $mcqQ;
                }

                if($request->q4mcq != null){

                    $mcqA[] = array(
                        'a' => $request->q4mcqA1,
                        'true'=> ($request->q4mcqTrue == 1)?1:0,
                    );
                    $mcqA[] = array(
                        'a' => $request->q4mcqA2,
                        'true'=> ($request->q4mcqTrue == 2)?2:0,
                        );
                    $mcqA[] = array(
                        'a' => $request->q4mcqA3,
                        'true'=> ($request->q4mcqTrue == 3)?3:0,
                        );
                    $mcqA[] = array(
                        'a' => $request->q4mcqA4,
                        'true'=> ($request->q4mcqTrue == 4)?4:0,
                        );

                    $mcqQ = array(
                        'question' => $request->q4mcq,
                        'answer' => $mcqA,
                    );
                    $mcqA = array();
                    $questionresult[] = $mcqQ;
                }

                if($request->q5mcq != null){

                    $mcqA[] = array(
                        'a' => $request->q5mcqA1,
                        'true'=> ($request->q5mcqTrue == 1)?1:0,
                    );
                    $mcqA[] = array(
                        'a' => $request->q5mcqA2,
                        'true'=> ($request->q5mcqTrue == 2)?2:0,
                        );
                    $mcqA[] = array(
                        'a' => $request->q5mcqA3,
                        'true'=> ($request->q5mcqTrue == 3)?3:0,
                        );
                    $mcqA[] = array(
                        'a' => $request->q5mcqA4,
                        'true'=> ($request->q5mcqTrue == 4)?4:0,
                        );

                    $mcqQ = array(
                        'question' => $request->q5mcq,
                        'answer' => $mcqA,
                    );
                    $mcqA = array();
                    $questionresult[] = $mcqQ;
                }

                $max = Quiz::where('is_mcq', 1)->max('quiz_number');
                if($max == null)
                $max = 1;
                else
                $max++;

                foreach($questionresult as $question){

                    $quiz = new Quiz();
                    $quiz->question = $question['question'];
                    $quiz->is_mcq = 1;
                    $quiz->quiz_number = $max;
                    $quiz->is_excellent = $request->is_exellent;
                    $quiz->stage = ($request->stage != "اختر المرحله")?$request->stage : 0;
                    if($request->stage == 2)
                    $quiz->is_adaby = $request->is_adaby;
                    else
                    $quiz->is_adaby = 2;

                    $quiz->save();

                    foreach($question['answer'] as $requestAnswer){
                        $answer = new Answer();
                        $answer->quiz_id = $quiz->id;
                        $answer->answer = $requestAnswer['a'];
                        $answer->is_correct = $requestAnswer['true'];
                        $answer->save();

                    }
                }
                return redirect('exam/show');
            }else{
                $this->validate($request,[
                    "q1" => 'required',
                    "q2" => 'required',
                    "q3" => 'required',
                    "q4" => 'required',
                    "q5" => 'required',
                ],[
                    'q1.required' => 'من فضلك ادخل حقل السؤال',
                    'q2.required' => 'من فضلك ادخل حقل السؤال',
                    'q3.required' => 'من فضلك ادخل حقل السؤال',
                    'q4.required' => 'من فضلك ادخل حقل السؤال',
                    'q5.required' => 'من فضلك ادخل حقل السؤال',
                ]);
                $questions = array(
                    $request->q1,
                    $request->q2,
                    $request->q3,
                    $request->q4,
                    $request->q5,
                );
                $max = Quiz::where('is_mcq', 0)->max('quiz_number');
                if($max == null)
                    $max = 1;
                else
                    $max++;
                foreach($questions as  $question){
                    $quiz = new Quiz();
                    $quiz->question = $question;
                    $quiz->is_mcq = 0;
                    $quiz->quiz_number = $max;
                    $quiz->is_excellent = $request->is_exellent;
                    $quiz->stage = ($request->stage != "اختر المرحله")?$request->stage : 0;
                    if($request->stage == 2)
                    $quiz->is_adaby = $request->is_adaby;
                    else
                    $quiz->is_adaby = 2;

                    $quiz->save();
                }
                return redirect('exam/show');
            }
        }
        return view('quiz.add');
    }

    public function showAll()
    {
        $quizes = Quiz::select('quiz_number','stage','is_excellent','is_adaby')->groupBy('quiz_number','stage','is_excellent','is_adaby')->get();
        // $quizes = Quiz::all();
        // foreach($quizes as $quiz){
        //     $answers = Answer::where('quiz_id',$quiz->id)->get();
        //     $quiz->answers = $answers;
        // }
            // dd($quizes);

        return view('quiz.show')->with(['quizes'=>$quizes]);
    }

}
