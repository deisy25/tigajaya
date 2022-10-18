<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function list()
    {
        return view('categories.list', [
            'categories' => Category::all()
        ]);
    }

    public function addForm()
    {

        return view('categories.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'name' => 'required',
        ]);

        $categories = new Category();
        $categories->name = $attributes['name'];
        $categories->save();

        return redirect('/console/categories/list')
            ->with('message', 'Category has been added!');
    }

    public function editForm(Category $category)
    {
        return view('categories.edit', [
            'category' => $category,
        ]);
    }

    public function edit(Category $category)
    {

        $attributes = request()->validate([
            'name' => 'required',
        ]);

        $category->name = $attributes['name'];
        $category->save();

        return redirect('/console/categories/list')
            ->with('message', 'Categories has been edited!');
    }

    public function delete(Category $category)
    {
        $category->delete();
        
        return redirect('/console/categories/list')
            ->with('message', 'Category has been deleted!');        
    }
}
