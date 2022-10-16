<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

    public function childs() {
        return $this->hasMany(MenuItem::class,'parent_id','id') ;
    }

    public function getAllItems(){
        if($this->child->count() > 0)
        {
            $this->child->getAll();
        }

        return $this;
    }

}
