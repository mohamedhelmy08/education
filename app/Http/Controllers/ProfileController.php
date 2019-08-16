<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Quiz;
use App\User;
use DB;
use Auth;
use Hash;
use session;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $id=0;
      if (Auth::guard('student')->check()){
      $id = Auth::guard()->id();
      }
      $student_state = DB::table('students')->select('is_excellent','is_adaby','stage')->where('id',$id)->first();
      $examscount = Quiz::select('quiz_number','is_excellent','stage','is_adaby','is_mcq')->where('is_excellent','=',$student_state->is_excellent)->where('stage','=',$student_state->stage)->where('is_adaby','=',$student_state->is_adaby)->groupBy('quiz_number','stage','is_excellent','is_adaby','is_mcq')->get()->count();
      $donexams = DB::table('students_answers')->select('is_mcq','quiz_id')->groupBy('is_mcq','quiz_id')->where('student_id',$id)->get()->count();
      $students = DB::table('students')->where('id',$id)->get()->first();
    //  dd($students);
        return view('students.profile')->with(['examscount'=>$examscount,'students'=>$students,'donexams'=>$donexams]);
    }
    public function view_admin()
    {
      $id=0;
      if (Auth::guard('web')->check()){
      $id = Auth::guard()->id();
      }

      $admin = DB::table('users')->where('id',$id)->get()->first();
    //  dd($students);
        return view('adminprofile')->with(['admin'=>$admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function student_profile_edit(Request $request, $id)
      {
         $this->validate($request,[
                      "name" => 'required|min:2',
                      "phone" => 'required|min:11|numeric',
                      "address" => 'required|min:2',
                      'img' => 'mimes:png,jpg',]
                      ,
                      ['name.required' => 'من فضلك ادخل حقل الاسم',
                      'phone.required' => 'من فضلك ادخل حقل رقم الموبايل',
                      'phone.numeric' => 'رقم الموبايل لابد ان يكون ارقام',
                      'address.required' => 'من فضلك ادخل حقل العنوان',
                      'name.min' => 'الاسم اقل من حرفين',
                      'phone.min' => 'رقم الموبايل اقل من 11 رقم',
                      'address.min' => 'العنوان اقل من حرفين ',
                      'img.mimes' => 'من فضلك ارفق ملف بصيغة صحيحة ',
                  ]);
                 $img_name = $request->old_img;
                 if ($request->hasFile('img')) {
                     $image = $request->file('img');
                     $img_name = time().'.'.$image->getClientOriginalExtension();
                     $destinationPath = public_path('profile');
                     $image->move($destinationPath, $img_name);
                     // if($request->old_img != 'avatar.png')
                     //     unlink($destinationPath.'/'.$request->old_img);
                 }
                 $student = Student::find($id);
                 $student->name = $request->name;
                 $student->phone = $request->phone;
                 $student->img = $img_name;
                 $student->address = $request->address;
                 if($request->stage == 1){
                     $student->stage = $request->stage;
                 }elseif($request->stage == 4){
                   $student->stage =3;
                 }else{
                   if($request->stage == 2){
                       $student->stage =2;
                       $student->is_adaby = 1;
                   }elseif($request->stage == 3){
                       $student->is_adaby = 0;
                     }else{
                       $student->is_adaby = 2;
                     }
                 }
                 $student->save();
                 return redirect('student/profile');
      }
      public function change_student_password(Request $request)
      {
         $this->validate($request, [
             'old' => 'required|min:6',
             "password" => 'required|min:2',
             "cpassword" => 'required|min:2|same:password'
             ,
             [
             'password.required' => 'من فضلك ادخل حقل كلمه المرور',
              'old.required' => 'من فضللك ادخل حقل كلمة المرور القديمة',
             'cpassword.required' => 'من فضلك ادخل حقل اعاده كلمه المرور',
             'cpassword.same' => 'اعاده كلمه المرور غير متطابق',
             ]
         ]);
             $user = Student::find(Auth::id());

         $hashedPassword = $user->password;

         if (Hash::check($request->old, $hashedPassword)) {
             //Change the password
             $user->fill([
                 'password' => Hash::make($request->password)
             ])->save();

         session()->push('alert','Success');
         session()->push('alert','تم تعديل كلمة المرور بنجاح');
           return back();

         }
         session()->push('alert','Danger');
         session()->push('alert','كلمة المرور لم تتغير كلمة مرورك القديمة خاطئة');
         return back();

      }
      public function change_admin_password(Request $request)
      {
         $this->validate($request, [
             'old' => 'required|min:6',
             "password" => 'required|min:2',
             "cpassword" => 'required|min:2|same:password'
             ,
             [
             'password.required' => 'من فضلك ادخل حقل كلمه المرور',
              'old.required' => 'من فضللك ادخل حقل كلمة المرور القديمة',
             'cpassword.required' => 'من فضلك ادخل حقل اعاده كلمه المرور',
             'cpassword.same' => 'اعاده كلمه المرور غير متطابق',
             ]
         ]);
             $user = User::find(Auth::id());

         $hashedPassword = $user->password;

         if (Hash::check($request->old, $hashedPassword)) {
             //Change the password
             $user->fill([
                 'password' => Hash::make($request->password)
             ])->save();

         session()->push('alert','Success');
         session()->push('alert','تم تعديل كلمة المرور بنجاح');
          return back();

         }
         session()->push('alert','Danger');
         session()->push('alert','كلمة المرور لم تتغير كلمة مرورك القديمة خاطئة');
          return back();

      }
      public function profile_admin_edit(Request $request, $id)
        {
          $this->validate($request, [
            "name" => 'required|min:2',
            "phone" => 'required|min:11|numeric',
              'img' => 'mimes:png,jpg',],
              ['name.required' => 'من فضلك ادخل حقل الاسم',
              'phone.required' => 'من فضلك ادخل حقل رقم الموبايل',
              'phone.numeric' => 'رقم الموبايل لابد ان يكون ارقام',
              'name.min' => 'الاسم اقل من حرفين',
              'phone.min' => 'رقم الموبايل اقل من 11 رقم',
              'img.mimes' => 'من فضلك ارفق ملف بصيغة صحيحة ',
               ]);
            $img_name = $request->old_img;
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $img_name = 'admin'.time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('profile');
                $image->move($destinationPath, $img_name);
                // if($request->old_img != 'avatar.png')
                //     unlink($destinationPath.'/'.$request->old_img);
            }
            $admin = User::find($id);
            $admin->name = $request->name;
            $admin->phone = $request->phone;
            $admin->img = $img_name;
            $admin->save();
            return redirect('adminprofile');
        }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
