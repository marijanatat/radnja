<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use NodeTrait;

    public $additional_attributes = ['full_name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getFullNameAttribute() 
    {
        if($this->parent_id){
            $parent = Category::where('id', $this->parent_id)->first();            
            if($parent->parent_id){
                $grandparent = Category::where('id', $parent->parent_id)->first();
                return $grandparent->name . "\\" . $parent->name . "\\" . $this->name;
            }
            return $parent->name . "\\" . $this->name;
        }

        return $this->name;
    }
    
    // if($this->parent_id != null){
    //     $parent = Category::where('id', $this->parent_id)->get();
    //     $parentName = $parent->pluck('name');
    //     if($parent->parent_id !=null){
    //         $grandParent = Category::where('id', $parent->parent_id)->get();
    //         $grandParentName = $grandParent->pluck('name');
    //         return $this->name . " " . strtoupper($grandParentName)."\\" . strtoupper($parentName);
    //     }  
    //     return $this->name . " " . strtoupper($parentName);
    // }

    // return $this->name;
    
}
