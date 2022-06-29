<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('admins.dashboard', compact('users'));
    }

    public function create()
    {
        
    }

    public function edit($id)
    {
        $userRecord = User::find($id);
        return view('admins.edit', compact('userRecord'));
    }

    public function update($id, User $user, Request $request)
    {
        $userRecord = $user::find($id);

        $userRecord->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'gender' => $request->gender,
        ]);

        return redirect('userlist');
    }

    public function destroy($id)
    {
        $userRecord = User::find($id);
        $userRecord->delete();
        return redirect('userlist');
    }
}
