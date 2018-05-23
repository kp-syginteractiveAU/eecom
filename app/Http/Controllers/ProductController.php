<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	public function index(Category $category, Product $products)
	{
		if ( $category->id ) {
			$products = $category->products;
		}
		$products = $products->all();
		return view( 'welcome', compact('products') );
	}

	public function show(Category $category, Product $product)
	{
		return view( 'show', compact('product') );		
	}

}
