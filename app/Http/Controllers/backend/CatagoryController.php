<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;



class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['cats'] = Category::All();
        return view('backend.catagory.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.catagory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [ 'name'=> $request->name];

        //print_r($data);
        if (Category::insert($data)){
            return redirect('catagory')->with('msg', 'Inserted Successfully');
        };
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
        return view('backend.catagory.edit');
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
