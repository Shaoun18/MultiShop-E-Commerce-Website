<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category;
    private static $imagename;
    private static $directory;
    private static $imageurl;

    public static function getImageUrl($image){
        self::$imagename = $image->getClientOriginalname();
        self::$directory = 'category-images/';
        $image->move(self::$directory, self::$imagename);
        self::$imageurl = self::$directory . self::$imagename;
        return self::$imageurl;
    }

    public static function newCategory($request){
        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->image = self::getImageUrl($request->file('image'));
        self::$category->status = $request->status;
        self::$category->save();
    }

    public static function UpdateCategory($request, $id){
        self::$category = Category::find($id);
        if($request->file('image')){
            if(file_exists(self::$category->image)){
                unlink(self::$category->image);
            }
            self::$imageurl = self::getImageUrl($request->file('image'));
        }
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->image = self::$imageurl;
        self::$category->status = $request->status;
        self::$category->save();
    }

    public static function deleteCategory($id){
        self::$category = Category::find($id);
        if (file_exists(self::$category->image)){
            unlink(self::$category->image);
        }
        self::$category->delete();
    }

    public function subcategories(){
        return $this->hasMany(SubCategory::class);
    }

}
