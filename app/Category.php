<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use NodeTrait;

    public $additional_attributes = ['full_name', 'format_slug', 'parent_categories', 'leafs'];

    public static function boot()
    {
        parent::boot();

        static::saving(function($category) {
            
            $category->slug = Str::slug($category->format_slug);

            return true;
        });
    }

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

    public function getFormatSlugAttribute() 
    {
        if($this->parent_id){
            $parent = Category::where('id', $this->parent_id)->first();            
            if($parent->parent_id){
                $grandparent = Category::where('id', $parent->parent_id)->first();
                return $grandparent->name . "-" . $parent->name . "-" . $this->name;
            }
            return $parent->name . "-" . $this->name;
        }

        return $this->name;
    }

    public function getParentCategoriesAttribute() 
    {
        if(!$this->isLeaf()){
            if($this->parent_id == null)
                return $this->name;
            else {
                $parent = Category::where('id', $this->parent_id)->first();
                return $parent->name . "\\" . $this->name;
            }
        }
    }

    public function getLeafsAttribute() 
    {
        if($this->isLeaf()){
            $parent = Category::where('id', $this->parent_id)->first();            
            $grandparent = Category::where('id', $parent->parent_id)->first();
            return $grandparent->name . "\\" . $parent->name . "\\" . $this->name;
        }
    }
    
}
