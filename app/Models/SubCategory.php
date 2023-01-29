<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\TableDelete;

class SubCategory extends Model
{
    use HasFactory;
    private static $subcategory;
    private static $imagename;
    private static $directroy;
    private static $imageeurl;

    public static function getimageurl($image){
        self::$imagename = $image->getClientOriginalName();
        self::$directroy = 'subcategory_image/';
        $image->move(self::$directroy, self::$imagename);
        self::$imageeurl = self::$directroy . self::$imagename;
        return self::$imageeurl;
    }

    public static function newsubCategory($request){
        self::$subcategory = new SubCategory();
        self::$subcategory->category_id = $request->category_id;
        self::$subcategory->name = $request->name;
        self::$subcategory->description = $request->description;
        self::$subcategory->image = self::getImageUrl($request->file('image'));
        self::$subcategory->status = $request->status;
        self::$subcategory->save();
    }

    public static function updatesubcategory($request, $id){
        self::$subcategory = SubCategory::find($id);
        if($request->file('image')){
            if (file_exists(self::$subcategory->image)){
                unlink(self::$subcategory->image);
            }
            self::$imageeurl = self::getimageurl($request->file('image'));
        }
        self::$subcategory->name = $request->name;
        self::$subcategory->description = $request->description;
        self::$subcategory->image = self::$imageeurl;
        self::$subcategory->status = $request->status;
        self::$subcategory->save();
    }

    public static function deletesubcategory($id){
        self::$subcategory = SubCategory::find($id);
            if (file_exists(self::$subcategory->image)) {
                unlink(self::$subcategory->image);
            }
            self::$subcategory->delete();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
