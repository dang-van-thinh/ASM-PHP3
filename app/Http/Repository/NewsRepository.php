<?php

namespace App\Http\Repository;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsRepository
{
    public function getAll(){
        return News::query()->orderBy("id","desc")->get();
    }

    public function getOne($id){
        return News::query()->findOrFail($id);
    }
    public function insert($data){
        News::query()->create($data);
    }

    public function delete($id){
        News::query()->findOrFail($id)->delete();
    }

    public function update($id,$data){
        News::query()->where('id',$id)->update($data);

    }

    public function search($key){
        $news = News::query()
            ->where("title","like","%".$key."%")
            ->orWhere("description","like","%".$key."%")
            ->get();
        return $news;
    }
}
