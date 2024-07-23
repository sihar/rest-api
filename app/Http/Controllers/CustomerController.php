<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return response()->json($customer);
    }

    public function show($id)
    {
        $customer =Customer::find($id);
        return response()->json($customer);
    }

    public function store(Request $request)
    {
        $customer =Customer::create($request->all());
        return response()->json($customer, 201);
    }

    public function update(Request $request, $id)
    {
        $Customer =Customer::find($id);
        $Customer->update($request->all());
        return response()->json($Customer, 200);
    }

    public function destroy($id)
    {
        Customer::destroy($id);
        return response()->json(null, 204);
    }
}
