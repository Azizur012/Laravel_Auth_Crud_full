<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Validator;
use Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $student = new Student;
  $student->name = $request->name;
  $student->email = $request->email;
  
  if ($request->hasfile('image')) {
    $file = $request->file('image');
    $extension = $file->getClientOriginalExtension();
    $filename = time().'.'.$extension;
    $file->move('upload/image',$filename);
    $student->image = $filename;

  }

   $student->save();
    return redirect()->back()->with('status','Data Insert Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view(){
  $students = Student::all(); 
  return view('view',['students'=>$students]);
 

 // return view('students.view', compact('students'));
         

 }

 public function destroy($id){
   $student = Student::find($id);
    $destination = 'uploads/image'.$student->image;
    if (File::exists($destination)) {
      File::delete($destination);
    }
     $student->delete();
    return redirect()->back()->with('status','Data Delete Successful');
 }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id){
  $student = Student::find($id);
  return view('edit',['student'=>$student]);
 }

 public function update(Request $request, $id){
    $student = Student::find($id);

  $student->name = $request->name;
  $student->email = $request->email;
  
  if ($request->hasfile('image')) {
    $destination = 'upload/image'.$student->image;
    if (File::exists($destination)) {
      File::delete($destination);
    }

    $file = $request->file('image');
    $extension = $file->getClientOriginalExtension();
    $filename = time().'.'.$extension;
    $file->move('upload/image',$filename);
    $student->image = $filename;

  }

   $student->update();
    return redirect()->back()->with('status','Data Updated Successful');
 }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



     //fatch api update
    public function updatesingleRecord(Request $request,$id){
          if($request->ismethod('patch')){
            $data = $request->all();
            //return $data;
    
            $rules = [
                'name'=>'required',
                
                
            ];
            $customMessage = [
                'name.required'=>'Name is required',
                
            ];
            $validator = Validator::make($data,$rules,$customMessage);
            if($validator->fails()){
                return response()->json($validator->errors(),422);
            }
             
                $user =  User::findOrFail($id);
                $user->name = $data['name'];               
                $user->save();
                $message = 'User Successfully Updated';
               return response()->json(['message'=>$message],202); 
        }
    }
    
}
