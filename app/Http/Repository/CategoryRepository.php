<?php

namespace App\Http\Repository;

use App\Models\Category;

class CategoryRepository
{
    protected $model;
public function __construct()
{
    $this->model = new Category();
}

    public function getAll(){
        return Category::all();
    }

    public function getOne($id){
      return Category::findOrFail($id);
    }

    public function insert($data){
        Category::insert($data);

    }

    public function delete($id){
        Category::findOrFail($id)->delete();
    }

    public function update($id,$data){
        Category::where('id',$id)->update($data);
    }
}
