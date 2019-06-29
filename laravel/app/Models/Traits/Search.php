<?php

namespace App\Models\Traits;

trait Search{

    public function searchItems($query,$request){
        if(isset($request->search)){
            foreach ($this->searchItems as $item){
                $query->orWhere($item,'like',"%$request->search%");
            }
        }
        return $query;
    }

}