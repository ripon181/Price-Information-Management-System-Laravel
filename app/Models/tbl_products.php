<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_products extends Model
{
    use HasFactory;
    protected $fillable = ['product_name','product_model','category_id','brand_id','product_image','product_stock','product_dpprice','product_mrpprice','product_offerprice','product_shortdesc'];

    public function catinfo(){
        return $this->belongsTo(tbl_category::class,'category_id');
    }

    public function brandinfo(){
        return $this->belongsTo(tbl_brands::class,'brand_id');
    }
}
