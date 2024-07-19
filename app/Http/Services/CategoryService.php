<?php

namespace App\Http\Services;

use App\Http\Repository\CategoryRepository;

class CategoryService
{
    private $repo;
    public function __construct(CategoryRepository $repo)
    {
        $this->repo = $repo;
    }

    public function getAll(){
        return $this->repo->getAll();
    }

    public function getOne($id){
        return $this->repo->getOne($id);
    }

    public function insert($request){
        $data = [
            'name'=>$request->name
        ];
        $this->repo->insert($data);
    }

    public function delete($id){
        $this->repo->delete($id);
    }

    public function update($id,$request){
        $data= [
            'name'=>$request->name
        ];

        $this->repo->update($id,$data);
    }
}
