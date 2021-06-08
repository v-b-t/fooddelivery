<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Http\Requests\ProductRequest;


class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = DB::table('products')->paginate(3);
        return view('/admin/products', ['products' => $products]);
 
    }

    public function allData()
    {
      
        return view('public/products',['products'=> Product::all()]);  
    }
    
    
    public function delete($id)
    {   
        Product::destroy($id);
        return redirect('/admin/products')->with('alert-success', "Видалено категорiю з id =  $id");

    }

    public function submit(ProductRequest $req){

        $product = new Product();
        $product->title = $req->input('title');
        $product->content = $req->input('content');
        $product->price = $req->input('price');
        $product->save();
        return redirect()->route('prod')->with('alert-success','Додано продукт');
    }

    public function update($id)
    {   
        $product = new Product();
        return view('admin/upd_prod',['data'=> $product->find($id)]);
    }

    public function upd(ProductRequest $req, $id){

        $product = Product::find($id);
        $product->title = $req->input('title');
        $product->content = $req->input('content');
        $product->price = $req->input('price');
        $product->update();
        return redirect()->route('admin/products')->with('alert-success','Оновлено продукт');
    }

}
