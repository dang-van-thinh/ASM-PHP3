<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryService;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $service;
    public function __construct(
        CategoryService $service,
    )
    {
        $this->service = $service;
    }

    public function index(){
        $title = '';
        $data= [
            'category'=>$this->service->getAll()
        ];
        return view('admin.category.list',compact('title','data'));
    }

    public function create(){
        $title = '';
        return view('admin.category.add',compact(
            'title'
        ));
    }

    public function store(Request $request){
        $this->service->insert($request);
        return redirect()->route('admin.category.index');
    }

    public function detail($id){
        $title = '';
        $data = [
            'category'=>$this->service->getOne($id)
        ];
        return view("admin.category.detail",compact('title','data'));
    }

    public function update($id,Request $request){
        $this->service->update($id,$request);
        return redirect()->route('admin.category.index');
    }

    public function delete($id){
        $this->service->delete($id);
        return redirect()->route('admin.category.index');
    }
}
