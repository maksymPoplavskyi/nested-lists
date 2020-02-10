<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $connection = 'mysql';

    protected $table = 'categories';

    public $timestamps = false;

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
}
