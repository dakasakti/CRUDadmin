<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Customer::select('*'))
            ->addColumn('action', 'customer.action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('customer.index');
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
        $companyId = $request->id;
        $company = Customer::updateOrCreate(
            [
                'id' => $companyId
            ],
            [
               'code' => $request->code, 
               'date' => $request->date,
               'customer' => $request->customer,
               'city' => $request->city
            ]
        );    
                         
        return Response()->json($company);

        // $regcus = $request->validate([
        //     'code' => 'required',
        //     'date' => 'required',
        //     'customer' => 'required',
        //     'city'=>'required',
        // ]);

        // Customer::create($regcus);
        
        // $request->session()->flash('success','Register Successfull , Please Login');
        // return redirect('/customer')->with('success','Data Entry Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $company = Customer::where($where)->first();
      
        return Response()->json($company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {   
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @param  \app\models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    
    {  
        $company = Customer::where('id', $request->id)->delete();
        return Response()->json($company);

        // Customer::destroy($customer->id);
        // return redirect('/customer')->with('success','Data Delete Success');
    }
}
