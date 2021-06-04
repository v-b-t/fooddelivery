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
    
        $categories = DB::table('categories')->paginate(1);
        return view('/admin/categories', ['categories' => $categories]);
    }

    public function delete($id)

    {   
        Category::destroy($id);
        return redirect('/admin/categories')->with('alert-success', "Data Deleted $id");

    }

    public function create(CategoryRequest $req){

        $contact = new Category();
        $contact->title = $req->input('title');
        $contact->content = $req->input('content');
        $contact->save();
        return redirect()->route('index')->with('alert-success','Додано категорію');
    }



}
