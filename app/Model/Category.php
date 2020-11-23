<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable=['category_name','category_name_bn','status','type','post_type','ad_view_type','serial_num','short_description','description','icon_photo','icon_class','created_by','updated_by','link'];

    public function subCategoryData(){
        return $this->hasOne(SubCategory::class,'category_id','id');
    }
}
