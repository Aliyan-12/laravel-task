<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisionController extends Controller
{
    private $repository = null;
    public function __construct(\App\Repositories\DivisionRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisions = $this->repository->all();
        return view("panel.divisions.view", compact("divisions"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("panel.divisions.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->repository->create($request->all());
        return redirect()->route("division.view")->with('success', 'Division created successfully!');
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
        $division = $this->repository->getBy('id', $id);
        return view("panel.divisions.edit", compact(('division')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($this->repository->update($request->all(), $id)) {
            return redirect()->route('division.view')->with('success', 'Division updated successfully!');
        }
        return redirect()->route('division.view')->with('failure', 'Division not found!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if($this->repository->destroy($id)) {
            return redirect()->back()->with('success', 'Division deleted successfully!');
        }
        return redirect()->back()->with('failure', 'Division not found!');
    }

    public function load(Request $request)
    {
        // dd($request->has('provinceId'));
        $divisions = [];
        if($request->has('provinceId')) {
            $divisions = $this->repository->getCollectionBy('province_id', $request->get('provinceId'));
        }
        // dd($divisions);
        return $divisions;
    }
}
