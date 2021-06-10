<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\User;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Route;
use FileUploadTrait;
use ImageUpload;

class CategoriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
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
        return view('public/index',['categories'=> Category::all(), 'users'=> User::all()]);
        
    } 

    public function delete($id)
    {   
        Category::destroy($id);
        return redirect('/admin/categories')->with('alert-danger', "Видалено категорiю з id =  $id");

    }

    public function update($id)
    {   
        $category = new Category();
        return view('admin/upd_cat',['data'=> $category->find($id)]);
    }

    public function submit(CategoryRequest $req){

        $category = new Category();
        $category->title = $req->input('title');
        $category->content = $req->input('content');
        $category->slug = $req->input('slug');
        // $category->photo = $req->input('photo');
        // if ($req->has('photo')) {
        //     $images =  $req->file('photo');
        //     foreach ($images as $image) {
        //         $filename = $this->saveImages($image);
        //     }
        // }
        $category->save();
        return redirect()->route('admin/categories')->with('alert-success','Додано категорію');
    }

    public function upd(CategoryRequest $req, $id){

        $category = Category::find($id);
        $category->title = $req->input('title');
        $category->content = $req->input('content');
        $category->update();
        return redirect()->route('admin/categories')->with('alert-success','Оновлено категорію');
    }
}
