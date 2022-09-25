<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donor;


class DonorController extends Controller
{



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $donors= donor::latest()->paginate(5);
        $donors = donor::all();
        return view('pages.donors')->with('donors', $donors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.donate');
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
        // print_r($request->all());
        //$now = date('Y-m-d H:i');
        $donate = new donor;
        $donate->name = $request->name;
        $donate->blood_group = $request->blood_group;
        $donate->gender = $request->gender;
        $donate->dob = $request->dob;
        $donate->email = $request->email;
        $donate->contact_no = $request->contact_no;
        $donate->city = $request->city;
        $donate->password = $request->password;
        $donate->save();
        return redirect('donors')->with('Message', 'Successfully submit!');
        //  return redirect()->with('Message', 'Successfully submit!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $donors= donor::find($id);
        // $donors = donor::all();
        //    return view('pages.donors')->with('donors',$donors);


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
