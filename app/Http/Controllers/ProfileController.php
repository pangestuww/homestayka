<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // =====================================================
    // PROFILE
    // =====================================================

    public function index()
    {
        $user = Auth::user();

        $profileFields = [
            $user->name,
            $user->email,
            $user->phone,
            $user->gender,
            $user->birth_date,
            $user->address,
        ];

        $filledFields = collect($profileFields)
            ->filter(function ($value) {
                return !empty($value);
            })
            ->count();

        $totalFields = count($profileFields);

        $profilePercentage = round(
            ($filledFields / $totalFields) * 100
        );

        $profileComplete = $profilePercentage === 100;

        return view('profile', compact(
            'user',
            'profilePercentage',
            'profileComplete'
        ));
    }


    // =====================================================
    // EDIT PROFILE PAGE
    // =====================================================

    public function edit()
    {
        $user = Auth::user();

        return view('profile-edit', compact('user'));
    }


    // =====================================================
    // UPDATE PROFILE
    // =====================================================

    public function update(Request $request)
    {
        $user = Auth::user();

        if (! $user) {
            return redirect()->route('login');
        }

        $request->validate([

            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email,' . $user->id,
            ],

            'phone' => [
                'nullable',
                'string',
                'max:20',
            ],

            'gender' => [
                'nullable',
                'in:Laki-laki,Perempuan',
            ],

            'birth_date' => [
                'nullable',
                'date',
            ],

            'address' => [
                'nullable',
                'string',
                'max:1000',
            ],

        ]);

        $user = \App\Models\User::findOrFail($user->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->birth_date = $request->birth_date;
        $user->address = $request->address;

        $user->save();


        return redirect()
            ->route('profile')
            ->with('success', 'Profil berhasil diperbarui.');
    }
}
