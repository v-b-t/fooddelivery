<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;


class CategoriesController extends Controller
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
    
        $categories = DB::table('categories')->paginate(3);
        return view('/admin/categories', ['categories' => $categories]);  
    }
    
    public function allData()
    {
        // $data['cat'] = Category::all();
        // return view('products')->with(['cat'=>$data['cat']]);
        // return view('index', ['data' => Category::all()]); 
        return view('public/index',['categories'=> Category::all()]);
    }


    public function delete($id)
    {   
        Category::destroy($id);
        return redirect('/admin/categories')->with('alert-danger', "Видалено категорiю з id =  $id");

    }

    public function update(CategoryRequest $req2)
    {   
        $category = new Category();
        $category->title = $req2->input('title');
        $category->content = $req2->input('content');
        $category->save();
        return redirect('/admin/categories')->with('alert-primary', "Оновлено категорію");

    }

    public function submit(CategoryRequest $req){

        $category = new Category();
        $category->title = $req->input('title');
        $category->content = $req->input('content');
        $category->save();
        return redirect()->route('categ')->with('alert-success','Додано категорію');
    }

}
