<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();
        return view('admin.category.index',compact('categories'));
    }

    public function categoryStore(Request $request){
        $request->validate([
            'category_name_en' => 'required',
            'category_name_bn' => 'required',
            'category_icon'    => 'required',
        ]);

        Category::create([
            'category_name_en' => $request->category_name_en,
            'category_name_bn' => $request->category_name_bn,
            'category_icon' => $request->category_icon,
            'category_slug_en' => strtolower(str_replace(' ', '-', $request->category_name_en)),
            'category_slug_bn' => str_replace(' ', '-', $request->category_name_bn),
        ]);

        return redirect()->back()->with('success', 'Category Added successfully!');
    }

    public function categoryEdit($id){
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    public function categoryUpdate(Request $request)
    {
        $category = Category::findOrFail($request->id);

        $request->validate([
            'category_name_en' => 'required',
            'category_name_bn' => 'required',
            'category_icon'    => 'required',
        ]);

        Category::findOrFail($category->id)->update([
            'category_name_en' => $request->category_name_en,
            'category_name_bn' => $request->category_name_bn,
            'category_icon' => $request->category_icon,
            'category_slug_en' => strtolower(str_replace(' ', '-', $request->category_name_en)),
            'category_slug_bn' => str_replace(' ', '-', $request->category_name_bn),
        ]);

        return redirect()->route('category')->with('success', 'Category updated successfully!');
    }

    public function categoryDelete($id)
    {
        $brand = Category::findOrFail($id);
        $brand->delete();
        return redirect()->route('category')->with('success', 'Category Deleted Successfully!');
    }

}
