<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Subsubcategory;
use Illuminate\Http\Request;

class SubSubCategoryController extends Controller
{
    public function index(){
        $subsubcategory = Subsubcategory::latest()->get();
        $category = Category::latest()->get();
        return view('admin.subsubcategory.index',compact('category','subsubcategory'));
    }

    //get subcategory with ajax
    public function getSubCat($cat_id){
        $subcat = Subcategory::where('category_id',$cat_id)->orderBy('sub_category_name_en','ASC')->get();
        return json_encode($subcat);
    }

    public function subSubCategoryStore(Request $request){
        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'sub_sub_category_name_en' => 'required',
            'sub_sub_category_name_bn' => 'required',
        ],[
            'category_id.required' => 'The category name field is required.',
            'subcategory_id.required' => 'The sub category name field is required.',
        ]);

        Subsubcategory::create([
            'category_id' => $request->category_id,
            'sub_category_id' => $request->subcategory_id,
            'sub_sub_category_name_en' => $request->sub_sub_category_name_en,
            'sub_sub_category_name_bn' => $request->sub_sub_category_name_bn,
            'sub_sub_category_slug_en' => strtolower(str_replace(' ', '-', $request->sub_sub_category_name_en)),
            'sub_sub_category_slug_bn' => str_replace(' ', '-', $request->sub_sub_category_name_bn),
        ]);

        return redirect()->back()->with('success', 'Sub Sub Category Added successfully!');
    }

    public function subSubCategoryDelete($id)
    {
        $subsubcategory = Subsubcategory::findOrFail($id);
        $subsubcategory->delete();
        return redirect()->back()->with('success', 'Sub Sub Category Deleted Successfully!');
    }
}
