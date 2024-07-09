<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TehsilController extends Controller
{
    private $repository = null;
    public function __construct(\App\Repositories\TehsilRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tehsils = $this->repository->all();
        return view("panel.tehsils.view", compact("tehsils"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("panel.tehsils.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->repository->create($request->all());
        return redirect()->route("tehsils.view")->with('success', 'Tehsil created successfully!');
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
        $tehsil = $this->repository->getBy('id', $id);
        return view("panel.tehsils.edit", compact(('tehsil')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($this->repository->update($request->all(), $id)) {
            return redirect()->route('tehsil.view')->with('success', 'Tehsil updated successfully!');
        }
        return redirect()->route('tehsil.view')->with('failure', 'Tehsil not found!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if($this->repository->destroy($id)) {
            return redirect()->back()->with('success', 'Tehsil deleted successfully!');
        }
        return redirect()->back()->with('failure', 'Tehsil not found!');
    }

    public function load(Request $request)
    {
        // dd($request->has('provinceId'));
        $tehsils = [];
        if($request->has('districtId')) {
            $tehsils = $this->repository->getCollectionBy('district_id', $request->get('districtId'));
        }
        // dd($tehsils);
        return $tehsils;
    }
}
