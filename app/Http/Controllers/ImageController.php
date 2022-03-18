<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class ImageController extends Controller
{
   function index(){
       return view('crud.index');
   }
   function add(Request $request){
    //  $query = DB::table('students')->insert([
        // 'name' => $request->input('sname'),
        // 'emial' => $request->input('semail'),
        // 'father_name' => $request->input('fname'),
        // 'address' => $request->input('saddress'),
        // 'degree' => $request->input('sdegree'),
        // 'skill' => $request->input('skill'),
$student= new Student;
$student->name =$request->input('sname');
$student->emial =$request->input('semail');
$student->father_name =$request->input('fname');
$student->address =$request->input('saddress');
$student->degree =$request->input('sdegree');
$student->skill =$request->input('skill');

if ($file = $request->file('img')) {
    
    $extention = $file->getClientOriginalExtension();
    $filename =date('YmdHis').'.'.$extention;
    $file->move('uploads/students/',$filename);
    $student->img =$filename;
           
        }
   $student->save(); 
    return redirect('index');
   }
   function view(){
       $view = array(
           'lisit'=>DB::table('students')->get()
       );
       return view('crud.view',$view);

    }

    function edit($id){
        $row =DB::table('students')->where('id',$id)->first();
        $data = [
            'row' =>$row
        ];
            return view('crud.edit',$data);
    }

    function update(Request $request, $id){
           
        $student= Student::find($id);
$student->name =$request->input('sname');
$student->emial =$request->input('semail');
$student->father_name =$request->input('fname');
$student->address =$request->input('saddress');
$student->degree =$request->input('sdegree');
$student->skill =$request->input('skill');

if ($file = $request->file('img')) {
    $destination = 'uploads/students/'.$student->img;
    if (File::exists($destination)) {
        File::delete($destination);
    }
    $extention = $file->getClientOriginalExtension();
    $filename =date('YmdHis').'.'.$extention;
    $file->move('uploads/students/',$filename);
    $student->img =$filename;
           
        }
   $student->update(); 
   return redirect()->back()->with('status' ,'Student Has been Updated');

    }


    function delete($id){
        $delte =Student::find($id);
    $destination = 'uploads/students/'.$delte->img;
    if (File::exists($destination)) {
        File::delete($destination);
    }
        $delte->delete();
   return redirect()->back()->with('status' ,'Student Has been Updated');

    }
}
