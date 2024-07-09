<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UCController extends Controller
{
    private $repository = null;
    public function __construct(\App\Repositories\UCRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unionCouncils = $this->repository->all();
        return view("panel.union-councils.view", compact("unionCouncils"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("panel.union-councils.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->repository->create($request->all());
        return redirect()->route("union-council.view")->with('success', 'Union Council created successfully!');
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
        $unionCouncil = $this->repository->getBy('id', $id);
        return view("panel.union-councils.edit", compact(('unionCouncil')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($this->repository->update($request->all(), $id)) {
            return redirect()->route('union-council.view')->with('success', 'Union Council updated successfully!');
        }
        return redirect()->route('union-councils.view')->with('failure', 'Union Council not found!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if($this->repository->destroy($id)) {
            return redirect()->back()->with('success', 'Union Council deleted successfully!');
        }
        return redirect()->back()->with('failure', 'Union Council not found!');
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
