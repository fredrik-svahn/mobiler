<?php

namespace App\Http\Controllers\API\Customer;

use App\Address;
use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Customer $customer)
    {
        return response()->json($customer->addresses()->get() );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Customer $customer)
    {
        $insert = $this->validateAndCollect($request, [
           'street' => 'required|string|max:191',
            'street2' => 'string|max:191',
           'city' => 'required|string|max:191',
        ]);

        return response()->json($customer->addresses()->save(Address::create($insert)));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer, $addressId)
    {
        return response()->json($customer->addresses()->findOrFail($addressId));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Customer $customer, Address $addressId)
    {
        $update = $this->validateAndCollect($request, [
            'street' => 'string|max:191',
            'street2' => 'string|max:191',
            'city' => 'string|max:191',
        ]);

        return response()->json($customer->addresses()->findOrFail($addressId)->update($update));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Customer $customer, Address $address)
    {
        return response()->json($address->delete());
    }
}
