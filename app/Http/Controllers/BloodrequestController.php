<?php

namespace App\Http\Controllers;

use App\Models\bloodrequest;
use Illuminate\Http\Request;


class BloodrequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bloodreqs = bloodrequest::all();
        return view('pages.bloodreqshow')->with('bloodreqs', $bloodreqs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.bloodrequest');
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
        $bloodreq = new bloodrequest;
        $bloodreq->name = $request->name;
        $bloodreq->blood_group = $request->blood_group;
        $bloodreq->gender = $request->gender;
        $bloodreq->dob = $request->dob;
        $bloodreq->email = $request->email;
        $bloodreq->contact_no = $request->contact_no;
        $bloodreq->city = $request->city;
        $bloodreq->dec = $request->dec;
        $bloodreq->save();

        return redirect('requests/create')->with('Message', 'Successfully submit!');
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
