<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::latest()->get();
        return view('admin.brand.index', compact('brands'));
    }

    public function brandStore(Request $request)
    {
        $request->validate([
            'brand_name_en' => 'required',
            'brand_name_bn' => 'required',
            'brand_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Store image in "public/uploads"
        $imagePath = $request->file('brand_image')->store('uploads/brands', 'public');

        Brand::create([
            'brands_name_en' => $request->brand_name_en,
            'brands_name_bn' => $request->brand_name_bn,
            'brands_image' => $imagePath,
            'brands_slug_en' => strtolower(str_replace(' ', '-', $request->brand_name_en)),
            'brands_slug_bn' => str_replace(' ', '-', $request->brand_name_bn),
        ]);

        return redirect()->back()->with('success', 'Brand Added successfully!');
    }

    public function brandEdit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.brand.edit', compact('brand'));
    }

    public function brandUpdate(Request $request)
    {
        if ($request->brand_image) {
            $image = Brand::findOrFail($request->id);

            $request->validate([
                'brand_name_en' => 'required',
                'brand_name_bn' => 'required',
                'brand_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);


            // Delete from storage
            Storage::disk('public')->delete($image->brands_image);

            // Store image in "public/uploads"
            $imagePath = $request->file('brand_image')->store('uploads/brands', 'public');

            Brand::findOrFail($request->id)->update([
                'brands_name_en' => $request->brand_name_en,
                'brands_name_bn' => $request->brand_name_bn,
                'brands_image' => $imagePath,
                'brands_slug_en' => strtolower(str_replace(' ', '-', $request->brand_name_en)),
                'brands_slug_bn' => str_replace(' ', '-', $request->brand_name_bn),
            ]);

            return redirect()->route('brand')->with('success', 'Brand updated successfully!');
        } else {
            $request->validate([
                'brand_name_en' => 'required',
                'brand_name_bn' => 'required',
            ]);

            Brand::findOrFail($request->id)->update([
                'brands_name_en' => $request->brand_name_en,
                'brands_name_bn' => $request->brand_name_bn,
                'brands_slug_en' => strtolower(str_replace(' ', '-', $request->brand_name_en)),
                'brands_slug_bn' => str_replace(' ', '-', $request->brand_name_bn),
            ]);

            return redirect()->route('brand')->with('success', 'Brand updated successfully!');
        }
    }

    public function brandDelete($id)
    {
        $brand = Brand::findOrFail($id);
        // Delete from storage
        Storage::disk('public')->delete($brand->brands_image);
        $brand->delete();
        return redirect()->route('brand')->with('success', 'Brand Deleted Successfully!');
    }
}
