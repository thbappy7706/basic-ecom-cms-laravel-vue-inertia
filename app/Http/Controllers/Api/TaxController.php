<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaxStoreRequest;
use App\Http\Requests\TaxUpdateRequest;
use App\Interfaces\TaxServiceInterface;
use App\Models\Tax;

class TaxController extends Controller
{
    protected $taxService;

    public function __construct(TaxServiceInterface $taxService)
    {
        $this->taxService = $taxService;
    }

    public function index()
    {
        $tax = $this->taxService->all();

        return $tax;
    }

    public function create()
    {
        //
    }

    public function store(TaxStoreRequest $request)
    {
        $taxStore = $this->taxService->store($request->validated());

        return response()->json(['data' => $taxStore, 'message' => 'Tax created successfully'], 201);
    }

    public function show(Tax $tax)
    {
        return $this->taxService->find($tax);
    }

    public function edit(Tax $tax)
    {
        //
    }

    public function update(TaxUpdateRequest $request, Tax $tax)
    {
        $taxUpdate = $this->taxService->update($request->validated(), $tax);

        return response()->json(['data' => $taxUpdate, 'message' => 'Tax Updated successfully']);
    }

    public function destroy(Tax $tax)
    {
        return $this->taxService->delete($tax);
    }
}
