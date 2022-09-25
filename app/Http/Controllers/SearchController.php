<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donor;

class SearchController extends Controller
{

  public function search()
  {



    $donors = donor::all();

    return view('pages.search', [
      'donors' => $donors
    ]);




    ///////live searching/////////////////////
    // if ($request->ajax()) {

    //   $output = '';

    //   $donors = donor::where('city', 'LIKE', '%' . $request->search . '%')
    //     ->orWhere('blood_group', 'LIKE', '%' . $request->search . '%')
    //     ->get();

    //   if ($donors) {

    //     foreach ($donors as $donor) {

    //       $output .=
    //         '

    //          <div class="col-md-3 col-sm-12 col-lg-10">
    //             <h2><span><b>' . $donor->name . '</span></h2>
    //             <span><b>' . $donor->city . '</b></span><br>
    //             <span><b>' . $donor->blood_group . '</b> </span><br>
    //             <span<b>' . $donor->gender . '</b></span><br>
    //         </div>
    //         ';
    //     }

    //     return response()->json($output);
    //   }
    // }


    // return view('pages.search');
    /////////////////end live searching////////////



  }

  public function search_data(Request $request)
  {

    $city = $request->city;
    $blood_group = $request->blood_group;
    if ($city != " ") {
      //where 
      $donors = donor::where('city', 'LIKE', "%$city%")->Where('blood_group', 'LIKE', "%$blood_group%")->get();
    } else {

      $donors = donor::all();
    }

    return view('pages.search', [
      'donors' => $donors
    ]);
  }
}
