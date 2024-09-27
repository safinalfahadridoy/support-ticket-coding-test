<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    
      public function index()
      {
         
          $ct = DB::table('customers')
                  ->get();
           
          return view('home.customer.index')
                    ->withCustomers($ct);

      }
  
      public function create()
      {
      
          return view('home.customer.create');
  
      }
  
      public function store(Request $request)
      {
          
          $ct = new customer();
  
          $ct->uni_id = $request->uniId;
          $ct->name = $request->name;
          $ct->phone = $request->phone;
          $ct->email = $request->email;
          $ct->category = $request->category;
          $ct->status = $request->status;
            
          $ct->save();
  
          return redirect()->route('customer.show',$ct->id);
      }
  
      public function show(Customer $customer)
      {
        
          
          $ct = customer::find($customer->id);
                  
          return view('home.customer.show')
                  ->withCt($ct);
      }
  
}
