<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use SoftDeletes;
	
    protected $table = 'product_categories';
	
    protected $guarded = ['id'];
	
    public function products()
	{
        return $this->hasMany('App\Models\Product\Product');
    }
}
