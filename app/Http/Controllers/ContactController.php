<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //GET all contacts
        return Contact::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Request validation(Required fields)
        $request->validate([
            'fullName' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        //Create products
        return Contact::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Get single contact
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
