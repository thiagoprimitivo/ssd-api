<?php

namespace App\Http\Controllers;

use App\SecuritySystem;
use Illuminate\Http\Request;

class SecuritySystemController extends Controller
{

    public function index()
    {
        return response()->json(SecuritySystem::all());
    }

    public function create(Request $request)
    {
        $security_system = SecuritySystem::create($request->all());

        return response()->json($security_system, 201);
    }

    public function update($id, Request $request)
    {
        $security_system = SecuritySystem::findOrFail($id);
        $security_system->update($request->all());

        return response()->json($security_system, 200);
    }
}
