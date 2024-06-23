<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all children from the database
        $children = Child::get();
        // Pass the $children data to the view
        return view('admin.children', compact('children'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addChild');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages= $this->errMsg();

        $data =$request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'grade' => 'required|string|max:255',    
             ] , $messages);   

        Child::create($data);
        return redirect('admin.children');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            //
            $child = Child::with(['parent', 'class', 'teachers'])->findOrFail($id);

            // Return the edit view with the client data
                return view('showChild', compact('child'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $child = Child::findOrFail($id);
        return view('editChild', compact('child'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'grade' => 'required|string|max:255',
        ]);

        $child = Child::findOrFail($id);
        $child->update($request->all());

        return redirect()->route('children')->with('success', 'Child updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function errMsg() 
    {
         return [
            'teacherName.required'=>'Name is missed !!',
            'teacherName.min'=>'length less than 5 !! please insert your full name ',
            'phone.min'=>'length less than 11 !! please insert a valid phone number',
            'email.email'=>'please insert a valid email ',
            'city.required'=>'please select a city from the list',
            'image.required'=>'please insert an image',
            'image.mimes'=>'image extension must be jpg or png or bmp '
        ];
    }




}
