<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products, $product;
    public function index()
    {
        return view('admin.product.index');
    }

    public function create(Request $request)
    {
        Product::newProduct($request);
        return redirect('/add-product')->with('message', 'Product info Create Successfully.');
    }

    public function manage()
    {
        $this->products = Product::all();
        return view('admin.product.manage', ['products' => $this->products]);
    }

    public function edit($id)
    {
        return view('admin.product.edit' , ['product' => Product::find($id) , 'products' => Product::all()]);
    }

    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/manage-product')->with('message' , 'Product Info Updated Successfully');
    }

    public function updateStatus( $id)
    {
        return redirect()->back()->with('message', Product::updateProductStatus($id));
    }

    public function detail($id)
    {
        return view('admin.product.detail' , ['product' =>Product::find($id)]);
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        return redirect('/product/manage')->with('message','Product Info Deleted');
    }


}
