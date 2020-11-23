<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table='sub_category';
    protected $fillable=['category_id','sub_category_name','sub_category_name_bn','status','serial_num','description','created_by','updated_by'];

    public function categoryData(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

}
