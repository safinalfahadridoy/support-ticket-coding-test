<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
      {
         
          $ct = DB::table('customers')
                  ->get();
           
          return view('home.admin.index')
                    ->withCustomers($ct);


      }

      public function delete($id)
      {
        $data = Customer::find($id);

        if($data){
            $data->delete();
            return redirect()->back()->with('success','Data deleted succesfully');
        }
        else{
            return redirect()->back()->with('error','Data not found');
        }
      }
}
