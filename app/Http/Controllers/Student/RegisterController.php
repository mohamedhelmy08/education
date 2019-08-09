<?php

namespace App\Http\Controllers\Student;

use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/studenthome';

    public function showRegistrationForm()
    {
        return view('register');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:student');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'phone' => ['min:11|numeric','unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'stage' => ['required', 'string'],
            "name" => 'required|min:2',
            "address" => 'required|min:2',]
            ,
            ['name.required' => 'من فضلك ادخل حقل الاسم',
            'phone.unique' => 'هذا الرقم موجود بالفعل ',
            'phone.numeric' => 'رقم الموبايل لابد ان يكون ارقام',
            'address.required' => 'من فضلك ادخل حقل العنوان',
            'name.min' => 'الاسم اقل من حرفين',
            'phone.min' => 'رقم الموبايل اقل من 11 رقم',
            'address.min' => 'العنوان اقل من حرفين ',
            'password.min' => 'كلمه المرور اقل من 2',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Student
     */
    protected function create(array $data)
    {
        if($data['stage']== 2){
            $is_adaby = $data['is_adaby'];
      }else{
          $is_adaby = 2;
        }
        return Student::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'stage' => $data['stage'],
            'address' => $data['address'],
            'is_adaby'=>$is_adaby,
        ]);
    }
}
