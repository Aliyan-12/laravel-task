<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistrictController extends Controller
{
    private $repository = null;
    public function __construct(\App\Repositories\DistrictRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $districts = $this->repository->all();
        return view("panel.districts.view", compact("districts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("panel.districts.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->repository->create($request->all());
        return redirect()->route("district.view")->with('success', 'District created successfully!');
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
        $district = $this->repository->getBy('id', $id);
        return view("panel.districts.edit", compact(('district')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($this->repository->update($request->all(), $id)) {
            return redirect()->route('district.view')->with('success', 'District updated successfully!');
        }
        return redirect()->route('district.view')->with('failure', 'District not found!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if($this->repository->destroy($id)) {
            return redirect()->back()->with('success', 'District deleted successfully!');
        }
        return redirect()->back()->with('failure', 'District not found!');
    }

    public function load(Request $request)
    {
        // dd($request->has('divisionId'));
        $districts = [];
        if($request->has('divisionId')) {
            $districts = $this->repository->getCollectionBy('division_id', $request->get('divisionId'));
        }
        return $districts;
    }
}
