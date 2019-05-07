<?php

namespace App\Http\Controllers;
use Validator;
use Redirect;
use App\Userdetail;
use Illuminate\Http\Request;
use App\User;


class UserdetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // returning the view using the index function
       return view('home');

    }
    public function reg()
    {
        return view('home');
       

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
      // Backend data validation
      $validatedData = $request->validate([
        'name' => 'required|max:255',
        'Surname' => 'required',
        'email' => 'required|email|unique:userdetails,email',
        'phone' => 'required',
        'gender' => 'required',
        'dob ' => 'nullable|date',
        
      ]); 
      // Data storage using the model
       $userdetail = new Userdetail;
       $userdetail->name = $request->name;
       $userdetail->Surname = $request->Surname;
       $userdetail->email = $request->email;
       $userdetail->phone = $request->phone;
       $userdetail->gender = $request->gender;
       $userdetail->dob = $request->dob;
       $userdetail->comment = $request->comment;
       $userdetail->save();
       return Redirect::to('/')->with('flash_message', 'Thanks for registering with us!'); 


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Userdetail  $userdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Userdetail $userdetail)
    {
        $user =  User::all();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Userdetail  $userdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Userdetail $userdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Userdetail  $userdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Userdetail $userdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Userdetail  $userdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userdetail $userdetail)
    {
        //
    }
}
