<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view("dashboard.index")->with([
            "title" => "Dashboard",
            "active" => "dashboard",
        ]);
    }

    public function edit()
    {
        return view("dashboard.update")->with([
            "title" => "Edit Profile",
            "active" => "dashboard",
        ]);
    }
    //create method update in laravel with request and user model
    public function update(Request $request, $user)
    {
        // return dd($user);
        $validated = $request->validate([
            "Name" => "required",
            "Username" => "required",
            "Email" => "required",
        ]);
        User::where("id", $user)->update($validated);
        return redirect("/dashboard")->with(
            "success",
            "Profile updated successfully"
        );
    }
}
