<?php

namespace App\Http\Controllers;

use App\Actions\Creator\{
    CreatorDeleteAction,
    CreatorIndexAction,
    CreatorShowAction,
    CreatorStoreAction,
    CreatorUpdateAction
};
use App\Http\Requests\{
    CreatorDeleteRequest,
    CreatorIndexRequest,
    CreatorShowRequest,
    CreatorStoreRequest,
    CreatorUpdateRequest
};
use App\Http\Resources\{
    CreatorIndexResource,
    CreatorShowResource,
    CreatorStoreResource,
    CreatorUpdateResource
};

class CreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CreatorIndexRequest $request, CreatorIndexAction $action)
    {
        $data = $action->exec($request->all());

        return CreatorIndexResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatorStoreRequest $request, CreatorStoreAction $action)
    {
        $data = $action->exec($request->all());

        return new CreatorStoreResource($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CreatorShowRequest $request, string $identify, CreatorShowAction $action)
    {
        $data = $action->exec($identify);

        return new CreatorShowResource($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CreatorUpdateRequest  $request
     * @param  string  $identify
     * @param  CreatorUpdateAction $action
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(CreatorUpdateRequest $request, string $identify, CreatorUpdateAction $action)
    {
        $data = $action->exec($request->validated(), $identify);

        return new CreatorUpdateResource($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreatorDeleteRequest $request, string $identify, CreatorDeleteAction $action)
    {
        $action->exec($identify);

        return response()->json(['success' => true]);
    }
}
