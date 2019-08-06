<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use DB;
use File;
use Response;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('courses');
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
    public function add_file(Request $request)
    {
    $this->validate($request,['file_name'=>'required:courses,file_name',
        'stage'=>'required:courses,stage','file' => 'required|mimes:pdf|max:10000']);
     $file_name= $request->input('file_name');
     $stage = $request->input('stage');
     $files = $request->file('file');
     if($files == null){
         $course = new Course;
         $course->file_name=$file_name;
         $course->stage=$stage;
    }else{
     $destinationpath = 'public/Uploaded';
     $filename = date('Y-m-d_H-i').$files->getClientOriginalName();
     $files->move($destinationpath,$filename);
     $course = new Course;
     $course->file_name=$file_name;
     $course->stage=$stage;
     $course->file=$filename;
    }
        session()->push('alert','Success');
        session()->push('alert',' لقد تمت إضافة الحصة بنجاح');
         $book->save();
          return redirect('courses');
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
  public function download($file_name) {
    $file_path = public_path('Uploaded/'.$file_name);
    return response()->download($file_path);
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
    public function delete_file($id)
      {
        $myfile = DB::table('courses')->where('id','=',$id)->get();
        $oldfile = $myfile->file ;
       File::delete(public_path('Uploaded/'. $oldfile));
        DB::table('courses')->where('id', '=', $id)->delete();
         session()->push('alert','Success');
         session()->push('alert','تم حذف الحصة بنجاح');
       return redirect('courses');
      }
    public function destroy($id)
    {
        //
    }
}
