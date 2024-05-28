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

    public function createHeadmasterForm()
    {
        return view('admin.create_headmaster');
    }

    public function storeHeadmaster(Request $request)
    {
        // Validacija podataka
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Kreiranje novog korisnika
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Dodela uloge menadžera korisniku
        // Ovde dodajte kod za dodelu uloge menadžera korisniku, koristeći Bouncer ili drugi alat za upravljanje ulogama
        Bouncer::assign('headmaster')->to($user);

        // Redirekcija nakon uspešnog dodavanja menadžera
        return redirect()->route('dashboard')->with('success', 'Manager created successfully');
    }
    public function index()
    {
        $users = User::all();

        $canEdit = Bouncer::can('edit-users');
        $canDelete = Bouncer::can('delete-users');

        return view('users.index', compact('users', 'canEdit', 'canDelete',));
    }


    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'sometimes|string|in:admin,user,moderator' // Adjust roles as needed
        ]);

        // Prevent updating email or username
        $data = $request->except(['email', 'username']);

        // Prevent changing role to highest role
        if (!Bouncer::is($user)->an('Admin') && $request->role === 'admin') {
            return redirect()->back()->withErrors(['role' => 'You cannot change the role to admin.']);
        }

        // Update user data
        $user->update($data);

        // Update user role if necessary
        if ($request->has('role')) {
            Bouncer::sync($user)->roles([$request->role]);
        }

        return redirect()->route('users.edit', $user)->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        if ($user->roles->pluck('name')->contains('admin')) {
            return redirect()->back()->withErrors(['error' => 'Cannot delete admin user.']);
        }
        $user->delete();

        return redirect()->route('dashboard')->with('success', 'User deleted successfully.');
    }


}
