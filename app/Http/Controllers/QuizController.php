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
<<<<<<< HEAD
    {

        $questionresult = array();
        $mcqQ = array();
        $mcqA = array();
=======
    {   
    
>>>>>>> 90b82ae1d0e9e1b5998a75af045585f1cd8ba235
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
<<<<<<< HEAD
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
=======
                    $questionresult = $this->hydrat($request);
                    $is_adaby = 2;
                    if($request->stage == 2)
                        $is_adaby = $request->is_adaby;
    
                    $max = Quiz::where('is_mcq',1)
                    ->where('stage',$request->stage)
                    ->where('is_excellent',$request->is_exellent)
                    ->where('is_adaby',$is_adaby)->max('quiz_number');
>>>>>>> 90b82ae1d0e9e1b5998a75af045585f1cd8ba235

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
<<<<<<< HEAD
                    if($request->stage == 2)
                    $quiz->is_adaby = $request->is_adaby;
                    else
                    $quiz->is_adaby = 2;

                    $quiz->save();

                    foreach($question['answer'] as $requestAnswer){
=======
                    $quiz->is_adaby =$is_adaby;
                    
                    $quiz->save();                    
                    foreach($question['answer'] as $requestAnswer){                     
>>>>>>> 90b82ae1d0e9e1b5998a75af045585f1cd8ba235
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
                $is_adaby = 2;
                if($request->stage == 2)
                    $is_adaby = $request->is_adaby;

                $max = Quiz::where('is_mcq',0)
                ->where('stage',$request->stage)
                ->where('is_excellent',$request->is_exellent)
                ->where('is_adaby',$is_adaby)->max('quiz_number');
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
                    $quiz->is_adaby = $is_adaby;
                    $quiz->save();
                }
                return redirect('exam/show');
            }
        }
        return view('quiz.add');
    }

    public function showAll()
    {
        $quizes = Quiz::select('is_mcq','quiz_number','stage','is_excellent','is_adaby')->groupBy('is_mcq','quiz_number','stage','is_excellent','is_adaby')->get();
        return view('quiz.show')->with(['quizes'=>$quizes]);
    }

    public function delete($is_mcq,$quiz_number,$stage,$is_excellent,$is_adaby)
    {
        $questions = Quiz::where('quiz_number',$quiz_number)
            ->where('is_mcq',$is_mcq)
            ->where('stage',$stage)
            ->where('is_excellent',$is_excellent)
            ->where('is_adaby',$is_adaby)->get();

            foreach($questions as $question){
                $ques = Quiz::find($question->id);
                $ques->delete();
            }

            return redirect('exam/show');
    }
    public function edit(Request $request,$is_mcq = null,$quiz_number= null,$stage= null,$is_excellent= null,$is_adaby= null)
    {
        
        if($request->isMethod('post')){
            $questions_ids = explode(',',$request->questions_ids);
            if($request->is_mcq == 1){
                $questions = $this->hydrat($request);
                foreach ($questions as $key => $question) {
                    $quiz = Quiz::find($questions_ids[$key]);
                    $quiz->question = $question['question'];
                    $quiz->is_mcq = 1;
                    $quiz->is_excellent = $request->is_exellent;
                    $quiz->stage = ($request->stage != "اختر المرحله")?$request->stage : 0;
                    if($request->stage == 2)
                    $quiz->is_adaby = $request->is_adaby;
                    else
                    $quiz->is_adaby = 2;
                    
                    $quiz->save();

                    $answer = Answer::where('quiz_id',$questions_ids[$key]);
                    $answer->delete();

                    foreach($question['answer'] as $requestAnswer){                     
                        $answer = new Answer();
                        $answer->quiz_id =$questions_ids[$key];
                        $answer->answer = $requestAnswer['a'];
                        $answer->is_correct = $requestAnswer['true'];
                        $answer->save();
                        
                    }
                }
                return redirect('exam/show');
            }else{
                $questions = array(
                    $request->q1,
                    $request->q2,
                    $request->q3,
                    $request->q4,
                    $request->q5,
                );
                
                foreach($questions as $key => $question){
                    $quiz = Quiz::find($questions_ids[$key]);
                    $quiz->question = $question;
                    $quiz->is_mcq = 0;
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
        $questions = Quiz::where('quiz_number',$quiz_number)
            ->where('is_mcq',$is_mcq)
            ->where('stage',$stage)
            ->where('is_excellent',$is_excellent)
            ->where('is_adaby',$is_adaby)->get();
            foreach($questions as $question){
            $answers = Answer::where('quiz_id',$question->id)->get();
            $question->answers = $answers;
            }
            $redirect = 'quiz.edit';
            if($questions[0]->is_mcq == 1)
                $redirect = 'quiz.edit_mcq';
            return view($redirect)->with(["quiz"=>$questions]);

    }

    private function hydrat($request)
    {
        $questionresult = array();
        $mcqQ = array();
        $mcqA = array();
        if($request->q1mcq != null){

            $mcqA[] = array(
                'a' => $request->q1mcqA1,
                'true'=> ($request->q1mcqTrue == 1)?1:0,
            );      
            $mcqA[] = array(
                'a' => $request->q1mcqA2,
                'true'=> ($request->q1mcqTrue == 2)?1:0,
                );     
            $mcqA[] = array(
                'a' => $request->q1mcqA3,
                'true'=> ($request->q1mcqTrue == 3)?1:0,
                );   
            $mcqA[] = array(
                'a' => $request->q1mcqA4,
                'true'=> ($request->q1mcqTrue == 4)?1:0,
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
                'true'=> ($request->q2mcqTrue == 2)?1:0,
            );     
            $mcqA[] = array(
                'a' => $request->q2mcqA3,
                'true'=> ($request->q2mcqTrue == 3)?1:0,
            );   
            $mcqA[] = array(
                'a' => $request->q2mcqA4,
                'true'=> ($request->q2mcqTrue == 4)?1:0,
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
                'true'=> ($request->q3mcqTrue == 2)?1:0,
            );     
            $mcqA[] = array(
                'a' => $request->q3mcqA3,
                'true'=> ($request->q3mcqTrue == 3)?1:0,
            );   
            $mcqA[] = array(
                'a' => $request->q3mcqA4,
                'true'=> ($request->q3mcqTrue == 4)?1:0,
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
                'true'=> ($request->q4mcqTrue == 2)?1:0,
                );     
            $mcqA[] = array(
                'a' => $request->q4mcqA3,
                'true'=> ($request->q4mcqTrue == 3)?1:0,
                );   
            $mcqA[] = array(
                'a' => $request->q4mcqA4,
                'true'=> ($request->q4mcqTrue == 4)?1:0,
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
                'true'=> ($request->q5mcqTrue == 2)?1:0,
                );     
            $mcqA[] = array(
                'a' => $request->q5mcqA3,
                'true'=> ($request->q5mcqTrue == 3)?1:0,
                );   
            $mcqA[] = array(
                'a' => $request->q5mcqA4,
                'true'=> ($request->q5mcqTrue == 4)?1:0,
                );
            
            $mcqQ = array(
                'question' => $request->q5mcq,
                'answer' => $mcqA,
            );
            $mcqA = array();
            $questionresult[] = $mcqQ; 
        }

        return $questionresult;
    }

}
