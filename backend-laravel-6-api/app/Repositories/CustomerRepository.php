<?php

namespace App\Repositories;

use App\Customers;


class CustomerRepository
{

    public function all()
    {
        return Customers::orderBy('name')
        ->where('active',1)
        ->with('user')
        ->get()
        ->map->format();


    }


    public function FindById($customerId)
    {
        return Customers::where('id',$customerId)
                ->where('active',1)
                ->with('user')
                ->firstOrFail()
                ->format();


    }
    public function FindByUsername($username)
    {

    }

    public function update($customerId)
    {
        $customer = Customers::where('id', $customerId)->firstOrFail();

        $customer->update(request()->only('name'));
    }

    public function delete($customerId)
    {
        $customer = Customers::where('id', $customerId)->delete();

    }
}
