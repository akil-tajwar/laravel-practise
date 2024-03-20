<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class Form2Controller extends Controller
{
    public function index()
    {
        $url = url('/form2');
        $title = 'Customer Registration';
        $data = compact('url', 'title', 'url');
        return view('form2', $data);
    }
    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->birthDate = $request['birthDate'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('/form2/view');
    }
    public function view(Request $request)
    {
        $search = $request['search'] ?? '';
        if($search == ''){
            $customers = Customer::all();
        }
        else{
            $customers = Customer::where('name', 'LIKE', "$search%")->orWhere('address', 'LIKE', "%$search%")->get();
        }
        $data = compact('customers', 'search');
        return view('customer-view')->with($data);
    }
    public function trash(){
        $customers = Customer::onlyTrashed()->get();
        $data = compact('customers');
        return view('customer-trash')->with($data);
    }
    public function delete($id)
    {
        Customer::find($id)->delete();
        return redirect()->back();
    }
    public function forceDelete($id)
    {
        Customer::withTrashed()->find($id)->forceDelete();
        return redirect()->back();
    }
    public function restore($id)
    {
        Customer::withTrashed()->find($id)->restore();
        return redirect()->back();
    }
    public function edit($id)
    {
        $customer = Customer::find($id);
        if ($customer) {
            //found
            $title = 'Update Customer';
            $url = url('/form2/view/update') . '/' . $id;
            $data = compact('customer', 'title', 'url');
            return view('form2')->with($data);
        } else {
            //not found
            return redirect('/form2/view');
        }
    }
    public function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->birthDate = $request['birthDate'];
        $customer->save();
        return redirect('form2/view');
    }
}
