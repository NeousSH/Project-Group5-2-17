<?php

namespace App\Http\Controllers;

use App\Models\Product;
use File;
use Illuminate\Http\Request;
use Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin_product', ['products' => Product::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'img' => 'nullable|image'
        ]);
        $p = Product::create($request->post());

        if ($file = $request->file('img')) {
            $name = $this->upload($file);
            $p->img = $name;

        }
        $p->save();

        return redirect()->route('admin_product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_product');
    }

    public function upload($file)
    {
        if ($file) {
            $fileName = time() . $file->getClientOriginalName();
            Storage::disk('public')->put('img/' . $fileName, File::get($file));
            return 'storage/img/' . $fileName;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('edit_product', ['product' => Product::find($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('edit_product', ['product' => Product::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $p = Product::find($id)->fill($request->post());
        if ($file = $request->file('img')) {
            $name = $this->upload($file);
            $p->img = $name;

        }
        $p->save();
        return redirect()->route('admin_product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect()->route('admin_product.index');
    }
}
