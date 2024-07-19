<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryService;
use App\Http\Services\NewsService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $news;
    private $category;
    public function __construct(
        NewsService $news  ,
        CategoryService $category
    )
    {
        $this->news = $news;
        $this->category = $category;
    }

    //

    public function index(){
        $title= '';
        $data= [
            'hotNews'=>$this->news->getAll(),
            'category'=>$this->category->getAll()
        ];
        return view("client.page.new", compact(
            "title",
            "data"
        ));
    }

    public function detail($id){
        $title = '';
        $data = [
            'news'=>$this->news->getOne($id)
        ];
        return view("client.page.detail_new" , compact(
            'title',
            'data'
        ));
    }

    public function search(Request $request){

        $title = '';
        $data = [
            'news'=>$this->news->search($request->input("key")),
            'category'=>$this->category->getAll()
        ];
        return view("client.page.search",compact('title','data'));
    }
}
