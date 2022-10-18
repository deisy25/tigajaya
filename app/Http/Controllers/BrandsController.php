<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Brand;

class BrandsController extends Controller
{
    public function list()
    {
        return view('brands.list', [
            'brands' => Brand::all()
        ]);
    }

    public function addForm()
    {

        return view('brands.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'name' => 'required',
        ]);

        $brand = new Brand();
        $brand->name = $attributes['name'];
        $brand->save();

        return redirect('/console/brands/list')
            ->with('message', 'Brand has been added!');
    }

    public function editForm(Brand $brand)
    {
        return view('brands.edit', [
            'brand' => $brand,
        ]);
    }

    public function edit(Brand $brand)
    {

        $attributes = request()->validate([
            'name' => 'required',
        ]);

        $brand->name = $attributes['name'];
        $brand->save();

        return redirect('/console/brands/list')
            ->with('message', 'Brand has been edited!');
    }

    public function delete(Brand $brand)
    {
        $brand->delete();
        
        return redirect('/console/brands/list')
            ->with('message', 'Brand has been deleted!');        
    }
}
