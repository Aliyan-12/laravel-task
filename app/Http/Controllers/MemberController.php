<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    private $repository = null;
    public function __construct(\App\Repositories\MembersRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = $this->repository->all();
        return view("panel.members.view", compact("members"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("panel.members.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->repository->create($request->all());
        return redirect()->route("member.view")->with('success', 'Member created successfully!');
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
        $member = $this->repository->getBy('id', $id);
        return view("panel.members.edit", compact(('member')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        if($this->repository->update($request->all(), $id)) {
            return redirect()->route('member.view')->with('success', 'Member updated successfully!');
        }
        return redirect()->route('member.view')->with('failure', 'Member not found!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if($this->repository->destroy($id)) {
            return redirect()->back()->with('success', 'Member deleted successfully!');
        }
        return redirect()->back()->with('failure', 'Member not found!');
    }

    public function load(Request $request)
    {
        // dd($request->has('houseId'));
        $members = [];
        if($request->has('houseId')) {
            $members = $this->repository->getCollectionBy('house_id', $request->get('houseId'));
        }
        // dd($members);
        return $members;
    }
}
