<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $repository = null;
    public function __construct(\App\Repositories\UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->repository->all();
        return view("panel.users.view", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("panel.users.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $data['members'] = implode(', ', $data['member_id']);
        $this->repository->create($data);
        return redirect()->route("user.view")->with('success', 'User created successfully!');
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
        $user = $this->repository->getBy('id', $id);
        return view("panel.users.edit", compact(('user')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $data['members'] = implode(', ', $data['member_id']);
        if($this->repository->update($data, $id)) {
            return redirect()->route('user.view')->with('success', 'User updated successfully!');
        }
        return redirect()->route('user.view')->with('failure', 'User not found!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if($this->repository->destroy($id)) {
            return redirect()->back()->with('success', 'User deleted successfully!');
        }
        return redirect()->back()->with('failure', 'User not found!');
    }
}
