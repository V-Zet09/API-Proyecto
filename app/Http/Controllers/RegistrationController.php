<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use App\Filters\RegistrationFilters;
use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use App\Http\Resources\RegistrationCollection;
use App\Http\Resources\RegistrationResource;


class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index(Request $request)
    {
        $filter =new RegistrationFilters();
        $queryItems = $filter->transform($request);

        $registration=Registration::where($queryItems);
        return new RegistrationCollection($registration->paginate()->appends($request->query()));
    }

    public function create()
    {
        //
    }

    public function store(StoreRegistrationRequest $request)
    {
        return new RegistrationResource(Registration::create($request->all()));
    }

    public function show(Registration $registration)
    {
       //
        return new RegistrationResource($registration);
    }


    public function edit(Registration $registration)
    {
      //
    }

    public function update(UpdateRegistrationRequest $request, Registration $registration)
    {
        //
        $registration->update($request->all());
    }

    public function destroy(Registration $registration)
    {
       //
    }


}
