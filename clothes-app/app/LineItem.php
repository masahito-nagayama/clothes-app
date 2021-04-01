<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineItem extends Model
{
    //
    public function carts()
    {
      return $this->belongsToMany(
        Product::class,
        'line_items',
      )->withPivot(['id', 'quantity']);
    }
}
