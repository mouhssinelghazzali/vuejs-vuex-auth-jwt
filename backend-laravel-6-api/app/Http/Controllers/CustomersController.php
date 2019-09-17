<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;
use App\Repositories\CustomerRepository;

class CustomersController extends Controller
{

    private $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
       $this->customerRepository = $customerRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = $this->customerRepository->all();

        return $customers;
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
        //
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\customers  $customers
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(customers $customers)
    // {
    //     //
    // }

    public function show($customerId)
    {
        $customers = $this->customerRepository->FindById($customerId);

        return $customers;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(customers $customers)
    {
        //
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\customers  $customers
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, customers $customers)
    // {
    //     //
    // }
    public function update($customerId)
    {
        $this->customerRepository->update($customerId);

        return redirect('/customer/' . $customerId);

    }

    public function delete($customerId)
    {
        $this->customerRepository->delete($customerId);

        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(customers $customers)
    {
        //
    }
}
