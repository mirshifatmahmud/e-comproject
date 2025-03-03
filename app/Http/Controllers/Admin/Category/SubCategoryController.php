<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        $subcategories = Subcategory::latest()->get();
        $categories = Category::orderBy('category_name_en','ASC')->get(); // or use model one to many.
        return view('admin.subcategory.index',compact('subcategories','categories'));
    }

    public function subCategoryStore(Request $request){
        $request->validate([
            'category_id' => 'required',
            'sub_category_name_en' => 'required',
            'sub_category_name_bn' => 'required',
        ],[
            'category_id.required' => 'The category name field is required.',
        ]);

        Subcategory::create([
            'category_id' => $request->category_id,
            'sub_category_name_en' => $request->sub_category_name_en,
            'sub_category_name_bn' => $request->sub_category_name_bn,
            'sub_category_slug_en' => strtolower(str_replace(' ', '-', $request->sub_category_name_en)),
            'sub_category_slug_bn' => str_replace(' ', '-', $request->sub_category_name_bn),
        ]);

        return redirect()->back()->with('success', 'Sub Category Added successfully!');
    }

    public function subCategoryEdit($id){
        $subcategories = Subcategory::findOrFail($id);
        $category = Category::orderBy('category_name_en','ASC')->get(); // or use model one to many.
        return view('admin.subcategory.edit', compact('subcategories','category'));
    }

    public function subCategoryUpdate(Request $request)
    {
        $subcategory = Subcategory::findOrFail($request->id);

        $request->validate([
            'category_id' => 'required',
            'sub_category_name_en' => 'required',
            'sub_category_name_bn' => 'required',
        ],[
            'category_id.required' => 'The category name field is required.',
        ]);

        Subcategory::findOrFail($subcategory->id)->update([
            'category_id' => $request->category_id,
            'sub_category_name_en' => $request->sub_category_name_en,
            'sub_category_name_bn' => $request->sub_category_name_bn,
            'sub_category_slug_en' => strtolower(str_replace(' ', '-', $request->sub_category_name_en)),
            'sub_category_slug_bn' => str_replace(' ', '-', $request->sub_category_name_bn),
        ]);

        return redirect()->route('subCategory')->with('success', 'Sub Category updated successfully!');


    }

    public function subCategoryDelete($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $subcategory->delete();
        return redirect()->back()->with('success', 'Sub Category Deleted Successfully!');
    }
}
