<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()
    {

        $url = url('/record');
        $title =  'Add Record';
        $data = compact('url', 'title');
        return view('add_record.add_record')->with($data)->with('customer', new customers);
        // ->with('customer', new customers);
    }

    public function store(Request $request)
    {
    //    echo '<pre>';
    //    print_r(array($request));

       $customers = new customers;

       $customers->name = $request['name'];
       $customers->email = $request['email'];
       $customers->gender =$request['gender'];
       $customers->dob = $request['dob'];
       $customers->address = $request['address'];
       $customers->save();
       return redirect('/customer/view');
       



    }
    public function view()
    {
        $customers = customers::all()->sortBy('name');
        $data = compact('customers');
        return view('record.record')->with($data);
    }
    public function delete($id)
    {
       customers::find($id)->delete();
       return redirect()->back();
    }
    public function edit($id)
    {
        $customer = customers::find($id);
        $url = url('/customer/update') . "/" . $id;
        $title = 'Update User';
        $data = compact('customer','title','url');
        return view('add_record.add_record')->with($data);


    }
    public function update($id, Request $request)
    {
        $customer = customers::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->dob = $request['dob'];
        $customer->address = $request['address'];
        $customer->update();
        return redirect('/customer/view');
    }
    

}
