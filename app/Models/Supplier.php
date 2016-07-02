<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['name', 'phone', 'address', 'description'];

    /**
     * Get the comments for the blog post.
     */

    public function stock_details(){
        return $this->hasMany('App\Models\Stock');
    }
}
