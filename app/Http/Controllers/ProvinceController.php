<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    private $repository = null;
    public function __construct(\App\Repositories\ProvinceRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinces = $this->repository->all();
        return view("panel.provinces.view", compact("provinces"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("panel.provinces.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->repository->create($request->all());
        return redirect()->route("province.view")->with('success', 'Province created successfully!');
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
        $province = $this->repository->getBy('id', $id);
        return view("panel.provinces.edit", compact(('province')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($this->repository->update($request->all(), $id)) {
            return redirect()->route('province.view')->with('success', 'Province updated successfully!');
        }
        return redirect()->route('province.view')->with('failure', 'Province not found!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if($this->repository->destroy($id)) {
            return redirect()->back()->with('success', 'Province deleted successfully!');
        }
        return redirect()->back()->with('failure', 'Province not found!');
    }
}
