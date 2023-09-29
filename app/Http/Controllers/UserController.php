<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest('created_at')->paginate(8);
        return view('users.index',compact('users'));
}

public function show(int $id)
{
    $users = User::all('user')->findOrFail($id);



    return view('users.show', compact('users')); // Pasa las users a la vista
}

    public function create()
    {
        $user = new User();

        return view('users.create', compact('user'));
    }

    public function store(StoreuserRequest $request)
    {
        $validated = $request->validated();
        $user=User::create($validated);

        $user -> save();
        return redirect()->route('user.index');
    }

    public function edit(int $id)
    {
        $user = User::find($id);

        return view ('users.edit', compact('user'));
    }

    public function update(UpdateuserRequest $request, int $id)
    {
        $validated = $request->validated();
        $user = User::find($id);
        $user->fill($validated);
        $user->save();
        return redirect()->route('user.index');
    }

    public function destroy(int $id)
    {
        $user = User::find($id);
        $user -> delete();
        return redirect() -> route('user.index');
    }
}

