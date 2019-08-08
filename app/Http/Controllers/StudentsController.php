<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
    //

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
}
