<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/dash');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/custom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // //validasi data dulu
        // $request->validate([
        //     'code' => 'required',
        //     'date' => 'required',
        //     'customer' => 'required',
        //     'city'=>'required',
        // ]);
        // 	// insert data ke table customer
	    // DB::table('customer')->insert([
		// 'code'            => $request->code,
		// 'date'            => $request->date,
		// 'customer'        => $request->customer,
		// 'city'            => $request->city
	    // ]);
        // User::create($request);
	    //     // alihkan halaman ke halaman customer
	    // return redirect('/dash');

        $regcus = $request->validate([
            'code' => 'required',
            'date' => 'required',
            'customer' => 'required',
            'city'=>'required',
        ]);

        Customer::create($regcus);
        
        // $request->session()->flash('success','Register Successfull , Please Login');

        return redirect('/custom')->with('success','Data Entry Success');
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
        $customer = Customer::findOrFail($id);
        return view('/custom', compact('customer'));
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
        $regcus = $request->validate([
            'code' => 'required',
            'date' => 'required',
            'customer' => 'required',
            'city'=>'required',
        ]);

        

    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @param  \app\models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    
    {  
        dd($customer);
    //    $customer->delete();
        return redirect('/custom')->with('success','Data Delete Success');
    }
}
