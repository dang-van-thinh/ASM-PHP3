<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryService;
use App\Http\Services\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $service;
    private $categoeyService;

    public function __construct(
        NewsService $service,
        CategoryService $categoryService
    )
    {
        $this->service = $service;
        $this->categoeyService= $categoryService;
    }

    public function index()
    {
        $title = '';
        $data = [
            'news' => $this->service->getAll()
        ];
        return view('admin.news.list', compact(
            'data',
            'title'
        ));
    }

    public function create()
    {
        $title = '';
        $data = [
            'category'=>$this->categoeyService->getAll()
        ];
        return view('admin.news.add', compact(
            'title',
            'data'
        ));
    }

    public function store(Request $request)
    {
        $this->service->insert($request);
        return redirect()->route("admin.news.index");
    }

    public function detail($id)
    {
        $title = '';
        $data= [
            'news'=>$this->service->getOne($id),
            'category'=>$this->categoeyService->getAll()
        ];
        return view("admin.news.detail",compact('title','data'));

    }

    public function update($id , Request $request)
    {
        $this->service->update($id,$request);
        return redirect()->route("admin.news.index");
    }

    public function delete($id)
    {
        $this->service->delete($id);
        return redirect()->route("admin.news.index");
    }
}
