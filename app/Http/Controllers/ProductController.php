<?php

namespace App\Http\Controllers;
use App\MOdels\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $brands = \App\Models\Brand::all();
        $query = Product::with(['brand', 'category'])->where('is_active',true);
        if ($request->filled('search')){
            $search = $request->input('search');
            $cleanSku = strtoupper(preg_replace('/[^A-Za-z0-9]/', '', $search));
            $query->where(function($q)use($search,$cleanSku){
                $q->where('sku', 'LIKE',"%{$search}%")->orWhere('name', 'LIKE',"%{$search}%");

            });
        }
        if($request->filled('brand')){
            $query->where('brand_id',$request->brand);
        }
    
        $products = $query->latest()->paginate(12)->withQueryString();
        return view('products.index',compact('products', 'brands'));
    }
    public function show($slug)
    {
        $product = Product::with(['brand', 'category'])->where('slug',$slug)->where('is_active',true)->firstOrFail();
        return view('products.show', compact('product'));
    }
        public function about()
        {
            return view('pages.about');
        }

}


