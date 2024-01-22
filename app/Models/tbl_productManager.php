<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_productManager extends Model
{
    use HasFactory;
    protected $fillable = ['name','brand_id','phoneNumber','email','image'];

    public function brandinfo(){
        return $this->belongsTo(tbl_brands::class,'brand_id');
    }
}
