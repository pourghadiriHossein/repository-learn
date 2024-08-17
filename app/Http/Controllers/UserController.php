<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\Providers\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(
        protected UserService $userService
    ){}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->userService->all();
        return view('all',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
        ]);
        $user = $this->userService->cerate($data);
        return redirect(route('show',[
            'user' => $user
        ]));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $user = $this->userService->find($user);
        return view('detail',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $user = $this->userService->find($user);
        return view('update',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
        ]);
        $user = $this->userService->update($data,$user);
        return redirect(route('show',[
            'user' => $user
        ]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->userService->delete($user);
        return redirect(route('all'));
    }
}
