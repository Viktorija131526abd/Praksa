<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Silber\Bouncer\BouncerFacade as Bouncer;

class UserController extends Controller
{
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile_number' => 'required|string|max:255',
            'class_id' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
            'date_of_birth' => 'required|date',
            'role' => 'required|string|max:255',
            'created_by' => 'required|string|max:255',
            'updated_by' => 'required|string|max:255',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make('password'), // or you can ask for password input
            'mobile_number' => $validated['mobile_number'],
            'class_id' => $validated['class_id'],
            'gender' => $validated['gender'],
            'date_of_birth' => $validated['date_of_birth'],
            'role' => $validated['role'],
            'created_by' => $validated['created_by'],
            'updated_by' => $validated['updated_by'],
        ]);

        if ($request->hasFile('image')) {
            $user->image = $request->file('image')->store('images', 'public');
            $user->save();
        }

        Bouncer::assign($validated['role'])->to($user);

        return redirect()->back()->with('success', 'User created successfully.');
    }
}
