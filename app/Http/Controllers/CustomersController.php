<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index ()
    {
        $customers = Customer::all();

        return view('customers/index', compact('customers'));
    }

    public function create ()
    {
        return view('customers/create');
    }

    public function store (Request $request)
    {
        $customer         = new Customer;
        $customer->nama   = $request->nama;
        $customer->email  = $request->email;
        $customer->telp   = $request->telp;
        $customer->alamat = $request->alamat;
        $customer->save();

        return redirect('customers');
    }
}
