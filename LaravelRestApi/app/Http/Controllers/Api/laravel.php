<?php

namespace App\Http\Controllers\Api;

use App\Models\Human;
use App\Http\Controllers\Controller;
use App\Http\Resources\HumanCollection;
use App\Http\Requests\StoreHumanRequest;
use App\Http\Resources\HumanResource;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $humans = Human::all();
        return HumanResource::collection($humans);
        // return new HumanCollection(Human::all());
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
        $humans = Human::create($request ->all());
        return new HumanResource($humans);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Human  $human
     * @return \Illuminate\Http\Response
     */
    public function show(Human $human)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Human  $human
     * @return \Illuminate\Http\Response
     */
    public function edit(Human $human)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Human  $human
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHumanRequest $request, Human $human)
    {
        $human -> update($request->all());
        return new HumanResource(human);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Human  $human
     * @return \Illuminate\Http\Response
     */
    public function destroy(Human $human)
    {
        $human->delete();
        return response(null, 204);
    }
}
