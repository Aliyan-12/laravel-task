<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseController extends Controller
{
    private $repository = null;
    public function __construct(\App\Repositories\HouseRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $houses = $this->repository->all();
        return view("panel.houses.view", compact("houses"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("panel.houses.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->repository->create($request->all());
        return redirect()->route("house.view")->with('success', 'House created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $house = $this->repository->getBy('id', $id);
        return view("panel.houses.edit", compact(('house')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        if($this->repository->update($request->all(), $id)) {
            return redirect()->route('house.view')->with('success', 'House updated successfully!');
        }
        return redirect()->route('house.view')->with('failure', 'House not found!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if($this->repository->destroy($id)) {
            return redirect()->back()->with('success', 'House deleted successfully!');
        }
        return redirect()->back()->with('failure', 'House not found!');
    }

    public function load(Request $request)
    {
        // dd($request->has('ucId'));
        $houses = [];
        if($request->has('ucId')) {
            $houses = $this->repository->getCollectionBy('uc_id', $request->get('ucId'));
        }
        // dd($houses);
        return $houses;
    }
}
