<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['peoducts'] = Product::all();
        return view('backend.student.index', $data);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['cats'] = Category::All();
        return view('backend.student.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'catagory_id' => $request->catid,
            'tags' => $request->tags,
            'image'=> 'mimes:jpg,jpeg',
        ];
        $model = new Product();
        if ($model->insert($data)){
            return redirect('student')->with('msg', 'Inserted Successfully');
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
        $student = Product::find($id);
        $cats = Category::all();
        return view('backend.student.edit', compact('student', 'cats'));
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

    public function delete(string $id)
    {
        
    }


    
}
