<?php

namespace App\Http\Controllers;

use App\Models\TeachingRequests;

use Illuminate\Http\Request;

class TeachingRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index($name)
    {

        if ($name == "Student" || $name == "Profile1") {

            $request['requests'] =  TeachingRequests::all();
            return view('Home.profile1', $request);
        }
         else if ($name == "Tutor" || $name == "Profile2") {
            $request['requests'] =  TeachingRequests::all();
            return view('Home.profile2', $request);
        } 
       
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Home.teachingRequestForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = new TeachingRequests();

        $req->SFirstName = $request->input('fname');
        $req->SLastName = $request->input('lname');
        $req->SEmail = $request->input('email');
        $req->SContactNumber = $request->input('number');
        $req->SAddress = $request->input('address');
        $req->SCity = $request->input('city');
        $req->SCourse = $request->input('course');
        $req->STeachingHour = $request->input('hours');
        $req->Tid = $request->input('Tid');
        $req->TName = $request->input('Tname');
        $req->Description = $request->input('description');
        $req->PaymentMethod = $request->input('paymentMethod');
        $req->TeachingMode = $request->input('teachingMode');

        $req->save();



        return redirect('/Request')->with('Message', 'Request has been send sucessfully!');
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
        $d = TeachingRequests::find($id);
        $d->delete();
        /* return redirect('/DBTeachingRequests/Profile1')->with('Message','Deleted Sucessfully'); */
    }
}
