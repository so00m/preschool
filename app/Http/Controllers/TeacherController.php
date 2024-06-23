<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Traits\UploadFile;

class TeacherController extends Controller
{
    use UploadFile;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::get();
        return view('admin.file-teachers.teachers', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.file-teachers.addTeacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages= $this->errMsg();

        $data =$request->validate([
            'first_name'=>'required|max:100',
            'last_name'=>'required|max:100',
            'phone'=>'required|min:11',
            'email'=>'required|email:rfc',
            'subject' => 'required',
            'image' => 'required|mimes:jpg,bmp,png',
            'published' => 'boolean'
             ] , $messages);
       
        $fileName=$this->UploadFile($request->image , 'assets/img');

        $data['image']=$fileName;

        $data['published']=isset($request->published);
dd($data);
        Teacher::create($data);
        return redirect('teachers')->with('success', 'Teacher added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.file-teachers.showTeacher' , compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.file-teachers.editTeacher' , compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data =$request->validate([
            'first_name'=>'required|max:100',
            'last_name'=>'required|max:100',
            'phone'=>'required|min:11',
            'email'=>'required|email:rfc',
            'subject' => 'required',
            'image'=>'sometimes',
            ]);

            if($request->hasFile('image')){
                $fileName=$this->upload($request->image , 'assets/img');
                $data['image']=$fileName;
            }else{
                $data['image'] = Teacher::where('id', $id)->value('image');
            }

            $data['published']=isset($request->published);

        Teacher::where('id',$id)->update($data);

        return redirect('teachers');
    }



    public function destroy(Request $request)
    {
        $id=$request->id;
        Teacher::where('id',$id)->delete();
        return redirect('teachers');
    }


      /**
     * Remove the specified resource from storage.
     */
    public function forceDelete(Request $request)
    {

        $id=$request->id;
        Teacher::where('id',$id)->forceDelete();
        return redirect('trashTeacher');
    }

    /**
     * VIEW TRASHED
     */
    public function trash()
    {

        $trashed= Teacher::onlyTrashed()->get();
        return view('trashTeacher' , compact('trashed'));

    }

    /**
     * Restore
     */
    public function restore(string $id)
    {
        Teacher::where('id',$id)->restore();
        return redirect('teachers');
    }



    public function errMsg()
        {
            return [
                'first_name.required'=>'first Name is missed !!',
                'last_name.required'=>'last Name is missed !!',
                'phone.min'=>'length less than 11 !! please insert a valid phone number',
                'email.email'=>'please insert a valid email ',
                'subject.required'=>'please select a subject',
                'image.required'=>'please insert an image',
                'image.mimes'=>'image extension must be jpg or png or bmp '
            ];
        }
 }
