<?php

namespace App\Http\Controllers;

use App\Actions\Short\{
    ShortDeleteAction,
    ShortIndexAction,
    ShortShowAction,
    ShortStoreAction,
    ShortUpdateAction
};
use App\Http\Requests\{
    ShortDeleteRequest,
    ShortIndexRequest,
    ShortShowRequest,
    ShortStoreRequest,
    ShortUpdateRequest
};
use App\Http\Resources\{
    ShortIndexResource,
    ShortShowResource,
    ShortStoreResource,
    ShortUpdateResource
};

class ShortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ShortIndexRequest $request, ShortIndexAction $action)
    {
        $data = $action->exec($request->all());

        return ShortIndexResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShortStoreRequest $request, ShortStoreAction $action)
    {
        $data = $action->exec($request->all());

        return new ShortStoreResource($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ShortShowRequest $request, string $identify, ShortShowAction $action)
    {
        $data = $action->exec($identify);

        return new ShortShowResource($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ShortUpdateRequest  $request
     * @param  string  $identify
     * @param  ShortUpdateAction $action
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(ShortUpdateRequest $request, string $identify, ShortUpdateAction $action)
    {
        $data = $action->exec($request->validated(), $identify);

        return new ShortUpdateResource($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShortDeleteRequest $request, string $identify, ShortDeleteAction $action)
    {
        $action->exec($identify);

        return response()->json(['success' => true]);
    }
}
