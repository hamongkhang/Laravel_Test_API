<?php

namespace App\Http\Controllers;

use App\Http\Resources\InvestmentResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;

class CustomerController
{
    public function store(CustomerStoreRequest $request)
    {
        // creates customer

        return response()->noContent(201);
    }
}