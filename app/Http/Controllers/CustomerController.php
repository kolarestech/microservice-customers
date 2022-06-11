<?php

namespace App\Http\Controllers;

use App\Actions\Customer\{
    CustomerDeleteAction,
    CustomerIndexAction,
    CustomerShowAction,
    CustomerStoreAction,
    CustomerUpdateAction
};
use App\Http\Requests\{
    CustomerDeleteRequest,
    CustomerIndexRequest,
    CustomerShowRequest,
    CustomerStoreRequest,
    CustomerUpdateRequest
};
use App\Http\Resources\{
    CustomerIndexResource,
    CustomerShowResource,
    CustomerStoreResource,
    CustomerUpdateResource
};

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CustomerIndexRequest $request, CustomerIndexAction $action)
    {
        $data = $action->exec($request->all());

        return CustomerIndexResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerStoreRequest $request, CustomerStoreAction $action)
    {
        $data = $action->exec($request->all());

        return new CustomerStoreResource($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerShowRequest $request, string $identify, CustomerShowAction $action)
    {
        $data = $action->exec($identify);

        return new CustomerShowResource($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CustomerUpdateRequest  $request
     * @param  string  $identify
     * @param  CustomerUpdateAction $action
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerUpdateRequest $request, string $identify, CustomerUpdateAction $action)
    {
        $data = $action->exec($request->validated(), $identify);

        return new CustomerUpdateResource($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerDeleteRequest $request, string $identify, CustomerDeleteAction $action)
    {
        $action->exec($identify);

        return response()->json(['success' => true]);
    }
}
