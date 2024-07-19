<?php

namespace App\Http\Services;

use App\Http\Repository\CategoryRepository;
use App\Http\Repository\NewsRepository;
use Illuminate\Http\Request;

class NewsService
{
    private $repo;
    public function __construct(
        NewsRepository $repo
    )
    {
        $this->repo = $repo;
    }

    public function getAll(){
        return $this->repo->getAll();
    }

    public function getOne($id){
        return  $this->repo->getOne($id);
    }

    public function insert(Request $request){
        if ($request->hasFile('img')){
            $fileName = $request->file("img")->store("uploads/news","public");

        }else{
            $fileName = null;
        }

        $data = [
            'title'=>$request->title,
            'description'=>$request->description,
            'img'=>$fileName,
            'category_id'=>$request->category_id
        ];
        $this->repo->insert($data);
    }

    public function delete($id){
        $this->repo->delete($id);
    }

    public function update($id,Request $request){
        if ($request->hasFile('img')){
            $fileName = $request->file("img")->store("uploads/news","public");

        }else{
            $fileName = $request->img_2;
        }
        $data = [
            'title'=>$request->title,
            'description'=>$request->description,
            'img'=>$fileName,
            'category_id'=>$request->category_id
        ];
        $this->repo->update($id,$data);
    }

    public function search($key){
        return $this->repo->search($key);
    }

}
