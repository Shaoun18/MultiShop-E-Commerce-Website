<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    private static $brand;
    private static $imagename;
    private static $directory;
    private static $imageurl;

    public static function getImageUrl($image){
        self::$imagename = $image->getClientOriginalname();
        self::$directory = 'brand-images/';
        $image->move(self::$directory, self::$imagename);
        self::$imageurl = self::$directory . self::$imagename;
        return self::$imageurl;
    }

    public static function newBrand($request){
        self::$brand = new Brand();
        self::$brand->name = $request->name;
        self::$brand->description = $request->description;
        self::$brand->image = self::getImageUrl($request->file('image'));
        self::$brand->status = $request->status;
        self::$brand->save();
    }

    public static function UpdateBrand($request, $id){
        self::$brand = Brand::find($id);
        if($request->file('image')){
            if(file_exists(self::$brand->image)){
                unlink(self::$brand->image);
            }
            self::$imageurl = self::getImageUrl($request->file('image'));
        }
        self::$brand->name = $request->name;
        self::$brand->description = $request->description;
        self::$brand->image = self::$imageurl;
        self::$brand->status = $request->status;
        self::$brand->save();
    }

    public static function deleteBrand($id){
        self::$brand = Brand::find($id);
        if (file_exists(self::$brand->image)){
            unlink(self::$brand->image);
        }
        self::$brand->delete();
    }
}
