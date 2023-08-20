<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TutorRegistration;

class TutorRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'tutor registration is working fine';
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

        $obj = new TutorRegistration();

        $obj->name = $request->input('name');
        $obj->email = $request->input('email');
        $obj->DOB = $request->input('DOB');
        $obj->mobileNumber = $request->input('mobileNumber');
        $obj->gender = $request->input('gender');
        $obj->martialStatus = $request->input('martialStatus');
        $obj->address = $request->input('address');
        $obj->nationality = $request->input('nationality');
        $obj->state = $request->input('state');
        $obj->province = $request->input('province');
        $obj->district = $request->input('district');
        $obj->city = $request->input('city');
        $obj->fatherName = $request->input('fatherName');
        $obj->motherName = $request->input('motherName');
        $obj->fatherOccupation = $request->input('fatherOccupation');
        $obj->bankName = $request->input('bankName');
        $obj->iban = $request->input('iban');
        $obj->cnic = $request->input('cnic');
        $obj->pass = $request->input('password');
        $obj->courses = $request->input('courses');
        $obj->teachingMode = $request->input('teachingMode');
        $obj->rate = $request->input('rate');

        $obj->save();


        return redirect('/Register')->with('Message',"Registered Sucesfully");

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
